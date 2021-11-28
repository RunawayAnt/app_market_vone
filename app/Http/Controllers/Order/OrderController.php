<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // public $delivery = "deny", $paymentmethod;
    // public $request = [];

    // protected $rules = [
    //     'delivery' => 'required',
    //     'paymentmethod' => 'required'
    // ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $customer = User::find($user)-> profile;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function confirmdelivery()
    // {
    //     $this->delivery == 'deny' ? $this->delivery = "confirm" : $this->delivery;
    // }


    public function show($request)
    {


        // // public function mount()
        // // {
        // //     // $this->delivery = 'Negado';
        // // }

        //     $this->validate();

        //     $data = [
        //         'delivery' => $this->delivery,
        //         'methodpay' => $this->paymentmethod
        //     ];

        //     // return route('client.order.delivery', $data);
        //     // redirect()->route('client.order.delivery', compact('data'));
        //     // $this->reset('delivery', 'paymentmethod');

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
