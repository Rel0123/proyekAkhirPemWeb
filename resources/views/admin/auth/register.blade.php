<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_register.css') }}" rel="stylesheet">
</head>
<body >
<div id="login">
        <h3 class="text-center" style="padding-top: 10rem;padding-right:2rem ;">Admin <span style="color:#F4656E ;">E-Vote</span></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center ">
                <div id="login-column" class="col-md-6 ">
                    <div id="login-box" class="col-md-12 shadow-lg">
                         <!-- Validation Errors -->
                     <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                     <form method="POST" action="{{ route('admin.register') }}" >
                            @csrf
                            <h3 class="text-center mt-3">Register</h3>
                            <div class="col-md-7 mx-auto">

                                <div class="form-group">
                                <x-label for="username" :value="__('Username')" />
                                <input id="username" class="form-control" type="text" name="username" :value="old('username')" required autofocus>
                                
                                </div>
                                <div class="form-group mt-3">
                                <x-label for="password" :value="__('Password')" />
                                    <input id="password" class="form-control" type="password"  name="password" required autocomplete="current-password">
                                    
                                </div>
                                <div class="form-group mt-3">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                                
                                </div>
                                <div class="mt-3 d-flex justify-content-center">

                                    <span>sudah punya akun?</span><a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin.login') }}">
                                        {{ __('Masuk') }}
                                    </a>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-center">
                      <x-button class="btn btn-lg rounded-3" style="background-color: #F4656E;width:200px; color: white;">
                    {{ __('Register') }}
                </x-button>
            
                      </div>
                            </div>
                            <br />
             
                        </form>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     
</body>
</html>
