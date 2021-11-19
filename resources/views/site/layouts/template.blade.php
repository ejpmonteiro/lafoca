<!doctype html>
<html>

<head>
	@include('site.includes.head')
</head>

<body id="@yield('page')">

	@include('site.includes.header')

	<!-- Page Content -->
	<div class="container">

		<div class="row" style="padding-top: 6em;">

			<!-- Blog Entries Column -->
			<div class="col-sm-12 col-md-8">
				@yield('content')
			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-12 col-sm-8 offset-sm-2 col-md-4 offset-md-0">
				@include('site.includes.sidebar')
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="footer">
		@include('site.includes.footer')
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/pdfobject.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/script2.js') }}"></script>
</body>

</html>