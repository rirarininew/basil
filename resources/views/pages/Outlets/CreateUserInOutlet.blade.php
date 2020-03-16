<!-- Menghubungkan dengan view template master -->
@extends('index')

<!-- mengaktifkan list oulets di sidebar-->
@section('activeOutlets')
active
@endsection

<!-- isi bagian konten -->
@section('konten')

<div class="content">
<div class="container-fluid">
<!-- form add user start -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
              <h4 class="card-title">Add User </h4>
              </div>
                <div class="card-body">
                  <!-- form start -->
                  <form method="post" action="{{ route('user.create') }}">
                  <div class="row">
                    <!-- user name -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">User Email</label>
                      <input type="text" class="form-control" name="user_email">
                    </div>
                    </div>
                    <!-- email -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">User Password</label>
                      <input type="email" class="form-control" name="user_password">
                    </div>
                    </div>
                    <!-- role -->
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="role">Role</button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" value="admin">Admin</a>
                      <a class="dropdown-item" value="accounting">Accounting</a>
                    </div>
                    </div>
                    <!-- outlet -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="outlet_name">Outlet</button>
                      <div class="dropdown-menu">
                      @foreach($outlets as $o)
                      <a class="dropdown-item" value="{{ $o->outlet_name }}">{{ $o->outlet_name }}</a>
                      @endforeach
                    </div>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Add User</button>          
                  <div class="clearfix"></div>
                </form>
                <!-- form end -->
                </div>
            </div>
          </div>
          </div>
        <!-- form add user end -->
</div>
</div>
@endsection