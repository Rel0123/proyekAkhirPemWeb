<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_add.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">
        <div class="col py-3" style="background:#F0F2FA ;">

          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
            <!-- awal header -->
              <div class="container">
                <div class="header row">
                <div class="d-flex bd-highlight">
  <div class="p-2 flex-grow-1 bd-highlight">
  </div>
  
  <div class="p-2 bd-highlight">
  <img src="{{ asset('image/icon_lonceng.png') }}" alt="">

  </div>
  <div class="p-2 bd-highlight">
  <img src="{{ asset('image/icon_orang.png') }}" alt="">
  </div>
</div>

                 
                </div>
              </div>
            <!-- akhir header -->
               
                <div class="container mt-5">
                    <h4><b>Tambah Peserta</b></h4>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="paralax">
                          <br>
                          <div class="row mx-3">
                                
                                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                                @csrf
                                <table>
                                <tr>
                                  <td style="width:200px ;"> <x-label for="name" :value="__('Nama')" /> </td>
                                  <td style="width:875px ;"><input id="name" class="form-control mt-3" type="text" name="name" :value="old('name')" required autofocus ></td>
                                  
                                </tr>
                                <tr>
                                  <td> <x-label for="nik" :value="__('NIK')" /> </td>
                                  <td><input class="form-control mt-3" id="nik" type="text" name="nik" :value="old('nik')" required autofocus ></td>
                                  
                                </tr>
                                <tr>
                                  <td> <x-label for="photo" :value="__('Foto')" /> </td>
                                  <td><input class="form-control" id="photo" type="file" name="photo" :value="old('photo')" required autofocus></td>
                                 
                                </tr>
                                <tr>
                                  <td> <x-label for="address" :value="__('Alamat')" /> </td>
                                  <td>
                                  
                                          <input class="form-control mt-3" id="address" type="text" name="address" :value="old('address')" required autofocus>
                                          
                                  </td>
                                </tr>
                                <tr>
                                  <td> <x-label for="status" :value="__('Status')" /> </td>
                                  <td><input class="form-control mt-3" id="status" type="text" name="status" :value="old('status')" required autofocus></td>
                                </tr>
                                <tr>
                                  <td><x-label for="description" :value="__('Deskripsi')" /></td>
                                  <td><input class="form-control mt-3" id="description" type="text" name="description" :value="old('description')" required autofocus></td>
                                </tr>
                                
                                <tr>
                                  
                               </table>
                               <div class="d-flex justify-content-center" style="padding-top:5rem ;">
                               <x-button class="btn ml-4" style="background-color: #F4656E ; color:white;" >
                                    {{ __('Submit') }}
                                </x-button>
                        
                               </div>
                              </form>
                                
                  
                                
                          </div>
                          <br>
                          
                        </div>
                      
                          
                </div>
                
              </div>

            </div>
          </div>

              <!-- footer -->
        <footer>
          <hr>
          <div class="d-flex bd-highlight" style="color: #B9B9B9;font-size:12px;">
  <div class="p-2 flex-grow-1 bd-highlight" >
    <span>&copy Copyright 2021 E-VOTE Dashboard-E-Vote-dashboard.com</span>
  </div>
  <div class="p-2 bd-highlight">Beranda</div>
  <div class="p-2 bd-highlight">Berita</div>
  <div class="p-2 bd-highlight">Tentang</div>
</div>
        </footer>

        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

