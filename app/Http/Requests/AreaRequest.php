<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
        $rules = [];
        $currentAction = $this->route()->getActionMethod();

        switch ($this->method()):
            case 'POST':
                switch ($currentAction) {
                    case 'saveAdd_areas':
                        $rules = [
                            'name' => 'required|unique:areas',
                            'city_id' => 'required|min:1',
                            'district_id' => 'required|min:1',
                            'ward_id' => 'required|min:1',
                            'address' => 'required',
                            'latitude' => 'required',
                            'longitude' => 'required',
                            'link_gg_map' => 'required',
                            'imgReal' => 'required'
                            // 'g-recaptcha-response' => 'required|recaptcha'
                        ];
                        break;
                    case 'update_areas':
                        $rules = [
                            'name' => 'required',
                            'city_id' => 'required|min:1',
                            'district_id' => 'required|min:1',
                            'ward_id' => 'required|min:1',
                            'address' => 'required',
                            'latitude' => 'required',
                            'longitude' => 'required',
                            'link_gg_map' => 'required',
                            // 'g-recaptcha-response' => 'required|recaptcha'
                        ];
                        break;
                    case 'send_bill':
                        $rules = [
                            'file' => 'required'
                        ];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        endswitch;
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên khu trọ bắt buộc nhập !',
            'name.unique' => 'Tên khu trọ đã tồn tại.Vui lòng nhập tên khác !',
            'city_id.required' => 'Bạn chưa chọn thành phố !',
            'district_id.required' => 'Bạn chưa chọn quận huyện !',
            'ward_id.required' => 'Bạn chưa chọn phường xã!',
            'address.required' => 'Địa chỉ chính xác bắt buộc nhập !',
            'latitude.required' => 'Latitude bắt buộc nhập !',
            'longitude.required' => 'Longitude bắt buộc nhập !',
            'link_gg_map.required' => 'Linh nhúng gg map bắt buộc nhập !',
            'imgReal.required' => 'Ảnh đại diện bắt buộc chọn !',
        ];
    }
}
