<!-- Menghubungkan dengan view template master -->
@extends('pages.indexcustomer')

<!-- mengaktifkan list oulets di sidebar-->
@section('activeAccount')
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
              <h4 class="card-title">Add Employee</h4>
              </div>
                <div class="card-body">
                  <!-- form start -->
                  <form method="POST" action="{{ route('user.store') }}">    
                  @csrf
                  <div class="row">
                    <!-- user name -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    </div>
                    <!-- email -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email Address</label>
                      <input input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    </div>
                    <!-- password -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    </div>
                    <!-- confirm password -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Confirm Password</label>
                      <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    </div>
                    <!-- role -->
                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">Role
                      <select class="form-control" name="role" id="role">
                      <option value="admin">ADMIN</option>
                      <option value="accounting">ACCOUNTING</option>
                      </select>
                    </label>
                    </div>
                    </div>
                    <!-- outlet 
                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="bmd-label-floating">Outlet
                      <select class="form-control" name="outlet_name">
                      @foreach($outlets as $o)
                      @if($o->outlet_user == Auth::user()->id)
                      <option value="{{ $o->outlet_name }}">{{ $o->outlet_name }}</option>
                      @endif
                      @endforeach
                      </select>
                    </label>
                    </div>
                    </div>
                    -->
                </div>
                <button type="submit" class="btn btn-primary pull-right">Add</button>          
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