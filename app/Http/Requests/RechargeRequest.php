<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RechargeRequest extends FormRequest
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
            'amount' => 'required|min:1',
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'Số tiền nạp bắt buộc nhập',
            'amount.min' => 'Số tiền nạp phải lớn hơn 1'
        ];
    }
}
