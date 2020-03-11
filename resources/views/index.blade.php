<!-- master template -->
<!DOCTYPE html>
<html lang="en">

@include('Components.head')


<body class="">
@include('Components.sidebar')

    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            @yield('konten')
          </div>
        </div>
      </nav>
    </div>

@include('Components.scripts')
</body>

</html>