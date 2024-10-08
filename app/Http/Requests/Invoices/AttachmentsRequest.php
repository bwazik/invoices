<?php

namespace App\Http\Requests\Invoices;

use Illuminate\Foundation\Http\FormRequest;

class AttachmentsRequest extends FormRequest
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
            'attachments.*' => 'mimes:pdf,jpeg,png,jpg | max:3584',
            'attachments' => 'max:4',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
