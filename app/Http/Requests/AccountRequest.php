<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => ['required', 'unique:accounts,name,'.$this->route('account.id')],
            'bank_name' => ['required'],
            'account_number' => ['required'],
            'name_on_account' => ['required'],
            'statement_starting_line' => ['required', 'numeric'],
        ];
    }
}
