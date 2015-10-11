@include('frontend/head')
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            <!-- filter kecamatan -->
            <div class="list-group">
                <a href="#" class="list-group-item active">Kecamatan</a>
                <a href="#" class="list-group-item">Kota</a>
                <a href="#" class="list-group-item">Bae</a>
                <a href="#" class="list-group-item">Jati</a>
                <a href="#" class="list-group-item">Kaliwingu</a>
                <a href="#" class="list-group-item">Gebog</a>
                <a href="#" class="list-group-item">Mejobo</a>
            </div>
            <!-- filter desa/kelurahan -->
            <div class="list-group">
                <a href="#" class="list-group-item active">Desa / Kelurahan</a>
                <a href="#" class="list-group-item">Getasrabi</a>
                <a href="#" class="list-group-item">Klumpit</a>
                <a href="#" class="list-group-item">Gribig</a>
                <a href="#" class="list-group-item">Karangmalang</a>
                <a href="#" class="list-group-item">Padurenan</a>
            </div>
            <!-- filter jenis rth -->
            <div class="list-group">
                <a href="#" class="list-group-item active">Jenis RTH</a>
                <a href="#" class="list-group-item">Taman</a>
                <a href="#" class="list-group-item">Hutan Kota</a>
                <a href="#" class="list-group-item">Jalur Hijau Jalan</a>
                <a href="#" class="list-group-item">Fungsi Tertentu</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <!-- start foreach -->
                <div class="col-md-6 col-sm-6" style="border: 1px solid black; border-radius:5px; padding:10px; margin-right:20px; margin-bottom:20px; width:45%">
                    <div class="media">
                        <div class="media-left">
                        <a href="#">
                            <img style="width:100px" class="media-object" src="{{ URL::asset('images/lapangan3.jpg') }}">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="#" style="color:black; text-decoration:none"><h4 class="media-heading">Media heading</h4></a>
                            <p>Nama RTH<br>
                            Lokasi RTH<br>
                            Jenis RTH</p>
                        </div>
                    </div>
                </div>
                <!-- end foreach -->
            </div>
        </div>
    </div>
</div>
@include('frontend/foot')