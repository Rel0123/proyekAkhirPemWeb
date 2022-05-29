<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin_dashboard.css') }}" rel="stylesheet">
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
  <div class="search">
                       
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
			<div class="row ">
				<div class="d-flex bd-highlight px-5">
  <div class="p-2 flex-grow-1 bd-highlight ">
  <button type="button" class="btn btn-lg rounded-3" style="background:#F4656E;"><a href="{{ route('admin.add') }}" style="text-decoration: none ;color:white;">Tambah Calon Kades</a></button>
  </div>

  <div class="p-2 bd-highlight">
  <form action="{{ route('admin.logout') }}" method="POST" >
						@csrf
						<input type="submit" value="Keluar" style="background: #FFA800 ;border:none; border-radius:5px;	width:150px;height:45px;color:white;">
					</form>
  </div>
</div>

			</div>
			<div class="row mx-3 mt-5">
			@forelse($calons as $calon)
				<div class="col md-6">
				
					<div class="d-flex justify-content-center">
						<div class="cardCalon shadow-lg p-3 mb-5">
								
								<!--h5 class="text-center" style="font-size: 18px"><b>Calon 1</b></h5-->
								<br/>
								<div class="text-center"> <img class="image" src='/image/calon/{{$calon->photoName}}'/> </div>
								<p class="text-center pt-3" style="font-size: 18px"><b> {{ $calon->name }} </b></p>
								<div>
									<p> {{ $calon->description }} </p>
								</div>
								<div class="tag text-center	pt-3">
									Jumlah suara : {{ $calon->totalVote }}
								</div>
								<br/><br/><br/>
								<div class="d-flex justify-content-center">

								<a href='edit/{{ $calon->id }}' class="px-2" style="text-decoration:none ;color:#777777;">Edit</a>
								<a href='delete/{{ $calon->id }}' class="px-1" style="text-decoration:none ;color:#777777;" >Hapus</a>
								</div>
								</div>
								
							</div> 
							</div>
							
							  @empty
						@endforelse    
                          </div>
                          
						  <div class="row mt-5">
							  <h1 class="text-center">Statistik</h1>
							  <br><br><br>
							  <div class="col-md-6 d-flex justify-content-center">
							  <div class="card rounded-3 shadow" style="width: 18rem;">
								<h3 class="text-center fw-bold pt-4 pb-3">{{$electionData['totalUserHasVoted']}}</h3>
								<div class="card-body rounded-3" style="background: white;">
									<p class="card-text fw-bold fs-2 text-center">Total Suara</p>
								</div>
								</div>
							  </div>
							  <div class="col-md-6 d-flex justify-content-center">
							  <div class="card rounded-3 shadow" style="width: 18rem;">
								<h3 class="text-center fw-bold pt-4 pb-3">{{$electionData['totalUser']}}</h3>
								<div class="card-body rounded-3" style="background: white;">
									<p class="card-text fw-bold fs-2 text-center">Total Pemilih</p>
								</div>
								</div>	
							  </div>
						  </div>
						  <br><br>
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

