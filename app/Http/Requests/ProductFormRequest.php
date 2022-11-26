<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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

                'category_id' => [
                    'required',
                    'integer'
                ],
                'name' => [
                    'required',
                    'string'
                ],
                'slug' => [
                    'required',
                    'string',
                    'max:255'
                ],
                'small_description' => [
                    'required',
                    'string'
                ],
                'ingredients' => [
                    'required',
                    'string'
                ],
                'meta_title' => [
                    'required',
                    'string'
                ],
                'meta_keyword' => [
                    'required',
                    'string'
                ],
                'meta_description' => [
                    'required',
                    'string'
                ],
                'price' => [
                    'required',
                     'integer'
                ],
                'quantity' => [
                    'required',
                     'integer'
                ],
                'status' => [
                    'nullable',
                ],
                'image' => [
                    'nullable',
                ],
        ];
    }
}

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 10: Add Product w/ multiple Images using relationship & validation in laravel>
*   Author: <Funda of Web IT>
*   Date: <10 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=9roKu4-uPxA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=12>
*
***************************************************************************************/

/* <!-- /***************************************************************************************
*   Title: <Laravel 9 Ecommerce - Part 11: Product read, edit update and delete with images in laravel>
*   Author: <Funda of Web IT>
*   Date: <16 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=PhDkujgfa4Y&list=PLRheCL1cXHruG6bV4tAIF4AhkUMaABf3F&index=12>
*
***************************************************************************************/