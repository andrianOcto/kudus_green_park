@include('head')
<legend>
    <h1 style="font-weight:200">Create Kecamatan</h1>
</legend>
    <div ng-app="kecamatan" ng-controller="kecamatanController" >
    <div class="panel panel-success">
    <div class="panel-heading"></div>

    <div ng-hide="!isError" class="alert alert-danger" role="alert">@{{message}}</div>
    <div class="panel-body">

        <form ng-submit="createKecamatan()" class="form-horizontal" role="form">
        <!-- halaman form -->
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">ID Kecamatan :</label>
                <div class="col-sm-3 col-md-3">
                    <input ng-model="idKecamatan" type="text" required class="form-control" id="idKecamatan">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 col-md-3 control-label">Nama Kecamatan :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="namaKecamatan" type="text" required class="form-control" id="namaKecamatan">
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