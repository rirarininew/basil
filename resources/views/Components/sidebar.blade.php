<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          BASIL SUBSCRIPTION
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @yield('activeDashboard')  ">
            <a class="nav-link" href="/basil/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item @yield('activeOutlets')">
            <a class="nav-link" href="/basil/outlets">
              <i class="material-icons">location_ons</i>
              <p>Outlets</p>
            </a>
          </li>
          <li class="nav-item @yield('activeBilling')">
            <a class="nav-link" href="/basil/billings">
              <i class="material-icons">library_books</i>
              <p>Billings</p>
            </a>
          </li>
          <li class="nav-item @yield('activeAccount')">
            <a class="nav-link" href="/basil/account">
              <i class="material-icons">person</i>
              <p>Account</p>
            </a>
          </li>
          <li class="nav-item ">
            


          </li>
          <li class="nav-item ">



          </li>
          <li class="nav-item ">



          </li>
          <li class="nav-item ">



          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link bg-success" href="/basil/contactUs">
              <i class="material-icons">unarchive</i>
              <p>Contact Us</p>
            </a>
          </li>
        </ul>
      </div>
    </div>