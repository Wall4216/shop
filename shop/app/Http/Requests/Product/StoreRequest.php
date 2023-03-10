<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'string',
            'description' => 'string',
            'tags' => 'nullable',
            'colors' => 'nullable',
            'content' => 'required',
            'preview_image' => 'required',
            'price' => 'required',
            'old_price' => 'required',
            'count' => 'required',
            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'group_id' => 'nullable',
            'product_images' => 'nullable',
        ];
    }
}
