<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\Admin\CustomerResource;
use App\Customer;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomerResource(Customer::with(['users'])->get());
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->all());
        $customer->users()->sync($request->input('users', []));

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Customer $customer)
    {
        abort_if(Gate::denies('customer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomerResource($customer->load(['users']));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        $customer->users()->sync($request->input('users', []));

        return (new CustomerResource($customer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Customer $customer)
    {
        abort_if(Gate::denies('customer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
