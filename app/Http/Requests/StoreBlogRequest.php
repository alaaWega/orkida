<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'article_id'=>'required',
            // 'image'    =>'sometimes|image|mimes:jpg,png,jpeg,JPG,PNG,JPEG,GIF,gif,webp,WEBP,svg,SVG',
            'name'=>'required',
            'image_alt'=>'required',
            'keywords'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'slug'=>'required',
            'description_ar'=>'required',
        ];
    }
}
