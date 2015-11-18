@include("head")
<legend>
    <h1 style="font-weight:200">Edit Park</h1>
</legend>

<div ng-app="updatePark" ng-controller="rencanaParkController" >
<div ng-hide="!isError" class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Data gagal disimpan. Tahun Rencana atau Tahun Realisasi tidak boleh kosong.
              </div>

<div class="panel panel-success">
        <div class="panel-body">
<form uploader="uploader" ng-submit="submitPark()" ng-init="id_rth='{{ $park->id_rth }}';rencana='{{ $park->tahun_rencana }}';realisasi='{{ $park->tahun_realisasi }}';" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Kode RTH :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="id_rth" type="text" readonly class="form-control" id="id-rth" >
        </div>
    </div>
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Tahun Rencana :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="rencana" type="text" class="form-control" id="rencana">
        </div>
    </div>

    <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
            <input type="file" nv-file-select="" uploader="uploader"/><br/>
        </div>
    </div>


    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Tahun Realisasi :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="realisasi" type="text" class="form-control" id="realisasi">
        </div>
    </div>

    <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
            <input type="file" nv-file-select="" uploader="uploader2"/><br/>
        </div>
    </div>

    &nbsp;
    <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button ng-hide="loading" type="submit" class="btn btn-primary">Submit</button>
                        <img ng-hide="!loading" height="72" width="72" src="{{ URL::asset('images/loading.gif') }}" class="img-circle">
                        <br><br>
                        <!-- <a href="#">forgot password</a> -->
                        <p ng-hide="!isError" class="text-danger"></p>
                </div>
</form>
</div>
    </div>
</div>
@include("foot")