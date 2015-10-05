@include('head')
<legend>
    <h1 style="font-weight:200">User List</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="form_input" ng-controller="submitController" uploader="uploader" ng-submit="uploader.uploadAll()"  filters="queueLimit, customFilter" class="form-horizontal" role="form">
        <center>
        <div ng-repeat="item in uploader.queue">
        <div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, height: 150 }"></div></div>
        <input type="file" nv-file-select="" uploader="uploader" required/>
        <div class="progress" style="">
            <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
        </div>
        </center>
        <!-- halaman form -->

            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Nama Lengkap :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="nama" type="text" required class="form-control" id="nama">
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
            <div class="form-group">
                <label for="email" class="col-sm-3 col-md-3 control-label">Email :</label>
                <div class="col-sm-4 col-md-4">
                    <input ng-model="email" type="email" required class="form-control" id="email">
                </div>
            </div>
            <div class="form-group">
                <label for="kontak" class="col-sm-3 col-md-3 control-label">Contact :</label>
                <div class="col-sm-4 col-md-4">
                    <input ng-model="contact" type="text" required class="form-control" id="kontak">
                </div>
            </div>
            <div class="form-group">
                <label for="bio" class="col-sm-3 col-md-3 control-label">Bio :</label>
                <div class="col-sm-7 col-md-7">
                    <textarea ng-model="bio" rows="3" id="bio" class="form-control"></textarea>
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