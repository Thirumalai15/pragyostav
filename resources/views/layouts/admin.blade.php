<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pragyotsav | Admin Panel</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" type="image/xl-icon" href="{{ asset('theme/images/prag.png') }}">
	<link rel="manifest" href="{{ asset('site.webmanifest') }}">

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/atlantis.min.css') }}">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!-- <link rel="stylesheet" href="../assets/css/demo.css"> -->

</head>
<body >


 <main>
     @yield('content')
 </main>
 <footer class="footer">
	 <div class="container">
		 <div class="copyright ml-auto">
			 Made with <svg xmlns="http://www.w3.org/2000/svg" style="width: 1rem; height: 1rem" viewBox="0 0 20 20" fill="red">
				 <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
			 </svg> by Rithish Kumar and Thirumalai 😎
		 </div>
	 </div>
 </footer>

 <script src="{{ asset('admin/assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->

    <script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }} "></script>
 <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
                $('#basic-datatables').DataTable({
                    responsive: true
                });
            });
        
    </script>
</body>
</html>
