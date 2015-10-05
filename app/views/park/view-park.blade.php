@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black"><a href="../park">Park list</a></li>
        <li style="color:black">view park</li>
    </ol>
</legend>
<h3>{{ $park->nama_park }}</h3>
&nbsp;<br>

<div id="container">
    <div id="gallery" class="ad-gallery">
        <div class="ad-image-wrapper">
        </div>
        <div class="ad-nav">
            <div class="ad-thumbs">
              <ul class="ad-thumb-list">
                  @foreach($foto as $key => $value)
                <li>
                  <a href="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}">
                    <img src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:50px" class="image0">
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
        </div>
    </div>
</div>

<!--
@foreach($foto as $key => $value)
<img class="img-thumbnail" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:250px">
@endforeach
-->

&nbsp;<br><br>
<p>{{ $park->alamat }}</p>
<p>{{ $park->longitude }}  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-search"></span> view on map</button></p>
<p>{{ $park->deskripsi }}</p>
<br><br>
<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> edit</button>
  
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
@include("template/foot")