<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/exit.css') }}" rel="stylesheet">
</head>
<body style="background:url(../public/image/pernik1.png) ;">
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
    </div>
  </nav>
  <section>
    <div class="main container">
        <div class="row">
            <div class="col-md-6">
                <div class="justify-content-center">
                    <img src="{{ asset('image/amico.png') }}" class="img-fluid" alt="amico">
                </div>
            </div>
            <div class="col-md-6">
            <div class="main_2">
                    <h1 class="text-center">Terima Kasih Telah Melakukan Pemilihan</h1>
                    <p class="text-center">Silahkan Keluar</p>
                    <div class="d-flex justify-content-center">
        
                        <button class="btn rounded-3" style="background-color: #F4656E; width:350px; color: white;">Keluar</button>
    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

 

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>