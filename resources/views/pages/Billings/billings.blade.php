<!-- Menghubungkan dengan view template sideBar -->
@extends('pages.indexcustomer')
<!-- mengaktifkan list billings di sidebar-->
@section('activeBilling')
active
@endsection
<!-- isi bagian konten -->
@section('konten')
 
<div class="content">
<div class="container-fluid">

    <div class="row">
    <div class="col-md-12 bg-primary">
    

      <!-- your billing start -->
      <div class="row">
      <div class="col-md-5">

        <div class="card">
        <!-- header start -->
        <div class="card-header card-header-primary">
          <h4 class="card-title">Your Billing </h4>
        </div>
        <!-- header end -->        
          <div class="card-body">
            <!-- form start --> 
            <form>
               
              <div class="row">
                <!-- current billing -->      
                <div class="col-md-12 m-2">
                <label class="bmd-label-floating text-dark"><u>CURRENT BILLING</u></label>
                </div>
                <div class="col-md-12">
                <label class="bmd-label-floating">your current subscription plan : <b><i>Trial 14 Days</i></b></label>
                </div>
                <div class="col-md-12">
                <label class="bmd-label-floating">Last payment : <b><i>N/A</i></b></label>
                </div>
                <!-- active outlet -->      
                <div class="col-md-12 m-2">
                <label class="bmd-label-floating text-dark"><u>ACTIVE OUTLET</u></label>
                </div>
                <div class="col-md-12">
                <label class="bmd-label-floating"><b>Outlet 1</b></label>
                </div>
                <div class="col-md-12">
                <label class="bmd-label-floating">Expiration date : <b><i>18 march 2020</i></b></label>
                </div>
                <!-- feature subscription -->        
                <div class="col-md-12 m-2">
                <label class="bmd-label-floating text-dark"><u>FEATURE SUBSCRIPTION</u></label>
                </div>
                <div class="col-md-12">
                <label class="bmd-label-floating"><b><i>none</i></b></label> 
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

        <!-- pay billing start -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <!-- header start -->
              <div class="card-header card-header-primary">
              <h4 class="card-title">Pay Billing </h4>
              </div>
              <!-- header end -->
                <div class="card-body">
                <div class="row">
                  <div class="col-md-12">baris 111111111111111111111111111111</div>
                  <div class="col-md-12">baris 2</div>   
                </div>
                </div>
                <!-- end of card body -->
            </div>
            <!-- end of card -->
          </div>
          <!-- end of col-md-8 -->
          </div>
        <!-- pay billing end -->

        </div>
        <!-- end of your billing -->
      </div>
      </div>
      <!-- end of your row col-md-5 -->

  <!-- start new row -->
  <div class="row">
  <div class="col-md-12">
  <div class="card card-plain">
  <!-- header start -->
  <div class="card-header card-header-primary">
    <h4 class="card-title ">Billing History
    <div class="collapse navbar-collapse justify-content-end">
      <!-- form start 
      <form class="navbar-form">
      <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">-->
        <!-- button start 
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
        <div class="ripple-container"></div>
        </button>-->
        <!-- button end 
      </div>
      </form>-->
      <!-- end of form -->
    </div>
    </h4>
  </div>
  <!-- header end -->
  <!-- card body start -->
  <div class="card-body">
  <div class="table-responsive">
    <table class="table">
    <thead class=" text-primary">
      <th>
      Outlet ID
      </th>
      <th>
      Subscription Plan
      </th>
      <th>
      Start Date
      </th>
      <th>
      End Date
      </th>
    </thead>
    <tbody>
      @foreach($subs as $s)
      <tr>
      <td>
      {{$s->outlet_id}}
      </td>
      <td>
      {{$s->subs_plan}}
      </td>
      <td>
      {{$s->subs_start}}
      </td>
      <td>
      {{$s->subs_end}}
      </td>
      </tr>
      @endforeach       
      </tbody>
      </table>
    </div>
    </div>
    <!-- card body end -->
  </div>
  <!-- end of card plain -->
  </div>
  <!-- end of col-md-12 -->
  </div>
  <!-- end of row -->

  </div>
  </div>


</div>
</div>
 
@endsection