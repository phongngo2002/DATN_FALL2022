<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'money' => 'required|numeric|min:24.855',
            'code' => 'required|size:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email ví bắt buộc nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'money.required' => 'Số tiền rút bắt buộc nhập',
            'money.numeric' => 'Số tiền rút phải là số',
            'money.min' => 'Số xu rút phải lớn hơn 24.855',
            'code.required' => 'Mã xác minh bắt buộc nhập',
            'code.size' => 'Mã xác minh không lợp lệ'
        ];
    }
}
