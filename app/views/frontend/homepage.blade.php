@include('head')
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
            <h3>Ruang Terbuka Hijau</h3>
            <p>Identifikasi kondisi RTH ini dilakukan terhadap RTH eksisting yang ada saat ini di wilayah perencanaan dengan berdasar pada data dan hasil pengamatan di lapangan. Identifikasi RTH ini dilakukan dengan berdasarkan pengelompokan jenis RTH mengacu Peraturan Menteri Pekerjaan umum Nomor 5/PRT/M/2008 tentang Pedoman Penyediaan dan Pemanfaatan Ruang Terbuka Hijau di Kawasan Perkotaan</p>
            <a href="#" class="btn btn-success" style="margin-top:10px">Baca Selengkapnya...</a>
        </center>
    </div>
    
    <div class="row" style="margin-top:50px; background-color:#B6B6B6; padding-top:50px; padding-bottom:50px">
        <div class="container">
        <div class="col-sm-6 col-md-3" style="text-align:center">
            <a href="#" style="color:black; text-decoration:none"><img src="{{ URL::asset('images/blank-tree.png') }}" style="width:150px">
                <h3>Taman / Lapangan</h3></a>
        </div>
        <div class="col-sm-6 col-md-3" style="text-align:center">
            <a href="#" style="color:black; text-decoration:none"><img src="{{ URL::asset('images/blank-tree.png') }}" style="width:150px">
                <h3>Hutan Kota</h3></a>
        </div>
        <div class="col-sm-6 col-md-3" style="text-align:center">
            <a href="#" style="color:black; text-decoration:none"><img src="{{ URL::asset('images/blank-tree.png') }}" style="width:150px">
                <h3>Jalur Hijau Jalan</h3></a>
        </div>
        <div class="col-sm-6 col-md-3" style="text-align:center">
            <a href="#" style="color:black; text-decoration:none"><img src="{{ URL::asset('images/blank-tree.png') }}" style="width:150px">
                <h3>RTH Fungsi Tertentu</h3></a>
        </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <h3 style="text-align:center; padding-bottom:30px">Kata Beliau</h3>
            <div class="col-sm-6" style="text-align:center">
                <img src="{{ URL::asset('images/testimoni.png') }}" style="width:400px">
            </div>
            <div class="col-sm-6" style="text-align:center">
                <img src="{{ URL::asset('images/testimoni.png') }}" style="width:400px">
            </div>
            <div class="col-sm-6" style="text-align:center; margin-top:30px">
                <img src="{{ URL::asset('images/testimoni.png') }}" style="width:400px">
            </div>
            <div class="col-sm-6" style="text-align:center; margin-top:30px">
                <img src="{{ URL::asset('images/testimoni.png') }}" style="width:400px">
            </div>
        </div>
    </div>
    
    <div class="container" style="width:80%;margin-top:60px">
            <div class="embed-responsive embed-responsive-16by9">
                <center>
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qS8-XInj_qg" frameborder="0" allowfullscreen></iframe>
                </center>
            </div>
        </div>
@include('foot')