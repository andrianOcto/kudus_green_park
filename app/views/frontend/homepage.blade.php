@include('frontend/head')
    <!--  image slide  -->
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ URL::asset('images/c_rth_3.png') }}" style="width:100%">
                    <div class="carousel-caption" style="margin-bottom:10px; left:50px; right:0; text-align:left">
                        <h4>RUANG TERBUKA HIJAU</h4>
                        <p style="font-size:1.3em">adalah area memanjang/jalur dan atau mengelompok, yang penggunaannya lebih bersifat terbuka, <br />tempat tumbuh tanaman, baik yang tumbuh tanaman secara alamiah maupun yang sengaja ditanam<br />(Peraturan Menteri Pekerjaan Umum Nomor 5/PRT/M/2008).</p>
            <a href="/tentangrth" class="btn btn-primary" style="margin-top:10px; font-size:1.3em">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ URL::asset('images/c_rth_2.png') }}" style="width:100%">
                    <div class="carousel-caption" style="margin-bottom:10px; left:0; right:50px; text-align:right;">
                        <h4>RUANG TERBUKA HIJAU</h4>
                        <p style="font-size:1.3em">adalah area memanjang/jalur dan atau mengelompok, yang penggunaannya lebih bersifat terbuka, <br />tempat tumbuh tanaman, baik yang tumbuh tanaman secara alamiah maupun yang sengaja ditanam<br />(Peraturan Menteri Pekerjaan Umum Nomor 5/PRT/M/2008).</p>
            <a href="/tentangrth" class="btn btn-primary" style="margin-top:10px; font-size:1.3em">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ URL::asset('images/c_rth_4.png') }}" style="width:100%">
                </div>
                <div class="item">
                    <img src="{{ URL::asset('images/c_rth_1.png') }}" style="width:100%">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>       
    </div>
    
    <!--  content homepage  -->
    <div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <div class="container" >
        <div class="row" style="margin-top:50px; padding-bottom:70px">
            @foreach($post as $key => $value)
            <div class="col-md-6">
                <div style="margin-top:30px; background-image:url('{{ URL::asset('images/back_green.png') }}'); padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:5px; border-top-left-radius:5px; border-top-right-radius:5px">
                <a href="/detailevent/{{$value->id_event}}" style="color:black; font-size:1.5em; text-transform: uppercase;">
                    {{$value->judul}}
                    </a></div>
                <p style="text-align:justify; padding:5px">
                    <img style="float:left; width:150px; margin-right:20px; margin-bottom:20px; margin-top:5px" class="media-object img-rounded" src="{{ URL::asset('files/photos/user')}}/{{$value->foto}}">
                    <?php 
                        $originalDate = $value->created_at;
                        $date = date("d-M-Y", strtotime($originalDate));
                    ?>
                    diposting: <?php echo $date; ?><br /> <br />
                    
                    <?php 
                        $string = strip_tags($value->deskripsi);
                        if (strlen($string) > 200) {
                            $stringCut = substr($string, 0, 200);
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '; 
                        }
                        echo $string;
                     ?>
                </p>
                <a href="/detailevent/{{$value->id_event}}" class="btn btn-success">selengkapnya</a>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="container">
        <center><h2 style="font-weight:400; border-bottom:1px solid grey; width:30%; padding-bottom:5px">KATA BELIAU</h2></center>
        <div class="row" style="margin-top:50px">
            @foreach($testimoni as $key => $value)
            <div class="col-sm-6">
                <div class="media" style="padding-bottom:20px">
                    <div class="media-left">
                        <img style="width:100px; height:100px" class="media-object img-circle" src="{{ URL::asset('files/photos/user')}}/{{$value->foto}}">
                    </div>
                    <div class="media-body" style="padding-left:20px">
                        <p style="font-size:1.2em">{{$value->deskripsi}}</p>
                        <br>
                        <p>{{$value->judul}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
    <div class="container" style="width:50%; margin-top:60px; padding-bottom:70px">
            <div class="embed-responsive embed-responsive-16by9">
                <center>
                <iframe class="embed-responsive-item" src="{{$url}}" frameborder="0" allowfullscreen></iframe>
                </center>
            </div>
        </div>
</div>
@include('frontend/foot')