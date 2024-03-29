<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'product_image' => ['required', 'image'],
            'bg_image' => ['required', 'image'],
            'manufacturer_partners' => ['nullable', 'array'],
            'manufacturer_partners.*' => ['max:5120', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required.'
        ];
    }
}
