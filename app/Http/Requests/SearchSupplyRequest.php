<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchSupplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


  public function rules(): array
{
    return [
        'title'         => 'nullable|string|max:255',
        'stock_quantity'=> 'nullable|integer|min:0',
        'pharmacy_price'=> 'nullable|numeric',
        'consumer_price'=> 'nullable|numeric',
    ];
}

}
