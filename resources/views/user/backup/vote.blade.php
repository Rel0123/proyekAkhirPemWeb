<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
		
	<h2>Halo, User!</h2>
	<br><br><br>
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
							<form id="vote-form" action="{{ route('user.vote', $calon->id) }}" method="POST" >
								@csrf
								<input type="submit" value="Vote">
							</form>
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


