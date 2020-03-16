<!-- Menghubungkan dengan view template index -->
@extends('index')

<!-- mengaktifkan list oulets di sidebar-->
@section('activeOutlets')
active
@endsection

<!-- isi bagian konten -->
@section('konten')


<div class="content">
<div class="container-fluid">

    <div class="row">        
    <div class="col-md-8">
    <div class="card">
        <!-- header start-->
        <div class="card-header card-header-primary">
          <h4 class="card-title">Outlets</h4>
          <p class="card-category">Create Outlet</p>
        </div>
        <!-- header end-->
        <!-- body start--> 
          <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
          </ul>
          </div>
        @endif
        <!-- form start -->
          <form method="post" action="{{ route('outlets.store') }}">
          @csrf
          <div class="row">
        <!-- outlet -->
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Outlet Name</label>
            <input type="text" class="form-control" name="outlet_name">
          </div>
          </div>
        <!-- address -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Address</label>
            <input type="text" class="form-control" name="outlet_address">
          </div>
          </div>
          <!-- province -->            
          <div class="col-md-12">
          <div class="form-group">
            <select class="form-control" name="outlet_province" id="province_id">
              <option selected>- Select Province -</option>
              @foreach ($indonesia_provinces as $id => $name)
              <option value="{{ $id }}">{{ $name }}</option>
              @endforeach
            </select>

          </div>
          </div>
        <!-- city -->            
          <div class="col-md-12">
          <div class="form-group">
            <select class="form-control" name="outlet_city" id="city_id">
              <option selected>- Select City -</option>
              @foreach ($indonesia_cities as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
              @endforeach
            </select>

          </div>
          </div>

        <!-- contact -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Contact</label>
            <input type="text" class="form-control" name="outlet_contact">
          </div>
          </div>
        <!-- user -->              
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">User</label>
            <input type="text" class="form-control" value="manager" name="outlet_user" disabled="">
          </div>
          </div>
        <!-- button save & cancel -->               
        </div>
          <button type="submit" class="btn btn-primary pull-right">Save Outlet</button>
          <a type="cancel" class="btn btn-secondary pull-right" href="/basil/outlets">Cancel</a>
            <div class="clearfix"></div>
        </form>
        <!-- form end -->
        </div>
        <!-- body end -->

    </div>
    </div>
    </div>

</div>
</div>

@endsection