<?php

namespace App\Http\Controllers;

use App\Models\ProductVariantPrice;
use App\Http\Requests\StoreProductVariantPriceRequest;
use App\Http\Requests\UpdateProductVariantPriceRequest;

class ProductVariantPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductVariantPriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductVariantPriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductVariantPriceRequest  $request
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductVariantPriceRequest $request, ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVariantPrice $productVariantPrice)
    {
        //
    }
}
