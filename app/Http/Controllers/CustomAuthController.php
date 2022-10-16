<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Enum\Category;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        $remember = $request->get('remember');
        if (Auth::guard('web')->attempt($credentials, $remember)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        // dd($request->all());
        // exit;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'level_of_education' => 'required',
            'ward' => 'required',
            'phone_number' => 'required',

        ]);
        redirect('form')->withInput(
            $request->except('password')
        );

        $data = $request->all();

        $check = $this->create($data);

        return redirect("login")->withSuccess('Registration successful, Login here');
    }

    public function create(array $data)
    {

        if (User::where('email', $data['email'])->first()) {
            return redirect("registration")->withErrors($data['email'] . ' Already exist');
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'level_of_education' => $data['level_of_education'],
            'ward' => $data['ward'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::guard('web')->check()) {
            //dd(get_class_methods(new Session()));
            return view('components.user.dashboard');
        }
        ///session guard which maintains state using session storage and cookies.
        //Providers define how users are retrieved from your persistent storage.
        // Laravel ships with support for retrieving users using Eloquent and the database query builder
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function show(Category $category): int
    {
        return $category->value;
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('web')->logout();

        return Redirect('login');
    }
}
