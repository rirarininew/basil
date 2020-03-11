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

    <div class="row">
    <div class="col-md-12">

    <div class="row">
    <div class="col-md-9">
      <!-- card outlet start -->
      <!-- header form outlet -->
      <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Status Outlets <a class="text-light bg-success" href="/basil/outlets"><i>Active</i></a></h4>
      </div>
      
      <div class="card-body">
      <!-- form outlet start -->
      <form>
        <div class="row">
        <!-- outlet name -->
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
        <!-- end of row -->
        </div>
          <button type="submit" class="btn btn-primary pull-right">Save Outlet</button>
          <button type="cancel" class="btn pull-right">Cancel</button>
            <div class="clearfix"></div>
        </form>
        <!-- form outlet end -->
        </div>
        <!-- card body end -->
        </div>
        <!-- card outlet end -->
      </div>
      </div>

      <!-- form user start -->
      <div class="row">
      <div class="col-md-5">

        <div class="card">
        <!-- header form user start -->
        <div class="card-header card-header-primary">
          <h4 class="card-title">User </h4>
        </div>
                
          <div class="card-body">
            <!-- form start --> 
            <form>
               
              <div class="row">
                <!-- user id -->      
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">User ID</label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                <!-- name -->      
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                <!-- privilege -->        
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating"> Privilege <span class="bg-success text-dark"><i>  Manager  </i></span></label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                    
              </div>
              <!-- end of class row --> 
            <div class="clearfix"></div>
            </form>
            <!-- form end --> 
          </div>
          <!-- end of card body -->
        </div>
        <!-- end of card -->
        </div>

        <!-- form add user start -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
              <h4 class="card-title">Add User </h4>
              </div>
                <div class="card-body">
                  <!-- form start -->
                  <form>
                  <div class="row">
                    <!-- user name -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">User Name</label>
                      <input type="text" class="form-control" >
                    </div>
                    </div>
                    <!-- phone -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Phone</label>
                      <input type="text" class="form-control" >
                    </div>
                    </div>
                    <!-- email -->
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control" >
                    </div>
                    </div>
                    <!-- privilege -->
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Privilege</button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Admin</a>
                      <a class="dropdown-item" href="#">Accounting</a>
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
        <!-- form user end -->
      </div>
      </div>


  </div>
  </div>

</div>
</div>

@endsection