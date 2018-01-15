<!DOCTYPE html>
<html>
<head>
	<title>Latihan Template</title>
</head>
<body>
		@include('template.header')<br><br><br><br><br><br><br><br><br><br><br><br>
			@yield('konten1')<br>
		@include('template.footer')
		</body>
</html>