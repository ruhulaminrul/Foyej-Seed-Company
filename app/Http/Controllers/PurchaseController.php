<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\Category;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();


        $categories = Category::all();
        $productTypes = Product_type::all();


        return view('product.purchase', compact('categories', 'productTypes', 'products'));
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

        $purchase = new Purchase();

        //  $purchase->user_id= $request->user_id ;
        $purchase->user_id = 1;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->pay = $request->pay;
        $purchase->due = $request->due;
        $purchase->pre_due = $request->pre_due;
        
        $purchase->discount = $request->discount;
        $purchase->total = $request->total;

        //   $purchase->user_id=1 ;   
        //  $purchase->supplier_id=1 ;   
        // $purchase->due= 101 ;   
        // $purchase->discount= 121 ; 
        // $purchase->total= 120; 

        $purchase->save();

        return $purchase->id;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
