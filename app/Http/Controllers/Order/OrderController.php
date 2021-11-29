<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public $user;
    // public $customer;

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->user = Auth::user()->id;
        $customer = User::find($this->user)->profile;
        return view('order.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'paymentmethod' => 'required'
        ]);

        $configprice = 9.00;

        $products = \Cart::getContent();
        $total = \Cart::getTotal();
        $subtotal = \Cart::getSubTotal();
        $delivery = $request->input('delivery') ? $request->input('delivery') : 'canceled';
        $pricedelivery = $request->input('delivery') ? $configprice : 0.00;

        $methodpayment = $request->input('paymentmethod');


        // $request -> input('')

        // return $request->input('paymentmethod');

        

        return view('order.show', compact('products', 'total', 'subtotal', 'delivery', 'pricedelivery','methodpayment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
