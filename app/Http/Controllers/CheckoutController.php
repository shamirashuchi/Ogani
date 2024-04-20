<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
use Cart;
use Mail;
class CheckoutController extends Controller
{
    private $order, $customer, $orderDetail;

    public function index()
    {
        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        $customerId = Session::get('customer_id');
        $this->cartProducts = Cart::search(function ($cartItem, $rowId) use ($customerId) {
            return $cartItem->options->user_id === $customerId;
        });
        return view('front-end.checkout.index', ['customer' => $this->customer,
            'cart_products' => $this->cartProducts,]);
    }

    public function newOrder(Request $request)
    {
        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {

            $this->customer = Customer::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            if ($this->customer)
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
            }
            else
            {
                $this->customer = Customer::newCustomer($request);
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
            }
        }

        if ($request->payment_method == 'Cash')
        {
            $this->order = new Order();
            $this->order->customer_id       = $this->customer->id;
            $this->order->order_total       = $request->order_total;
            $this->order->tax_total         = $request->tax_total;
            $this->order->shipping_total    = $request->shipping_total;
            $this->order->order_date        = date('Y-m-d');
            $this->order->order_timestamp   = strtotime(date('Y-m-d'));
            $this->order->delivery_address  = $request->delivery_address;
            $this->order->payment_method    = $request->payment_method;
            $this->order->save();

            foreach(Cart::content() as $item)
            {
                $this->orderDetail = new OrderDetail();
                $this->orderDetail->order_id        = $this->order->id;
                $this->orderDetail->product_id      = $item->id;
                $this->orderDetail->product_name    = $item->name;
                $this->orderDetail->product_code    = $item->options->code;
                $this->orderDetail->product_price   = $item->price;
                $this->orderDetail->product_qty     = $item->qty;
                $this->orderDetail->save();

                Cart::remove($item->rowId);
            }

            /* Email Send */

            $title = 'Welcome to our website';
            $body = 'Thank you for your order!';
            Mail::to($this->customer->email)
                ->send(new OrderConfirmationMail($title, $body));

            /* Email Send */

            return redirect('/complete-order')
                ->with('message', 'Congratulation ...
                your order info post successfully. Please wait..
                we contact with you soon.');
        }
        elseif ($request->payment_method == 'Online')
        {
            $sslCommerez = new SslCommerzPaymentController();
            $sslCommerez->index($request, $this->customer);
        }
    }

    public function completeOrder()
    {
        return view('front-end.checkout.complete-order');
    }
}
