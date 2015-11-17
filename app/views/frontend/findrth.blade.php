@include('frontend/head')
<div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
<div class="container" style="padding-top:50px; padding-bottom:70px">
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="padding-bottom:20px">
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
                        <option value="all">Semua Jenis RTH</option>
                        @foreach($jenis as $key => $value)
                            <option value="{{$value->id}}">{{$value->jenis}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="all">Semua Kecamatan</option>
                        @foreach($kecamatan as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="desa" id="desa">
                        <option value="all">Semua Desa/Kelurahan</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary">
            {{ Form::close() }}
          </div>
        </div>
        </div>
        </div>
        <center><h2>{{$rth->nama_rth}}</h2></center><br>
        <div class="col-md-5">
<!--
                @foreach($foto as $key => $value)
                    <img class="img-rounded" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:200px">
                @endforeach
-->
                <center>
                <img class="img-rounded" id="zoom" src="{{ URL::asset('files/photos/park/thumb') }}/{{ $value->fileName }}" data-zoom-image="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" width="100%">
                <br><br>
                <div id="gallery" style="width:100%">
                    @foreach($foto as $key => $value)
                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ URL::asset('files/photos/park/thumb') }}/{{ $value->fileName }}" data-zoom-image="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}">
                        <img class="img-rounded" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" height="80px">
                    </a>
                    @endforeach
                </div>
                </center>
        </div>
        <div class="col-md-7">
            <table style="border:none; line-height:1.8; font-size:1.5em">
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Kode RTH</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->id_rth}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Jenis RTH</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->jenis}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Kecamatan</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->kecamatan}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Desa/Kelurahan</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->desa}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Bentuk dan Luas</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->luas}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Jenis Tanaman</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->jenis_tanaman}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Fungsi</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->fungsi}}</td>
                </tr>
                <tr>
                    <td style="width:35%; vertical-align: text-top;">Alamat</td>
                    <td style="width:5%; vertical-align: text-top;">: </td>
                    <td style="width:60%; vertical-align: text-top;">{{$rth->alamat}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row" style="margin-top:50px; width:80%; margin-left:auto; margin-right:auto">
        <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" style="border-bottom: none;">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Gambaran tempat</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Rencana/realisasi</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="padding-left:20px; padding:20px; border: 1.5px solid #4CAF50; border-bottom-left-radius:5px; border-bottom-right-radius:5px">
    <div role="tabpanel" class="tab-pane active" id="home">
        <table style="border:none; line-height:1.8; font-size:1.2em; ">
            <tr>
                <td style="width:20%; vertical-align: text-top;">Sarana dan fasilitas</td>
                <td style="width:2%; vertical-align: text-top;">:</td>
                <td style="width:78%; vertical-align: text-top;">Ini akan berisi sarana-sarana dan fasilitas-fasilitas umum yang dapat dimanfaatkan oleh pengunjung.</td>
            </tr>
            <tr>
                <td style="width:20%; vertical-align: text-top;">Akomodasi</td>
                <td style="width:2%; vertical-align: text-top;">:</td>
                <td style="width:78%; vertical-align: text-top;">Ini akan berisi informasi bagaimana pengunjung bisa sampai pada ruang terbuka hijau terkait.</td>
            </tr>
        </table>
        <center>
            <div id="map" style="width: 70%; height: 300px; margin-top:50px"></div>
        </center>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <table style="border:none; line-height:1.8; font-size:1.2em; ">
            <tr>
                <td style="width:40%; vertical-align: text-top;">Tahun Perencanaan</td>
                <td style="width:5%; vertical-align: text-top;">:</td>
                <td style="width:20%; vertical-align: text-top;">{{$rth->tahun_rencana}}</td>
            </tr>
            <tr>
                <td>Tahun Realisasi</td>
                <td>:</td>
                <td>{{$rth->tahun_realisasi}}</td>
            </tr>
        </table>
        <br />
        <center><img src="{{ URL::asset('files/photos/park') }}/{{$rth->path_rencana}}" width="80%" class="img-rounded"></center>
        <center><img src="{{ URL::asset('files/photos/park') }}/{{$rth->path_realisasi}}" width="80%" class="img-rounded"></center>
    </div>
  </div>

</div>
    </div>
</div>
</div>

<script>
var myCenter=new google.maps.LatLng({{$rth->location}});

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"{{$rth->nama_rth}}"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

@include('frontend/foot')