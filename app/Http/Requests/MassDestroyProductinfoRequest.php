<?php

namespace App\Http\Requests;

use App\Productinfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProductinfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('productinfo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:permissions,id',
        ];
    }
}
