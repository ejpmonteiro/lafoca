<!doctype html>
<html>

<head>
  @include('site.includes.head')
</head>

<body id="@yield('page')">
  <!-- Navigation -->
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    @include('site.includes.header')
  </nav> --}}
  @include('site.includes.header')

  <!-- Page Content -->
  <div class="container">

    <div class="row" style="padding-top: 6em;">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
        @yield('content')
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
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/script2.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#phone').mask('(00) 00000-0000');
    });
  </script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>
</html>