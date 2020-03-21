<!-- Menghubungkan dengan view template index -->
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
            <input type="text" class="form-control text-uppercase" name="outlet_name">
          </div>
          </div>
        <!-- address -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Address</label>
            <input type="text" class="form-control text-uppercase" name="outlet_address">
          </div>
          </div>
          <!-- province -->            
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Province
            <select class="form-control text-uppercase" name="outlet_province" id="province_id_" data-selected=""></select>
            </label>
          </div>
          </div>
        <!-- city -->            
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">City
            <select class="form-control text-uppercase" name="outlet_city" id="city_id_"></select>
            </label>
          </div>
          </div>

        <!-- contact -->             
          <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Contact</label>
            <input type="text" class="form-control text-uppercase" name="outlet_contact">
          </div>
          </div>
        <!-- user -->              
          <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control" value="{{ Auth::user()->id }}" name="outlet_user" hidden="true">
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