
<!DOCTYPE html>
<html lang="en">
<head>
	@include('userview.head')
</head>
<body class="animsition">
	@include('userview.header')


	@yield('content')

	
<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="zmdi zmdi-chevron-up"></i>
	</span>
</div>
    @include('userview.footer')
</body>
</html>