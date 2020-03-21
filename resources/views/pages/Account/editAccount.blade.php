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
    <!-- acrd start-->
    <div class="card">
      <!-- header start-->
      <div class="card-header card-header-primary">
        <h4 class="card-title">Account</h4>
        <p class="card-category">Update Personal Details</p>
      </div>
      <!-- header end-->
      <!-- body start-->
      <div class="card-body">
        <!-- form start-->
        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}">
        @csrf
        @method('PUT')
          <div class="row">
            <!-- name-->
            <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" name ="id" value="{{ Auth::user()->id }}" disabled="" hidden="true">
            </div>
            </div>
            <!-- phone-->
            <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Name</label>
              <input type="text text-uppercase" class="form-control" name="name" value="{{ Auth::user()->name }}">
            </div>
            </div>
            <!-- email address-->
            <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Email address</label>
              <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
            </div>
            </div>

          </div>
            <button type="submit" class="btn btn-primary pull-right">Save</button>
            <a type="cancel" class="btn btn-secondary pull-right" href="/basil/account">Cancel</a>
          <div class="clearfix"></div>
        </form>
        <!-- form end-->
      </div>
      <!-- body end-->
    </div>
    <!-- end of card-->
  </div>
  <!-- end of col-md-12-->
  </div>
  <!-- end of row-->
</div>
</div>

@endsection