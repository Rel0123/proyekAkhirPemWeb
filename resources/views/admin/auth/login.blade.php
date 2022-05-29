<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_login.css') }}" rel="stylesheet">
</head>
<body >
<div id="login">
        <h3 class="text-center" style="padding-top: 10rem;padding-right:2rem ;">Admin <span style="color:#F4656E ;">E-Vote</span></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center ">
                <div id="login-column" class="col-md-6 ">
                    <div id="login-box" class="col-md-12 shadow-lg">
                         <!-- Session Status -->
                              <x-auth-session-status class="mb-4" :status="session('status')" />
    
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('admin.login') }}" >
                        @csrf
                            <h3 class="text-center mt-3">Sign in</h3>
                            <div class="col-md-7 mx-auto">

                                <div class="form-group">
                                <x-label for="username" :value="__('Username')" />
                                <input id="username" class="form-control" type="text" name="username" :value="old('username')" required autofocus>
                                    
                                </div>
                                <div class="form-group mt-3">
                                <x-label for="password" :value="__('Password')" />
                                    <input id="password" class="form-control" type="password"  name="password" required autocomplete="current-password">
                                    
                                </div>
                                <div class="d-flex bd-highlight mb-3">
                                     <div class="me-auto p-2 bd-highlight">
                                     <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                                </div>
      
                            <div class="p-2 bd-highlight">
    
                            @if (Route::has('admin.password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin.password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                            </div>
                        </div>
                            </div>
                            <br />
                    <div class="d-flex justify-content-center">
                     <x-button class="btn btn-lg rounded-3" style="background-color: #F4656E;width:175px; color: white;">
                    {{ __('Log in') }}
                        </x-button>    
                     
            
                     </div>
                        </form>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     
</body>
</html>

  
