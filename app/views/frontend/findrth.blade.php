@include('head')
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
                <h2>Lapangan Desa Depan SMP 1 Kaliwungu</h2>
                <br>
                <img class="img-thumbnail" src="{{ URL::asset('images/lapangan1.jpg') }}" style="height:200px">
                <img class="img-thumbnail" src="{{ URL::asset('images/lapangan2.jpg') }}" style="height:200px">
                <img class="img-thumbnail" src="{{ URL::asset('images/lapangan3.jpg') }}" style="height:200px">
                <br>
                <h4>Keterangan:</h4>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Bentuk dan Luas :</label>
                        <div class="col-sm-4">
                            <label class="form-control">Persegi / 1,49 ha</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Tanaman :</label>
                        <div class="col-sm-4">
                            <label class="form-control">Angsana, Glodogan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status Lahan :</label>
                        <div class="col-sm-4">
                            <label class="form-control">Tanah Desa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pengelola :</label>
                        <div class="col-sm-4">
                            <label class="form-control">Pemerintah Desa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Lokasi :</label>
                        <div class="col-sm-9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.8299452059696!2d110.79948599999997!3d-6.790536999999971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dcac333a0f6d%3A0x4027a76e352f320!2sKaliwungu%2C+Kudus+Regency%2C+Central+Java!5e0!3m2!1sen!2sid!4v1441844808618" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('foot')