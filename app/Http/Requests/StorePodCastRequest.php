<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePodCastRequest extends FormRequest
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
            'name' => 'required|min:4|max:255|unique:pod_casts,name',
            'description' => 'required|max:1000',
            'marketing_url' => 'required',
            'feed_url' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
}
