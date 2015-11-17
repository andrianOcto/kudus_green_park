@include('frontend/head')
<div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
<div class="row" style="padding-top:50px; padding-bottom:70px">
    <div class="container">
        <div class="col-md-9">
            <h1 style="font-weight:400">{{$detail->judul}}</h1>
            <p style="padding-bottom:20px">posted: {{$detail->created_at}}</p>
            <center>
                <img style="width:500px" class="media-object img-rounded" src="{{ URL::asset('files/photos/user')}}/{{$detail->foto}}">
            </center>

            <p style="font-size:1.2em">{{$detail->deskripsi}}</p>
        </div>
        <div class="col-md-3">
            <h3 style="font-weight:400">Event Terkini:</h3>
            @foreach($post as $value => $key)
            <div class="row">
            <div style="margin-top:30px; background-image:url('{{ URL::asset('images/back_green.png') }}'); padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:5px; border-top-left-radius:5px; border-top-right-radius:5px">
            <a href="/detailevent/{{$detail->id_event}}" style="color:black; font-size:1.5em; text-transform: uppercase;">
                {{$key->judul}}
                </a></div>
            <p style="text-align:justify; padding:5px">
                <img style="float:left; width:100px; margin-right:20px; margin-bottom:20px; margin-top:5px" class="media-object img-rounded" src="{{ URL::asset('files/photos/user')}}/{{$detail->foto}}">
                <?php 
                    $originalDate = $key->created_at;
                    $date = date("d-M-Y", strtotime($originalDate));
                ?>
                <?php echo $date; ?><br />

                <?php 
                    $string = strip_tags($key->deskripsi);
                    if (strlen($string) > 100) {
                        $stringCut = substr($string, 0, 100);
                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '; 
                    }
                    echo $string;
                 ?>
            </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@include('frontend/foot')