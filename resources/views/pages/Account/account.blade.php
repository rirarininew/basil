<!-- Menghubungkan dengan view template sideBar -->
@extends('index')
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
            
              <label class="bmd-label-floating">Name : </label>
              <label class="bmd-label-floating text-dark">Rini S.</label>
            </div>
            <!-- phone -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">Phone : </label>
              <label class="bmd-label-floating text-dark">08155508409</label>
            </div>
            <!-- email address -->
            <div class="col-md-12">
            
              <label class="bmd-label-floating">Email address : </label>
              <label class="bmd-label-floating text-dark">rirarininew@gmail.com</label>
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
      <!-- avatar start -->
      <div class="card-avatar">
        <a href="javascript:;">
          <img class="img" src="../assets/img/faces/marc.png" />
        </a>
      </div>
      <!-- avatar end -->
      <!-- card body start-->
      <div class="card-body">
        <h6 class="card-category text-gray">MANAGER</h6>
        <h4 class="card-title">Rini Setyowati</h4>
        <p class="card-description">
        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
        </p>
      </div>
      <!-- card body end -->
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