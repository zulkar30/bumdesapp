<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:255',
            'picturePath' => 'required|image',
            'description' => 'required',
            'price' => 'required|integer',
            'categories' => ['required', 'string', 'max:255', 'in:BATIK,TENUN,TANJAK,AKSESORIS'],
            'types' => '',
            'stock' => 'required|integer',
        ];
    }
}
