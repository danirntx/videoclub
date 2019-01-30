<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nosotros</title>
</head>
<body>
	@section('content')
	<h1>Nosotros</h1>
	<p>Mi nombre es {{$nombreenviado}}</p>
	@if ($nombreenviado='Julio')
		<p>Hola Julio</p>
	@else
		<p>Hola desconocido</p>
	@endif
	@endsection	
</body>
</html>