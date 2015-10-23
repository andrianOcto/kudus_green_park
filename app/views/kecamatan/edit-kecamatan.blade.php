@include('head')
<legend>
    <h1 style="font-weight:200">Edit Kecamatan</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="kecamatan" ng-controller="kecamatanController" ng-submit="editKecamatan()" class="form-horizontal" role="form" ng-init="id='{{$admin->id}}';nama='{{$admin->nama}}'">
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Id Kecamatan :</label>
                <div class="col-sm-9 col-md-9">
                    <input ng-model="id" type="text" readonly class="form-control" id="id" >
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 col-md-3 control-label">Nama Kecamatan :</label>
                <div class="col-sm-9 col-md-9">
                    <input ng-model="nama" type="text" required class="form-control" id="nama">
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