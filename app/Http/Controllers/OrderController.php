<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user()->id;
        $a = order::where('user_id', $user)->get();
        return view('order.cart')->with('order',$a);
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
        $this->validate($request,[
            'category' => 'required',
            'type' => 'required',
            'size' => 'required',
            'quantity' => 'required',
        ]);

        $order = new order([
            'category' => $request->get('category'),
            'type'=> $request->get('type'),
            'size'=> $request->get('size'),
            'quantity' => $request->get('quantity'),
        ]);
        $order->user_id = auth()->user()->id;
        $order->save();
        return redirect('/select');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
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
        order::find($id)->delete();
        return redirect('/order');
    }

    public function delete($id)
    {
        echo $id;
        order::find($id)->delete();
        return redirect('/order');
    }
}
