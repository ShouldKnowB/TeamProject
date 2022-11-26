<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlavoursFormRequest extends FormRequest
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
            'name' => ['required','string'],
            'code' => ['required','string'],
            'status' =>['nullable']
        ];
    }
}
/***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 12: Color CRUD with confirm delete in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <22 June 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=pP2Puj1mJq8&t=1296s>
// ***************************************************************************************/