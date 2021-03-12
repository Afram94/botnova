<?php

namespace App\Http\Requests;

use App\ProductInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductinfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('productinfo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description'    => [
                'string',
            ],
            'serial_number'    => [
                'string', 
            ],
            'products.*' => [
                'integer',
            ],
            'products'   => [
                'array',
            ],
            'customers.*' => [
                'integer',
            ],
            'customers'   => [
                'array',
            ],
        ];
    }
}
