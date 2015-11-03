@include('head')
<legend>
    <h1 style="font-weight:200">Create Kecamatan</h1>
</legend>
    <div ng-app="desa" ng-controller="desaController" >
    <div class="panel panel-success">
    <div class="panel-heading"></div>

    <div ng-hide="!isError" class="alert alert-danger" role="alert">@{{message}}</div>
    <div class="panel-body">

        <form ng-submit="createDesa()" class="form-horizontal" role="form">
        <!-- halaman form -->
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Kecamatan :</label>
                <div class="col-sm-3 col-md-3">
                    <select class="form-control" ng-model="kecamatan" ng-init='kecamatan=0'>
                        <option value="0">-Pilih Kecamatan-</option>
                        @foreach($kecamatan as $key => $value)
                            <option value="{{$value->id}}">{{$value->id}} &nbsp {{$value->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama-user" class="col-sm-3 control-label">ID Desa :</label>
                <div class="col-sm-2" ng-init="kecamatan_id=''">
                    @{{kecamatan}}
                </div>
                <div class="col-sm-2">
                    <input ng-model="idDesa" type="text" required class="form-control" style="width:100px;" id="idDesa">
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
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@include('foot')