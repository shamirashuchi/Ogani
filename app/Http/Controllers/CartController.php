<?php

namespace App\Http\Controllers;



use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;
class CartController extends Controller
{
    private $product, $cartProducts, $total,$userId;
    public function index(){
        $customerId = Session::get('customer_id');
        $this->cartProducts = Cart::search(function ($cartItem, $rowId) use ($customerId) {
            return $cartItem->options->user_id === $customerId;
        });
        return view('front-end.cart.index', [
            'cart_products' => $this->cartProducts,
        ]);
    }

    public function addCart(Request $request)
    {
        $this->product = Product::find($request->id);
        $customerId = Session::get('customer_id');

        Cart::add([
            'id'       => $request->id,
            'name'     => $this->product->name,
            'qty'      => $request->qty,
            'price'    => $this->product->selling_price,
            'weight'   => $this->product->unit->code,
            'options'  => [
                'code'  => $this->product->code,
                'image' => $this->product->image,
                'user_id' => $customerId,
            ]]);
        return redirect('/cart/show');
    }

    public function update(Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);
        return redirect('/cart/show') ->with('message', 'Card Product info update successfully');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart/show') ->with('message', 'Card Product info delete successfully');
    }

}
