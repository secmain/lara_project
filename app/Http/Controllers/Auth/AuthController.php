<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /** @var Guard */
    protected $auth;

    /**
     * Create a new authentication controller instance.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->auth = $auth;
        $this->redirectPath = '/blog';
    }

    /**
     *
     * @param  UserRegisterRequest $request
     * @param  UserService $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(UserRegisterRequest $request, UserService $user)
    {
        $input = $request->only(['name', 'email', 'password']);
        $result = $user->registerUser($input);
        $this->auth->login($result);
        // return redirect()->route('admin.entry.index');
        return redirect()->route('blog');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $result = $this->auth->attempt(
            $request->only(['email', 'password']),
            $request->get('remember', false)
        );

        if (!$result) {
            return redirect()->route('get.login')
                    ->with('message', 'failed user auth!!!');
        }

        return redirect()->route('admin.entry.index');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   
        /*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        */



    }
}
