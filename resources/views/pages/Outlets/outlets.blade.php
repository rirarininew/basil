<!-- Menghubungkan dengan view template master -->
@extends('index')

<!-- mengaktifkan list oulets di sidebar-->
@section('activeOutlets')
active
@endsection

<!-- isi bagian konten -->
@section('konten')
<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="collapse navbar-collapse justify-content-end">
    <!-- form search start -->
    <form class="navbar-form">
      <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
      </div>
    </form>
    <!-- form search end -->
    </div>
    <!-- create outlet -->
    <a type="submit" class="btn btn-primary pull-righ m-sm-5" href="/basil/CreateOutlets">Create Outlet</a>
  </div>
</nav>
<!-- End Navbar -->

<div class="content">
<div class="container-fluid">

  <div class="row">
  <div class="col-md-12">
  <div class="card">
 <!-- header table start -->   
    <div class="card-header card-header-primary">
      <h4 class="card-title ">List Outlets</h4>
      <p class="card-category"> </p>
    </div>
 <!-- header table end -->

 <!-- body table start -->               
      <div class="card-body">
      <div class="table-responsive">
      <table class="table">
  <!-- column table start -->
        <thead class=" text-primary">
          <th>
            ID
          </th>
          <th>
            Outlet Name
          </th>
          <th>
            Adrress
          </th>
          <th>
            City
          </th>
          <th>
            Province
          </th>
          <th>
            Contact
          </th>
          <th>
            User
          </th>
          <th>
            Status
          </th>
        </thead>
 <!-- column table end -->
@foreach($dataOulet as $o)
 <!-- row outlet table start -->
        <tbody>
          <tr>
          <td>
            {{ $o->outlet_id }}
          </td>
          <td>
            {{ $o->outlet_name }}
          </td>
          <td>
            {{ $o->outlet_address }}
          </td>
          <td>
            {{ $o->outlet_city }}
          </td>
          <td>
            {{ $o->outlet_province }}
          </td>
          <td>
            {{ $o->outlet_contact }}
          </td>
          <td>
            {{ $o->outlet_user }}
          </td>
          <td>
            <a href="/basil/EditOutlets">{{ $o->outlet_status }}</a>
          </td>
          </tr> 
@endforeach
        </tbody>
      </table>
      </div>
      </div>

  </div>
  </div>
  </div>

</div>
</div>

@endsection