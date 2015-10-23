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
                    <img src="{{ URL::asset('images/rth1.jpg') }}" style="width:100%; height:500px">
                    <div class="carousel-caption">
                        <p>Keterangan terkait gambar 1 yang ditampilkan</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ URL::asset('images/rth2.jpg') }}" style="width:100%; height:500px">
                    <div class="carousel-caption">
                        <p>Keterangan terkait gambar 2 yang ditampilkan</p>
                    </div>
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
    <div class="container" style="width:60%; margin-top:20px">
        <center>
            <h1 style="font-weight:400; padding-bottom:20px">Ruang Terbuka Hijau</h1>
            <p>adalah area memanjang/jalur dan atau mengelompok, yang penggunaannya lebih bersifat terbuka, tempat tumbuh tanaman, baik yang tumbuh tanaman secara alamiah maupun yang sengaja ditanam (Peraturan Menteri Pekerjaan Umum Nomor 5/PRT/M/2008).</p>
            <a href="/tentangrth" class="btn btn-success" style="margin-top:10px">Baca Selengkapnya</a>
        </center>
    </div>
    
    <div class="row" style="margin-top:50px; background-color:white; padding-top:50px; padding-bottom:50px">
    <div class="container">
        <div class="col-md-6 col-xs-12">
            <center><img src="{{ URL::asset('images/Kudus.jpg') }}" style="width:400px; margin-top:100px"></center>
        </div>
        <div class="col-md-6 col-xs-12"></div>
            <center><img src="{{ URL::asset('images/rthjenis.png') }}" style="width:500px"></center>
    </div>
    </div>
    </div>
    
    <div class="container" style="width:70%">
        <div class="row" style="margin-top:50px; border-bottom:1px solid grey; padding-bottom:70px">
            <h1 style="text-align:center; padding-bottom:30px; font-weight:400">Events</h1>
            <div class="media" style="padding-bottom:20px">
                <div class="media-left">
                    <img style="width:150px" class="media-object img-rounded" src="{{ URL::asset('files/photos/park/1444614147_aRnkiCF07Eok.JPG') }}">
                </div>
                <div class="media-body" style="padding-left:20px">
                    <a href="#" style="color:black; text-decoration:none"><h2 style="font-weight:300" class="media-heading">Judul Artikel</h2></a>
                    <p>posted: 10 oktober 2015/04:04</p>
                    <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                    <br>
                    <a href="/detailevent" class="btn btn-success btn-small">baca selengkapnya</a>
                </div>
            </div>
            <div class="media" style="padding-bottom:20px">
                <div class="media-left">
                    <img style="width:150px" class="media-object img-rounded" src="{{ URL::asset('files/photos/park/1444614147_aRnkiCF07Eok.JPG') }}">
                </div>
                <div class="media-body" style="padding-left:20px">
                    <a href="/detailevent" style="color:black; text-decoration:none"><h2 style="font-weight:300" class="media-heading">Judul Artikel</h2></a>
                    <p>posted: 10 oktober 2015/04:04</p>
                    <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                    <br>
                    <a href="/detailevent" class="btn btn-success btn-small">baca selengkapnya</a>
                </div>
            </div>
            <div class="media" style="padding-bottom:20px">
                <div class="media-left">
                    <img style="width:150px" class="media-object img-rounded" src="{{ URL::asset('files/photos/park/1444614147_aRnkiCF07Eok.JPG') }}">
                </div>
                <div class="media-body" style="padding-left:20px">
                    <a href="/detailevent" style="color:black; text-decoration:none"><h2 style="font-weight:300" class="media-heading">Judul Artikel</h2></a>
                    <p>posted: 10 oktober 2015/04:04</p>
                    <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                    <br>
                    <a href="/detailevent" class="btn btn-success btn-small">baca selengkapnya</a>
                </div>
            </div>
            <div class="media" style="padding-bottom:20px">
                <div class="media-left">
                    <img style="width:150px" class="media-object img-rounded" src="{{ URL::asset('files/photos/park/1444614147_aRnkiCF07Eok.JPG') }}">
                </div>
                <div class="media-body" style="padding-left:20px">
                    <a href="/detailevent" style="color:black; text-decoration:none"><h2 style="font-weight:300" class="media-heading">Judul Artikel</h2></a>
                    <p>posted: 10 oktober 2015/04:04</p>
                    <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                    <br>
                    <a href="/detailevent" class="btn btn-success btn-small">baca selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-sm-6">
                <div class="media" style="padding-bottom:20px">
                    <div class="media-left">
                        <img style="width:130px; height:130px" class="media-object img-circle" src="{{ URL::asset('files/photos/park/1444615029_G7Y9qohwdop2.jpg') }}">
                    </div>
                    <div class="media-body" style="padding-left:20px">
                        <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                        <br>
                        <p>Co Founder Null Pointer Media</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="media" style="padding-bottom:20px">
                    <div class="media-left">
                        <img style="width:130px; height:130px" class="media-object img-circle" src="{{ URL::asset('files/photos/park/1444615029_G7Y9qohwdop2.jpg') }}">
                    </div>
                    <div class="media-body" style="padding-left:20px">
                        <p style="font-size:1.2em">Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait Ini adalah deskripsi singkat mengenai artikel terkait.</p>
                        <br>
                        <p>Co Founder Null Pointer Media</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" style="width:60%;margin-top:60px">
            <div class="embed-responsive embed-responsive-16by9">
                <center>
                <iframe class="embed-responsive-item" src="{{$url}}" frameborder="0" allowfullscreen></iframe>
                </center>
            </div>
        </div>
@include('frontend/foot')