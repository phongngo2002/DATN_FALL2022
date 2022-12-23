<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'motel_id' => 'required',
            'time' => 'required|date|after:' . date('Y-m-d H:i:s'),
        ];
    }


    public function messages()
    {
        return [
            'motel_id.required' => 'Mã phòng trọ là bắt buộc',
            'time.required' => 'Ngày hẹn bắt buộc nhập',
            'time.date' => 'Ngày hẹn chưa đúng định dạng',
            'time.after' => 'Ngày hẹn phải sau thời gian hiện tại'
        ];
    }
}
