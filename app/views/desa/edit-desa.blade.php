@include('head')
<legend>
    <h1 style="font-weight:200">Edit Kecamatan</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="desa" ng-controller="desaController" ng-submit="editDesa()" class="form-horizontal" role="form" ng-init="kecamatan='{{$desa->id_kecamatan}}';nama='{{$desa->nama}}';idDesa='{{$desa->id}}'">
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Kecamatan :</label>
                <div class="col-sm-3 col-md-3">
                    <select class="form-control" ng-model="kecamatan" readonly>
                        <option value="0">-Pilih Kecamatan-</option>
                        @foreach($kecamatan as $key => $value)
                            <option value="{{$value->id}}">{{$value->id}} &nbsp {{$value->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">ID Desa :</label>
                <div class="col-sm-3 col-md-3">
                    <input ng-model="idDesa" readonly type="text" required class="form-control" id="idDesa">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 col-md-3 control-label">Nama Desa :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="nama" type="text" required class="form-control" id="namaKecamatan">
                </div>
            </div>
            
            &nbsp;
            <div class="form-group">
                
                <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button ng-hide="loading" type="submit" class="btn btn-primary">Submit</button>
                        <img ng-hide="!loading" height="72" width="72" src="{{ URL::asset('images/loading.gif') }}" class="img-circle">
                        <br><br>
                        <!-- <a href="#">forgot password</a> -->
                        <p ng-hide="!isError" class="text-danger"  ng-init="message='sssss'">@{{message}}</p>
                </div>
            </div>
        </form>
    </div>
</div>
@include('foot')