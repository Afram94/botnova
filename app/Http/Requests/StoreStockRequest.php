<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class StoreStockRequest
 * @package App\Http\Requests
 */
class StoreStockRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('stock_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'product_id'      => [
                'required',
                'integer',
                Rule::unique('stocks')
                    ->where('product_id', request()->input('product_id'))
                    ->whereNull('deleted_at'),
            ],
            'current_stock' => [
                'nullable',
                'integer',
            ],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'product_id.unique' => 'The product is in stock already.',
        ];
    }
}