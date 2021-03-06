<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductCreateRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'short_title' => 'min:4',
            'offer' => 'min:4',
            'description' => 'required|min:40|',
            'price' => 'required|numeric|',
            'old_price' => 'numeric',
            'slider_img' => 'image|max:5000|mimes:jpeg,bmp,png'
        ];
    }
}
