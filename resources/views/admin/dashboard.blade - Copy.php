<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin_dashboard.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">

        <!-- awal navbar -->
        <!--aside class="col-12 col-md-3 col-xl-2 p-0 sideNav ">
            <div class="logo p-3">
             <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap text-light px-4  " ><img src="{{ asset('image/logo_evote.png') }}" width="125px" height="75px"></a>
            </div>
          <nav class="navbar navbar-expand-md navbar-light  flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-column mb-sm-auto mb-0 align-items-start px-2 align-items-sm-start mt-5">
              <li class="nav-item">
                <a href="mainHome.html" class="nav-link align-middle px-0 py-4">
                  <img src="{{ asset('image/icon_home.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="mainDashboardPresensi.html" class="nav-link px-0 align-middle py-4">
                <img src="{{ asset('image/icon_people.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Pengguna</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link px-0 align-middle py-4">
                <img src="{{ asset('image/icon_folder.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Statistik</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="main_matakuliah_pemweb.html" class="nav-link px-0 align-middle py-4">
                  <img src="{{ asset('image/icon_image.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Berita</span>
                </a>
              </li>
            </ul>
        </div>
		<form action="{{ route('admin.logout') }}" method="POST" >
		@csrf
		<input type="submit" value="Keluar" style="background: #FFA800 ;border:none; border-radius:5px;	width:100px;height:35px;color:white; margin-top:10rem;">
	</form>
        <!-- <button type="button" class="btn btn-lg rounded-3" style="background-color: #FFA800; width:100px;height:40px; color: white;font-size:18px; margin-top:12rem;">Keluar</button> -->
          </nav>
        </aside-->
        <!-- akhir navbar -->

        <div class="col py-3" style="background:#F0F2FA ;">

          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
            <!-- awal header -->
              <div class="container">
                <div class="header row">
                <div class="d-flex bd-highlight">
  <div class="p-2 flex-grow-1 bd-highlight">
  <div class="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
                          <input type="text" class="form-control" placeholder="Have a question? Ask Now">
                       
                        </div>
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
                    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
		
		<h2>Halo, Admin!</h2>
		<div class="paralax">
			<br>
			<div class="row">
				<div class="col-md-5 mx-5">
					<button type="button" class="btn btn-lg rounded-3" style="background:#F4656E;"><a href="{{ route('admin.add') }}" style="text-decoration: none ;color:white;">Tambah Calon Kades</a></button>

				</div>
				  <form action="{{ route('admin.logout') }}" method="POST" >
		@csrf
		<input type="submit" value="Keluar" style="background: #FFA800 ;border:none; border-radius:5px;	width:100px;height:35px;color:white;">
	</form>
			</div>
			<div class="row mx-3 mt-5">
			@forelse($calons as $calon)
				<div class="col md-6">
				
					<div class="d-flex justify-content-center">
						<div class="card shadow-lg p-3 mb-5">
								
								<!--h5 class="text-center" style="font-size: 18px"><b>Calon 1</b></h5-->
								<br/>
								<div class="text-center"> <img src='/image/calon/{{$calon->photoName}}'/> </div>
								<p class="text-center pt-3" style="font-size: 18px"><b> {{ $calon->name }} </b></p>
								<div>
									<p> {{ $calon->description }} </p>
								</div>
								<br/><br/><br/>
								<div class="d-flex justify-content-center">

								<a href='edit/{{ $calon->id }}' class="px-2" style="text-decoration:none ;color:#777777;">Edit</a>
								<a href='delete/{{ $calon->id }}' class="px-1" style="text-decoration:none ;color:#777777;" >Hapus</a>
								</div>
								</div>
								
							</div> 
							</div>
							
							<!--div class="col-md-6">
							<div class="d-flex justify-content-center">
							<div class="card shadow-lg p-3 mb-5">
							<br />
								<h5 class="text-center" style="font-size: 18px"><b>Calon 1</b></h5>
								<br />
								<div class="text-center"><img src='/image/calon/{{$calon->photoName}}'/></div>
								<p class="text-center pt-3" style="font-size: 18px"><b> {{ $calon->name }} </b></p>
								<div>
									<p> {{ $calon->description }} </p>
								</div>
								
							</div>
						</div>	
						<div class="d-flex justify-content-center">

							<a href='edit/{{ $calon->id }}' class="px-2" style="text-decoration:none ;color:#777777;" >Edit</a>
					<a href='delete/{{ $calon->id }}' class="px-1" style="text-decoration:none ;color:#777777;" >Hapus</a>
						</div>
							</div-->   
							  @empty
						@endforelse    
                          </div>
                          <br>
                          
                        </div>     
                </div>
                
              </div>

            </div>
			
			<!-- Statistik Calon Kades -->
	<p>Jumlah pemilih: {{$electionData['totalUser']}}</p>
	<p>Jumlah calon: {{$electionData['totalCalon']}}</p>
	<p>Statistik: <br>
		<ul>
			@forelse($calons as $calon)
				<li>{{ $calon->name }}: {{ $calon->totalVote }}</li>
			@empty
			@endforelse
				<li>Pemilih yang belum memilih: {{$electionData['totalUser'] - $electionData['totalUserHasVoted'] }}</li>
		</ul>
	</p>
			
			
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


    <!-- Validation Errors -->
    <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" />
		
	<h2>Halo, Admin!</h2>
	<button type="button"><a href="{{ route('admin.add') }}">Tambah Calon</a></button>
	<form action="{{ route('admin.logout') }}" method="POST" >
		@csrf
		<input type="submit" value="Keluar">
	</form>
	<br><br><br> -->
	<!-- Tabel Calon Kades -->
	<!-- <table>
		<tr>
		@forelse($calons as $calon)
			<td>
				<table style="border: 1px solid">
					<tr>
						<td>
							<img src='/image/calon/{{$calon->photoName}}'/>
						</td>
					</tr>
					<tr>
						<td>{{ $calon->name }}</td>
					</tr>
					<tr>
						<td>{{ $calon->description }}</td>
					</tr>
					<tr>
						<td>
							<a href='edit/{{ $calon->id }}'>Edit</a>
							<a href='delete/{{ $calon->id }}'>Hapus</a>
						</td>
					</tr>
				</table>
				
			</td>
			@empty
			@endforelse
		</tr>
	</table>
	<br><br><br> -->
	<!-- Statistik Calon Kades -->
	<!-- <p>Jumlah pemilih: {{$electionData['totalUser']}}</p>
	<p>Jumlah calon: {{$electionData['totalCalon']}}</p>
	<p>Statistik: <br>
		<ul>
			@forelse($calons as $calon)
				<li>{{ $calon->name }}: {{ $calon->totalVote }}</li>
			@empty
			@endforelse
				<li>Pemilih yang belum memilih: {{$electionData['totalUser'] - $electionData['totalUserHasVoted'] }}</li>
		</ul>
	</p> -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

