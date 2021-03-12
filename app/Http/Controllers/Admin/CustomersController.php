<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCustomerRequest;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Customer;
use App\Productinfo;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CustomersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all();
        
        

        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id');
        $productinfos = Productinfo::all()->pluck('name', 'id');

        return view('admin.customers.create', compact('users', 'productinfos'));
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->all());
        $customer->users()->sync($request->input('users', []));
        $customer->productinfos()->sync($request->input('productinfos', []));

        return redirect()->route('admin.customers.index')->withSuccessMessage(__('global.data_saved_successfully'));
    }

    public function edit(Customer $customer)
    {
        abort_if(Gate::denies('customer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id');

        $customer->load('users');

        return view('admin.customers.edit', compact('users', 'customer'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        $customer->users()->sync($request->input('users', []));

        return redirect()->route('admin.customers.index')->withSuccessMessage(__('global.data_edited_successfully'));
    }

    public function show(Customer $customer)
    {
        abort_if(Gate::denies('customer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->load('users', 'productinfos');

        return view('admin.customers.show', compact('customer'));
    }

    public function destroy(Customer $customer)
    {
        abort_if(Gate::denies('customer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->delete();

        return back()->withSuccessMessage(__('global.data_deleted_successfully'));
    }
}
