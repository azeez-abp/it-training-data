<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\HelpFunction\LoginHelper;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Login(LoginHelper $login)
    {
        $login('user1')->credential([
            'email' => 'user@gmail.com',
            'password' => 'user1234556'
        ]);
    }

    public function getView()

    {
        $data  = ['name' => 'azeez'];
        $firstname = "Peter";
        $lastname = "Griffin";
        $age = "41";
        $azeez  = "Azeez";
        $result = compact("firstname", "lastname", "age", 'data', 'azeez');
        //  return view('home.welcome', ['data' => $result]);
    }
}
