<!-- Menghubungkan dengan view template sideBar -->
@extends('pages.indexcustomer')
<!-- mengaktifkan list account di sidebar-->
@section('activeAccount')
active
@endsection

<!-- isi bagian konten -->
@section('konten')
 
<div class="content">
<div class="container-fluid">
  
  <div class="row">
  <div class="col-md-8">
      
      <br>
      <div class="card">
        <!-- header account personal details -->
        <div class="card-header card-header-primary">
          <h4 class="card-title">Personal Details</h4>
        </div>
        <!-- header end -->
        <!-- body form start -->
        <div class="card-body">
          <!-- form start -->
          <form>
          <div class="row">
            <!-- name -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">ID : </label>
              <label class="bmd-label-floating text-dark">{{ Auth::user()->id }}</label>
            </div>
            <!-- phone -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">Name : </label>
              <label class="bmd-label-floating text-dark">{{ Auth::user()->name }}</label>
            </div>
            <!-- email address -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">Email address : </label>
              <label class="bmd-label-floating text-dark">{{ Auth::user()->email }}</label>
            </div>

            <!-- role -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">Role : </label>
              <label class="bmd-label-floating text-dark">{{ Auth::user()->role }}</label>
            </div>
                  
            </div>
            <a type="submit" class="btn btn-primary pull-right" href="/basil/editAccount">Update Profile</a>
              <div class="clearfix"></div>
          </form>
          <!--  form end -->        
        </div>
        <!-- body form end -->
      </div>      
      <!-- end of card class -->
    </div>
    <!-- end of col-md-8 -->
    <!-- card profile start -->
    <div class="col-md-4">
      <div class="card card-profile">
      
      <div class="card-avatar">
        <a href="javascript:;">
          <img class="img" src="../assets/img/faces/marc.png" />
        </a>
      </div>
      
      
      <div class="card-body">
        <h6 class="card-category text-gray">{{ Auth::user()->role }}</h6>
        <h4 class="card-title">{{ Auth::user()->name }}</h4>
        <p class="card-description">
        ____________________________________________________________________
        </p>
        <div class="align-content-center">
          <a type="submit" class="btn btn-success" href="{{ route('user.create') }}">Add Employee</a>
          </div>
      </div>
      
      </div>
      </div>
      <!-- card profile end -->
  </div>
  <!-- end of row -->
  <!-- new row start -->
  <div class="row">
    <div class="col-md-8">
    <!-- card start -->
    <div class="card">
    <!-- header start -->  
      <div class="card-header card-header-primary">
        <h4 class="card-title">Password</h4>
      </div>
    <!-- header end -->  
    <!-- card body start -->
      <div class="card-body">
      <!-- form start -->
        <form>
          <!-- password -->
          <div class="row">
            <div class="col-md-12">
              <label class="bmd-label-floating">Password : </label>
              <label class="bmd-label-floating text-dark">**********</label>
            </div>
          </div>
          
        <a type="submit" class="btn btn-primary pull-right" href="/basil/editPassword">Update Password</a>
          <div class="clearfix"></div>
        </form>
        <!-- form end -->
      </div>
      <!-- card body end -->
    </div>
    <!-- end of card -->
    </div>
    <!-- end of col-md-8 -->
    </div>
    <!-- end of row -->

</div>
</div>
 
@endsection