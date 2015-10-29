@include("head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black"><a href="../park">Park list</a></li>
        <li style="color:black">view park</li>
    </ol>
</legend>
<center><h3>{{ $park->nama }}</h3></center>
&nbsp;<br>

<div id="container">
    <div class="row">
        <div class="col-sm-5">
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

<div class="col-sm-7">
<table style="border:none; line-height:1.8; font-size:1.2em">
    <tr>
        <td style="width:35%; vertical-align: text-top;">Kode RTH</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->id_rth}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Jenis RTH</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->jenis}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Kecamatan</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->kecamatan}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Desa/Kelurahan</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->desa}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Bentuk dan Luas</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->luas}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Jenis Tanaman</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->jenis_tanaman}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Fungsi</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->fungsi}}</td>
    </tr>
    <tr>
        <td style="width:35%; vertical-align: text-top;">Alamat</td>
        <td style="width:5%; vertical-align: text-top;">: </td>
        <td style="width:60%; vertical-align: text-top;">{{$park->alamat}}</td>
    </tr>
</table>
<br><br>
<button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-pencil"></span> edit</button>
        </div>
    </div>
</div>
    <script type="text/javascript">
      $(function() {
        var galleries = $('.ad-gallery').adGallery();
        $('#switch-effect').change(
          function() {
            galleries[0].settings.effect = $(this).val();
            return false;
          }
        );
        $('#toggle-slideshow').click(
          function() {
            galleries[0].slideshow.toggle();
            return false;
          }
        );
        $('#toggle-description').click(
          function() {
            if(!galleries[0].settings.description_wrapper) {
              galleries[0].settings.description_wrapper = $('#descriptions');
            } else {
              galleries[0].settings.description_wrapper = false;
            }
            return false;
          }
        );
      });
    </script>
@include("foot")