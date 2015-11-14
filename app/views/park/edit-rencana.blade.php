@include("head")
<legend>
    <h1 style="font-weight:200">Edit Park</h1>
</legend>
<div class="panel panel-success">
        <div class="panel-body">
<form ng-app="updatePark" ng-controller="rencanaParkController" uploader="uploader" ng-submit="submitPark()" ng-init="id_rth='{{ $park->id_rth }}';rencana='{{ $park->tahun_rencana }}';realisasi='{{ $park->tahun_realisasi }}';" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Kode RTH :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="id_rth" type="text" readonly class="form-control" id="id-rth" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Tahun Rencana :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="rencana" type="text" class="form-control" id="rencana" required>
        </div>
    </div>

    <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
            <input type="file" nv-file-select="" uploader="uploader" required/><br/>
        </div>
    </div>


    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Tahun Realisasi :</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="realisasi" type="text" class="form-control" id="realisasi" required>
        </div>
    </div>

    <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
            <input type="file" nv-file-select="" uploader="uploader2" required/><br/>
        </div>
    </div>

    &nbsp;
    <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button ng-hide="loading" type="submit" class="btn btn-primary">Submit</button>
                        <img ng-hide="!loading" height="72" width="72" src="{{ URL::asset('images/loading.gif') }}" class="img-circle">
                        <br><br>
                        <!-- <a href="#">forgot password</a> -->
                        <p ng-hide="!isError" class="text-danger"  ng-init="message='sssss'">@{{message}}</p>
                </div>
</form>
    </div>
</div>
@include("foot")