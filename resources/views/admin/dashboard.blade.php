<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
		
	<h2>Halo, Admin!</h2>
	<button type="button"><a href="{{ route('admin.add') }}">Tambah Calon</a></button>
	<br><br><br>
	<table>
		<tr>
		@forelse($calons as $calon)
			<td>
				<table style="border: 1px solid">
					<tr>
						<td>{{ $calon->name }}</td>
					</tr>
					<tr>
						<td>{{ $calon->description }}</td>
					</tr>
					<tr>
						<td>
							<a type="button">Edit</button>
							<a href='delete/{{ $calon->id }}'>Hapus</button>
						</td>
					</tr>
				</table>
				
			</td>
			@empty
			@endforelse
		</tr>
	</table>
</body>
</html>


