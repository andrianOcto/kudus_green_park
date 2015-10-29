@include('head')
<legend>
    <h1 style="font-weight:200">Edit User</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="form_user" ng-controller="userController" ng-submit="editUser()" ng-init="iduser='{{ $admin->iduser }}';nama='{{ $admin->nama_lengkap }}';username='{{ $admin->username }}';password='';" class="form-horizontal" uploader="uploader" filters="queueLimit, customFilter" role="form">
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Nama Lengkap :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="nama" type="text" required class="form-control" id="nama">
                    <input type="hidden" ng-model="iduser">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 col-md-3 control-label">Username :</label>
                <div class="col-sm-4 col-md-4">
                    <input ng-model="username" type="text" required class="form-control" id="username">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 col-md-3 control-label">Password :</label>
                <div class="col-sm-4 col-md-4">
                    <input ng-model="password" type="password" required class="form-control" id="password">
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