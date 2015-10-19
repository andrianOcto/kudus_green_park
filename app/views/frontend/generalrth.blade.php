@include('frontend/head')
<script type="text/javascript">
    var angular = angular;
    var console = console;

var generalRth    = angular.module('generalRth', []);

generalRth.controller('filterCtrl',['$scope','$http',function($scope,$http)
{   
    $scope.isError  =false;
    $scope.message  ="";
    $scope.loading  =false;
    
}]);
</script>
<div class="container" style="margin-top:50px" ng-app="generalRth" ng-controller="filterCtrl">
    <div class="row">
        <div class="col-md-2">
            <!-- filter kecamatan -->
            {{ Form::open(array('url' => 'findrth', 'method' => 'POST')) }}
                <div class="form-group" >
                    <label for="nama" class="control-label">Jenis RTH</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option value="all">-Pilih Jenis RTH-</option>
                            @foreach($jenis as $key => $value)
                                <option value="{{$value->id}}">{{$value->jenis}}</option>    
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="nama" class="control-label">Kecamatan</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="all">-Pilih Kecamatan-</option>
                            @foreach($kecamatan as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="nama" class="control-label">Desa</label>
                        <select class="form-control" name="desa" id="desa">
                            <option value="all">-Pilih desa-</option>
                        </select>
                </div>
                <input type="submit" class="btn btn-primary">
            {{ Form::close() }}
          <!--   <div class="list-group">
                <a href="#" class="list-group-item active">Kecamatan</a>
                <a href="#" class="list-group-item">Bae</a>
                <a href="#" class="list-group-item">Jati</a>
                <a href="#" class="list-group-item">Kaliwingu</a>
                <a href="#" class="list-group-item">Gebog</a>
                <a href="#" class="list-group-item">Mejobo</a>
            </div>
            
            <div class="list-group">
                <a href="#" class="list-group-item active">Desa / Kelurahan</a>
                <a href="#" class="list-group-item">Getasrabi</a>
                <a href="#" class="list-group-item">Klumpit</a>
                <a href="#" class="list-group-item">Gribig</a>
                <a href="#" class="list-group-item">Karangmalang</a>
                <a href="#" class="list-group-item">Padurenan</a>
            </div>
            
            <div class="list-group">
                <a href="#" class="list-group-item active">Jenis RTH</a>
                <a href="#" class="list-group-item">Taman</a>
                <a href="#" class="list-group-item">Hutan Kota</a>
                <a href="#" class="list-group-item">Jalur Hijau Jalan</a>
                <a href="#" class="list-group-item">Fungsi Tertentu</a>
            </div> -->
        </div>
        <div class="col-md-10">
            <div class="row" style="margin:0px">
                <?php $i=0; ?>
                @foreach($park as $key => $value)
                <div class="col-md-6 col-sm-6" style="border: 1px solid black; border-radius:5px; padding:10px; margin-right:20px; margin-bottom:20px; width:45%; height:155px; background-color:white">
                    <div class="media">
                        <div class="media-left">
                        <a href="rth/{{ $value->id_rth }}">
                            <img style="width:100px" class="media-object" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="rth/{{ $value->id_rth }}" style="color:black; text-decoration:none"><h4 class="media-heading">{{ $value->nama }}</h4></a>
                            <p>{{ $value->pengelola }}<br>
                            {{ $value->alamat }}<br>
                            {{ $value->fungsi }}</p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
                <!-- end foreach -->
            </div>
        </div>
    </div>
</div>
@include('frontend/foot')