<?php

namespace App\View\Components\user;

use Illuminate\View\Component;

class Login extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */
    private $error;
    public function __construct($error, private $endPoint)
    {
        $this->error   = json_decode($error);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {


        return ('
        <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                          <div class="card-body">
                            <form method="POST" action="' . $this->endPoint . '">

                            @csrf
                            @if($errors)
                            @foreach($errors->all() as $message)
                            <x-toast
                            type=\'danger\'
                            title=\'Password error\'
                            message=\'{{$message }}\'
                           />
                           @endforeach
                           @endif
                            <x-forms.input r="{{true}}" t="text"
                            name="email" p="Enter Email"
                            id="email" className="form-control"
                            children="
                            @if($errors->first(\'email\'))
                            <x-toast
                            type=\'danger\'
                            title=\'Email error\'
                            message=\'{{ $errors->first(\'email\').\' by toast\' }}\'
                             /> 
                            @endif
                           " />
                            <x-forms.input r="{{true}}" t="password"
                             name="password" p="Password"
                             id="pasword" className="form-control"
                             children="
                             @if($errors->first(\'password\'))
                             <x-toast
                             type=\'danger\'
                             title=\'Password error\'
                             message=\'{{ $errors->first(\'password\').\' by toast\' }}\'
                            /> 
                             @endif
                            " />

                            <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                        
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Signin</button>
                        </div>


                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            
        ');
    }
}
