@include('head')
<legend>
    <h1 style="font-weight:200">Setting Video</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="video" ng-controller="videoController" ng-submit="editVideo()" class="form-horizontal" role="form" ng-init="url='{{$url}}';oldUrl='{{$url}}'">
            
            <div class="alert alert-info" role="alert">Contoh link video : https://www.youtube.com/embed/qS8-XInj_qg</div>
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Link Video :</label>
                <div class="col-sm-9 col-md-9">
                    <input ng-model="oldUrl" type="hidden" class="form-control" id="oldUrl" >
                    <input ng-model="url" type="text" required class="form-control" id="url" >
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