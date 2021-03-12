<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductinfoRequest;
use App\Http\Requests\StoreProductinfoRequest;
use App\Http\Requests\UpdateProductinfoRequest;
use App\Productinfo;
use App\Product;
use App\Customer;
use App\Stock;
use App\Transaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('productinfo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productinfos = Productinfo::all();
        return view('admin.productinfos.index', compact('productinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('productinfo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id');
        $customers = Customer::all()->pluck('name', 'id');
        $stocks = Stock::all()->pluck('name', 'id');
        $transactions = Transaction::all()->pluck('name', 'id');

        return view('admin.productinfos.create', compact('products', 'customers', 'stocks','transactions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductinfoRequest $request)
    {
        $productinfo = Productinfo::create($request->all());
        $productinfo->products()->sync($request->input('products', []));
        $productinfo->customers()->sync($request->input('customers', []));
        $productinfo->stocks()->sync($request->input('stocks', []));
        $productinfo->transactions()->sync($request->input('transactions', []));

        return redirect()->route('admin.productinfos.index');
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
        //
    }
    
}
