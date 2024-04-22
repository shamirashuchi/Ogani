<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('admin.order.index',['orders'=>Order::all()]);
    }

    public function orderDetail($id){
        return view('admin.order.detail',['order'=>Order:: find($id)]);
    }
    public function orderInvoice($id){
        $pdf = Pdf::loadView('admin.order.invoice',
            ['order'=>Order:: find($id)]);
        return $pdf->download('invoice.pdf');
//        return $pdf->stream();
    }

    public function orderEdit($id){
        return view('admin.order.edit',[
            'order'=>Order::find($id)
        ]);
    }
    public function orderUpdate(Request $request)
    {
        Order::updateOrder($request);
        return redirect('/manage/order')->with('message','order info update successfully');
    }
    public function delete($id)
    {
        Order::deleteOrder($id);
        return redirect('/manage/order')->with('message', 'Order info delete successfully.');
    }

}
