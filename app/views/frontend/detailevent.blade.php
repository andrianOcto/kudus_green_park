@include('frontend/head')
<div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
<div class="row" style="padding-top:50px; padding-bottom:70px">
    <div class="container">
        <center>
            <h1 style="font-weight:400; padding-bottom:30px;">{{$detail->judul}}</h1>
            <img style="width:500px" class="media-object img-rounded" src="{{ URL::asset('files/photos/user')}}/{{$detail->foto}}">
            <p style="margin-top:20px">posted: {{$detail->created_at}}</p>
        </center>

        <p style="font-size:1.2em">{{$detail->deskripsi}}</p>
    </div>
</div>
</div>
@include('frontend/foot')