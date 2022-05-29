<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_register.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm p-3 mb-5 bg-body rounded">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('image/logo.png') }}" width="90px" height="45px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-5">
            <a class="nav-link " aria-current="page" href="#beranda" style="color: #F4656E;"><b>Beranda</b></a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link" href="#tentang" style="color: #F4656E;"><b>Tentang</b></a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link" href="#berita" style="color: #F4656E;"><b>Berita</b></a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
		  <button onclick="window.location='{{ url('user/login') }}'" type="button" class="btn btn-lg rounded-3" style="background-color: #F4656E; width:100px;height:40px; color: white;font-size:16px;">Masuk</button>
		  <button type="button" class="btn px-3">Daftar</button>
	</div>
    </div>
  </nav>

  <section>
      <div class="container">
          <div class="row">
              <div class="col-md-6">
              <div class="justify-content-center">

<img src="{{ asset('image/logo_vote.png') }}" class="img-fluid" style="padding-top: 4rem; width:400px; height:550px;">
</div>
              </div>
              <div class="form col-md-4 mx-auto">
              <div class="text-center">
      <p>Selamat datang</p>
      <h2 style="color:#F1323E;">Daftarkan akunmu</h2>
  </div>
                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                  
                  <form method="POST" action="{{ route('user.register') }}"  >
                      @csrf
                  
                      <!-- Name -->
                      <div>
                          <x-label for="name" :value="__('Nama')" />
                          <input  class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus  />
                          
                      </div>
                      
                      <!-- NIK -->
                      <div>
                          <x-label for="nik" :value="__('NIK')" />
                          <input  class="form-control" id="nik" type="text" name="nik" :value="old('nik')" required autofocus  />
                          
                      </div>
                  
                      <!-- No. Telp -->
                      <div class="mt-1">
                          <x-label for="notelp" :value="__('No. Telp')" />
                          <input  class="form-control" id="notelp" type="text" name="notelp" :value="old('notelp')" required  />
                          
                      </div>
                  
                      <!-- Password -->
                      <div class="mt-1">
                          <x-label for="password" :value="__('Kata Sandi')" />
                          <input  class="form-control" id="password" type="password"  name="password"  required autocomplete="new-password"  />
                          
                      </div>
                  
                      <!-- Confirm Password -->
                      <div class="mt-1">
                          <x-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
                          <input  class="form-control" id="password_confirmation" type="password"  name="password_confirmation" required  />
                          
                      </div>
                  
                      <div class="mt-3 d-flex justify-content-center">
                      <x-button class="btn btn-lg rounded-3" style="background-color: #F4656E;width:200px; color: white;">
                    {{ __('Buat Akun') }}
                </x-button>
            
                      </div>
                      <div class="mt-3 d-flex justify-content-center">

                          <span>sudah punya akun?</span>
						  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.login') }}">
                              {{ __('Masuk') }}
                          </a>
						  <br><br><br>
                      </div>
                          
                      
                  </form>
              </div>
          </div>
      </div>
  </section>  
</body>
</html>
