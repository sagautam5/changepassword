<?php

namespace Sagautam5\ChangePassword\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Sagautam5\ChangePassword\Http\Requests\ChangePasswordRequest;

/**
 * Class AuthController
 * @package Sagautam5\ChangePassword\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * This allows only authenticated users can use this functionality
     *
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show form to change user password
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword()
    {
        return view('changepassword::password.change');
    }

    /**
     * Change User Password and redirect to home page
     *
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postChangePassword(ChangePasswordRequest $request)
    {
        // Check if request is from authenticated user

        if(Auth::Check())
        {
            // Check if user has added previous password correctly

            if(\Hash::check($request->current_password, Auth::User()->password))
            {
                // Update the user password

                User::find(Auth::user()->id)->update(["password"=> bcrypt($request->password)]);

                return redirect()->to('/')->with('success','Password changed successfully !');
            }
            else{
                return redirect()->route('password.change.form')->with('error','Incorrect Details !');
            }
        }

    }
}
