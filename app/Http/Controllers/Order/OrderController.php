<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Void_;

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
        $payment = Payment::all();


        return view('order.index', compact('customer', 'payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmPay(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $user = Auth::user()->id;
        $email = Auth::user()->email;
        $datapurchase = User::find($user)->profile;

        $products = \Cart::getContent();
        $total = \Cart::getTotal();

        $delivery = $request->input('delivery');
        $methodpayment = $request->input('methodpayment');
        $imagen = $request->file('image')->store('public/comprobantes');

        $file = Storage::url($imagen);

        if ($total) {
            Order::create([
                'order_ammount' =>  $total,
                'order_email' => $email,
                'order_status' => 'in_process',
                'type_payment' => $methodpayment,
                'detail_payment' => $file,
                'delivery' => $delivery,
                'profile_id' => $datapurchase->id,
            ]);

            $data = Order::latest('id')->first();

            foreach ($products as $item) {
                DB::insert('insert into order_product (price, quantity, order_id, product_id, created_at, updated_at) values (?,?,?,?,now(),now())', [$item->price, $item->quantity, $data->id,  $item->id]);
            }
        }
        \Cart::clear();

        return view('order.store', compact('datapurchase'));
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
        $methodpayment = Payment::where('name', $methodpayment)->get();

        // $request -> input('')

        // return $request->input('paymentmethod');



        return view('order.show', compact('products', 'total', 'subtotal', 'delivery', 'pricedelivery', 'methodpayment'));
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
