<!-- Menghubungkan dengan view template sideBar -->
@extends('pages.indexcustomer')
<!-- mengaktifkan list account di sidebar-->
@section('activeAccount')
active
@endsection
<!-- ini bagian konten-->
@section('konten')

<div class="content">
<div class="container-fluid">
          
  <div class="row">
    <div class="col-md-12">
    <!-- card start-->
    <div class="card">
      <!-- card header start-->
    <div class="card-header card-header-primary">
      <h4 class="card-title">Account</h4>
      <p class="card-category">Update Password</p>
    </div>
    <!-- card header end-->
    <!-- card body start-->
    <div class="card-body">
      <!-- form start-->
      <form method="POST" action="{{ route('user.updatepassword', Auth::user()->id) }}">
        @csrf
        @method('PUT')
      <div class="row">
        <!-- old password-->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Old Password</label>
          <input type="Password" class="form-control" >
        </div>
        </div>
        <!-- new password-->              
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">New Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
        </div>
        </div>
        <!-- retype new password-->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Retype New Password</label>
          <input type="Password" class="form-control" id="password-confirm" required autocomplete="new-password">
        </div>
        </div>
        
        </div>
        <!-- button start and cancel-->
          <a type="Cancel" class="btn btn-secondary pull-right" href="/basil/account">Cancel</a>
          <button type="submit" class="btn btn-primary pull-right">Save</button>
        <div class="clearfix"></div>
      </form>
      <!-- form end-->            
    </div>
    <!-- card body end-->
    </div>
    <!-- card end-->
    </div>
    <!-- col-md-12 end-->
  </div>
  <!-- end of row-->
</div>
</div>

@endsection