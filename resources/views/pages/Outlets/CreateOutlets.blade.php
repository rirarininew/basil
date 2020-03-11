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
        <!-- form start -->
          <form>
          <div class="row">
        <!-- outlet -->
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Outlet Name</label>
            <input type="text" class="form-control" >
          </div>
          </div>
        <!-- address -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Address</label>
            <input type="text" class="form-control" >
          </div>
          </div>
        <!-- city -->            
          <div class="col-md-12">
          <div class="form-group">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">City</button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            </div>
          </div>
          </div>
        <!-- province -->            
          <div class="col-md-12">
          <div class="form-group">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Province</button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            </div>
          </div>
          </div>
        <!-- contact -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Contact</label>
            <input type="text" class="form-control" >
          </div>
          </div>
        <!-- user -->              
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating"> User <span class="bg-success text-dark"><i>  Manager  </i></span></label>
            <input type="text" class="form-control" disabled="">
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