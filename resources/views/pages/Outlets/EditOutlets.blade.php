<!-- Menghubungkan dengan view template master -->
@extends('pages.indexcustomer')

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
       <form method="POST" action="{{ route('outlets.update', $outletModel->outlet_id) }}">
        @csrf
        @method('PUT')
      <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Status Outlets
        <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $outletModel->outlet_status }}</button>
        </h4>
      </div>
      
      <div class="card-body">
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
        @endif
      <!-- form outlet start -->
     
        <div class="row">
          <!-- outlet name -->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Outlet ID</label>
          <input type="text" class="form-control" name="outlet_id" value="{{ $outletModel->outlet_id }}" disabled="">
        </div>
        </div>
        <!-- outlet name -->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Outlet Name</label>
          <input type="text" class="form-control text-uppercase" name="outlet_name" value="{{ $outletModel->outlet_name }}">
        </div>
        </div>
        <!-- address -->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Address</label>
          <input type="text" class="form-control text-uppercase" name="outlet_address" value="{{ $outletModel->outlet_address }}">
        </div>
        </div>
        <!-- province -->
        <div class="col-md-12">
        <div class="form-group"> 
          <label class="bmd-label-floating">Province
          <select class="form-control text-uppercase" name="outlet_province" id="province_id_" data-selected="">
              <option>{{ $outletModel->outlet_province }}</option>
          </select>
          </label>
        </div>
        </div>
        <!-- city -->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">City
          <select class="form-control text-uppercase" name="outlet_city" id="city_id_">
              <option>{{ $outletModel->outlet_city }}</option>
          </select>
          </label>
        </div>
        </div>
        <!-- contact -->
        <div class="col-md-12">
        <div class="form-group">
          <label class="bmd-label-floating">Contact</label>
          <input type="text" class="form-control text-uppercase" name="outlet_contact" value="{{ $outletModel->outlet_contact }}">
        </div>
        </div>
        <!-- status -->
        <div class="col-md-12">
        <div class="form-group"> 
          <label class="bmd-label-floating">Status
          <select class="form-control" name="outlet_status" id="outlet_status">
              <option>{{ $outletModel->outlet_status }}</option>
              <option value="active">ACTIVE</option>
              <option value="inactive">INACTIVE</option>
          </select>
          </label>
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

      <!-- form user start 
      <div class="row">
      <div class="col-md-5">

        <div class="card">
        --><!-- header form user start
        <div class="card-header card-header-primary">
          <h4 class="card-title">User </h4>
        </div>
                
          <div class="card-body">
             --><!-- form start 
            <form>
               
              <div class="row">
                --> <!-- user id      
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">User ID</label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                --> <!-- name       
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                --><!-- privilege         
                <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating"> Privilege <span class="bg-success text-dark"><i>  Manager  </i></span></label>
                  <input type="text" class="form-control" disabled="">
                </div>
                </div>
                    
              </div>
              --><!-- end of class row
            <div class="clearfix"></div>
            </form>
             --> <!-- form end  
          </div>
          --><!-- end of card body 
        </div>
       --> <!-- end of card 
        </div>

        

        </div>
        --><!-- form user end -->
      </div>
      </div>


  </div>
  </div>

</div>
</div>

@endsection

@section('scripts')
  <script type="text/javascript">
    var indonesia = {!! $indonesia !!}
    // alert('tes');
    console.log('test', indonesia)

    var selectProv = $('#province_id_');

    getLoad(selectProv, indonesia, 'key');

    function getLoad(target, data, dataSelector) {
      // var target = $('#province_id_');
      var selected = target.attr('data-selected');

      Object.keys(data).forEach(function (key) {
          if (typeof isArray !== 'undefined') {
            console.log(1)
            var tmp = data[key];
            target.append($("<option class='text-capitalize' " + (selected == tmp ? 'selected=selected' : '') + "></option>")
              .attr("value", key)
              .text(tmp));
          } else {
            console.log(2)
            var tmp = dataSelector && dataSelector == "key" ? key : data[key];
            target.append($("<option class='text-capitalize' " + (selected == tmp ? 'selected=selected' : '') + "></option>")
              .attr("value", dataSelector && dataSelector == "key" ? key : data[key])
              .text(tmp));
          }
        });
    }

    function clear (data) {
      data.find('option').remove();
    }

    $('#province_id_').on("change", function (e) {
      var data_source = null/* Data array here */;
      try { data_source = indonesia[$(this).val()] } catch (ex) { }
      console.log('check change', data_source)
      var target = $('#city_id_');

      clear (target);
      getLoad(target, data_source, 'value')

      
      // window.dynamicSelect.clear(target, function () {
      //   window.dynamicSelect.load(target, data_source, "value");
      //   target.attr("province", $(e.target).val());
      //   window.dynamicSelect.disableNextOnEmpty($(e.target), target);
      // });
    });
  </script>
@endsection