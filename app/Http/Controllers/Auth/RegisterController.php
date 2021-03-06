<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'profile'=>['required'],
            'address'=>['required','string','max:255'],
            'phone'=>['required','string','max:255'],
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $image=time().'.'.$data['profile']->extension();
        $data['profile']->move(public_path('userimg'),$image);
        $path='userimg/'.$image;
        
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address'=>$data['address'],
            'phone'=>$data['phone'],
         
            'profile'=>$path,
            

        ]);
        
        
       $user->assignRole('User');
       return $user;
        //datainsert
    }
    protected function redirectTo()
    {
        $roles = auth()->user()->getRoleNames();

        // Check user role
        switch ($roles[0]) {
            case 'Admin':
                    return 'dashboard';
                break;
            case 'Teacher':
                    return 'teacher';
                break;
            default:
                    return '/';  
                break;
        }
    }
}
