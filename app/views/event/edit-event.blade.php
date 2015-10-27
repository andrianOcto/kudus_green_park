@include('head')
<legend>
    <h1 style="font-weight:200">Edit User</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="updateUser" ng-controller="updateUserController" ng-submit="update()" ng-init="id_event='{{ $event->id_event }}';judul='{{ $event->judul }}';deskripsi='{{ $event->deskripsi }}'; kategori='{{$event->kategori}}'" class="form-horizontal" uploader="uploader" filters="queueLimit, customFilter" role="form">
            <img ng-show="showImage" style="height:150px" src="{{ URL::asset('files/photos/user') }}/{{ $event->foto }}">
            <div ng-repeat="item in uploader.queue">
            <div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, height: 150 }"></div></div>
            <input type="file" nv-file-select="" uploader="uploader" />
            <div class="progress" style="">
                <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
            </div>
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Kategori :</label>
                <div class="col-sm-7 col-md-7">
                    <select class="form-control" style="width:200px" ng-model="kategori">
                        <option value="0">-Pilih Kategori-</option>
                        <option value="1">Event</option>
                        <option value="2">Testimoni</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Judul :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="id_event" type="hidden" required class="form-control" id="id_event">
                    <input ng-model="judul" type="text" required class="form-control" id="nama">
                </div>
            </div>
            <div class="form-group">
                <label for="bio" class="col-sm-3 col-md-3 control-label">Deskripsi :</label>
                <div class="col-sm-7 col-md-7">
                    <textarea ng-model="deskripsi" rows="3" id="deskripsi" class="form-control"></textarea>
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