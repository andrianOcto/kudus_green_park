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


<div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
<div class="container" style="padding-top:50px; padding-bottom:70px">
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default" style="border-color:#4CAF50; background-color:transparent">
        <div class="panel-heading" role="tab" id="headingOne" style="background-image:url('{{ URL::asset('images/back_green.png') }}'); background-color:transparent">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Cari Ruang Terbuka Hijau Berdasarkan:
            </a>
          </h4>
        </div>
        
        <!-- filtering with collapse -->
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body" style="border-top:none">
            {{ Form::open(array('url' => 'findrth', 'method' => 'GET', 'class'=>'form-inline')) }}
                <div class="form-group" >
                    <select class="form-control" name="jenis" id="jenis">
                        <option value="all">-Pilih Jenis RTH-</option>
                        @foreach($jenis as $key => $value)
                            <option value="{{$value->id}}">{{$value->jenis}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="all">-Pilih Kecamatan-</option>
                        @foreach($kecamatan as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="desa" id="desa">
                        <option value="all">-Pilih desa-</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary">
            {{ Form::close() }}
          </div>
        </div>
        </div>
        </div>
            <div id="pagination">
                <?php $i=0;

                
                $jml = count($park);
                if($jml < 1){
                    echo "tidak ditemukan";
                }
                ?>

                @foreach($park as $key => $value)
                <div class="col-md-6" style="padding:10px; margin-bottom:20px">
                    <img src="{{ URL::asset('images/list_border.png') }}" style="position:absolute; width:100%; height:100%; z-index:-10">
                    <div class="media" style="padding-left:10px; padding-right:20px">
                        <div class="media-left">
                        <a href="../../rth/{{ $value->id_rth }}">
                            <img style="width:100px" class="media-object" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="../../rth/{{ $value->id_rth }}" style="color:black; text-decoration:none"><h4 class="media-heading">{{ $value->nama }}</h4></a>
                            <p>{{ $value->pengelola }}<br>
                            {{ $value->alamat }}<br>
                            {{ $value->fungsi }}</p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                
                @endforeach
                
            </div>

            </div>
            
    <div class="row">
        <center>
            <?php 
            //digunakan untuk menampilkan navigator paginasi laravel
            if(!isset($idFind))
                echo $park->links();
            else 
                echo $park->appends(array('jenis' => $jenisForm, 'kecamatan' => $kecamatanForm,'desa' => $desaForm))->links();
                ?>
                <!-- end foreach -->
            </center>
    </div>
    </div>
</div>
</div>
@include('frontend/foot')