<?php

namespace App\Http\Requests;

use App\ProductInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class StoreProductinfoRequest extends FormRequest
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
                'required',
            ],
            'serial_number'    => [
                'integer',
                'required',
                Rule::unique('productinfos')
                    ->where('serial_number', request()->input('serial_number'))
                    
            ],
            'products.*' => [
                'integer',
                'required',
            ],
            'products'   => [
                'array',
                'required',
            ],
            'customers.*' => [
                'integer',
                'required',
            ],
            'customers'   => [
                'array',
                'required',
            ],
            
            
        ];
    }
    public function messages(): array
    {
        return [
            'serial_number.unique' => 'Serienummert finns redan.',
        ];
    }
}
