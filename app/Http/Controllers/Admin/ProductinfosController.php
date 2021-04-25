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

    public function index()
    {
        abort_if(Gate::denies('productinfo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productinfos = Productinfo::all();
        return view('admin.productinfos.index', compact('productinfos'));
    }

    public function create()
    {
        abort_if(Gate::denies('productinfo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id');
        $customers = Customer::all()->pluck('name', 'id');
        $stocks = Stock::all()->pluck('current_stock', 'id');
        
        $transactions = Transaction::all()->pluck('name', 'id');

        return view('admin.productinfos.create', compact('products', 'customers', 'stocks','transactions'));
    }

    public function store(StoreProductinfoRequest $request)
    {
        $productinfo = Productinfo::create($request->all());
        $productinfo->products()->sync($request->input('products', []));
        $productinfo->customers()->sync($request->input('customers', []));
        $productinfo->stocks()->sync($request->input('stocks', []));
        $productinfo->transactions()->sync($request->input('transactions', []));

        return redirect()->route('admin.stocks.index');
    }

    public function show(Productinfo $productinfo)
    {
        abort_if(Gate::denies('productinfo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productinfo->load('customers' ,'products');

        return view('admin.productinfos.show', compact('productinfo'));
    }

    public function edit(Productinfo $productinfo)
    {
        abort_if(Gate::denies('productinfo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all()->pluck('name', 'id');
        $products = Product::all()->pluck('name', 'id');

        $productinfo->load('customers', 'products');

        return view('admin.productinfos.edit', compact('products', 'customers', 'productinfo'));
    }

    public function update(MassDestroyProductRequest $request, Productinfo $productinfo)
    {
        $productinfo->update($request->all());
        $productinfo->products()->sync($request->input('products', []));
        $productinfo->customers()->sync($request->input('customers', []));
        

        return redirect()->route('admin.productinfos.index')->withSuccessMessage(__('global.data_edited_successfully'));
    }

    public function destroy(Productinfo $productinfo)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productinfo->delete();

        return back()->withSuccessMessage(__('global.data_deleted_successfully'));
    }

    public function massDestroy(MassDestroyProductinfoRequest $request)
    {
        Productinfo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
