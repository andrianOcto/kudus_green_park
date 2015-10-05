@include("head")
<legend>
    <h1 style="font-weight:200">Edit Park</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
<form ng-app="updatePark" ng-controller="updateParkController" uploader="uploader" ng-submit="submitPark()" ng-init="idpark='{{ $park->idpark }}';nama_park='{{ $park->nama_park }}';alamat='{{ $park->alamat }}';latitude='{{ $park->latitude }}';longitude='{{ $park->longitude }}';deskripsi='{{ $park->deskripsi }}';" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="nama" class="col-sm-2 col-md-2 control-label">Nama Taman :</label>
        <div class="col-sm-9 col-md-9">
            <input type="hidden" ng-model='idpark'>
            <input ng-model="nama_park" type="text" class="form-control" id="nama-taman" required>
        </div>
    </div>
    <div class="form-group">
        <label for="alamat" class="col-sm-2 col-md-2 control-label">Alamat :</label>
        <div class="col-sm-9 col-md-9">
            <textarea ng-model="alamat" class="form-control" rows="3" id="alamat-taman" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="latitude" class="col-sm-2 col-md-2 control-label">Latitude:</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="latitude" type="text" class="form-control" id="latitude" required>
        </div>
    </div>
    <div class="form-group">
        <label for="longitude" class="col-sm-2 col-md-2 control-label">Longitude:</label>
        <div class="col-sm-9 col-md-9">
            <input ng-model="longitude" type="text" class="form-control" id="longitude" required>
        </div>
    </div>
    <div class="form-group">
        <label for="deskripsi" class="col-sm-2 col-md-2 control-label">Deskripsi :</label>
        <div class="col-sm-9 col-md-9">
            <textarea ng-model="deskripsi" class="form-control" rows="4" id="deskripsi-taman" required></textarea>
        </div>
    </div>
  
   
      <div class="col-md-9" style="margin-bottom: 40px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="50%">Name</th>
                                <th ng-show="uploader.isHTML5">Size</th>
                                <th ng-show="uploader.isHTML5">Progress</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foto as $key => $value)
                                <tr ng-show="image{{$value->idphoto}}" ng-init="image{{$value->idphoto}}=true">
                                <td>
                                    <!-- Image preview -->
                                    <!--auto height-->
                                    <!--<div ng-thumb="{ file: item.file, width: 100 }"></div>-->
                                    <!--auto width-->
                                    <img style="height:150px;width:150px" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName}}">
                                    
                                    <!--fixed width and height -->
                                    <!--<div ng-thumb="{ file: item.file, width: 100, height: 100 }"></div>-->
                                </td>
                                <td ng-show="uploader.isHTML5" nowrap>@{{ item.file.size/1024/1024|number:2 }}</td>
                                <td ng-show="uploader.isHTML5">
                                    <div class="progress" style="margin-bottom: 0;">
                                        <div class="progress-bar" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span><i class="glyphicon glyphicon-ok"></i></span>
                                </td>
                                <td nowrap>
                                    <button type="button" class="btn btn-danger btn-xs" ng-click="addList({{$value->idphoto}});image{{$value->idphoto}}=false">
                                        <span class="glyphicon glyphicon-trash"></span> Remove
                                    </button>
                                </td>
                            </tr>
                                
                            @endforeach 
                        </tbody>
                    </table>
                      <div class="form-group">
        <label for="photo" class="col-sm-2 col-md-2 control-label">Add photo :</label>
        <div class="col-sm-2 col-md-2">
            <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>  choose file</button>
            <input type="file" nv-file-select="" uploader="uploader" multiple /><br/>
        </div>
    </div>
  
                </div>

       <div class="col-md-9" style="margin-bottom: 40px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="50%">Name</th>
                                <th ng-show="uploader.isHTML5">Size</th>
                                <th ng-show="uploader.isHTML5">Progress</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in uploader.queue">
                                <td>
                                    <!-- Image preview -->
                                    <!--auto height-->
                                    <!--<div ng-thumb="{ file: item.file, width: 100 }"></div>-->
                                    <!--auto width-->
                                    <div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, height: 100 }"></div>
                                    <!--fixed width and height -->
                                    <!--<div ng-thumb="{ file: item.file, width: 100, height: 100 }"></div>-->
                                </td>
                                <td ng-show="uploader.isHTML5" nowrap>@{{ item.file.size/1024/1024|number:2 }} MB</td>
                                <td ng-show="uploader.isHTML5">
                                    <div class="progress" style="margin-bottom: 0;">
                                        <div class="progress-bar" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span ng-show="item.isSuccess"><i class="glyphicon glyphicon-ok"></i></span>
                                    <span ng-show="item.isCancel"><i class="glyphicon glyphicon-ban-circle"></i></span>
                                    <span ng-show="item.isError"><i class="glyphicon glyphicon-remove"></i></span>
                                </td>
                                <td nowrap>
                                    <button type="button" class="btn btn-danger btn-xs" ng-click="item.remove()">
                                        <span class="glyphicon glyphicon-trash"></span> Cancel
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div>
                        <div>
                            <div class="progress" style="">
                                <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
                            </div>
                        </div>
                        
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