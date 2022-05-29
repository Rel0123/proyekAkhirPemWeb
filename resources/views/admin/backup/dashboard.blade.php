<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
		
	<h2>Halo, Admin!</h2>
	<button type="button"><a href="{{ route('admin.add') }}">Tambah Calon</a></button>
	<form action="{{ route('admin.logout') }}" method="POST" >
		@csrf
		<input type="submit" value="Keluar">
	</form>
	<br><br><br>
	<!-- Tabel Calon Kades -->
	<table>
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
	<br><br><br>
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
</body>
</html>


