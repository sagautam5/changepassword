<?php

namespace Sagautam5\ChangePassword\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) {

                if (!\Hash::check($this->current_password, Auth::User()->password)) {
                    $fail('Current password is incorrect.');
                }
            }
            ]
        ];
    }

    /**
     * Get the validation error messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'password.required' => 'Password field is required',
            'password_confirmation.required' => 'Password confirmation field is required',
            'password_confirmation.same' => 'Field should be same as New Password',
            'current_password.required' => 'Current password field is required'
        ];
    }
}