@include('frontend/head')
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            <!-- filter kecamatan -->
            <form method="POST">
                <div class="form-group">
                    <label for="nama" class="control-label">Jenis RTH</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option>-Pilih Jenis RTH-</option>
                            <option value="1">Taman Kota</option>
                            <option value="2">Hutan Kota</option>
                            <option value="3">Pulau Jalan dan Median Jalan</option>
                            <option value="4">Sempadan Sungai dan Mata Air</option>
                            <option value="5">Pemakaman</option>
                            <option value="6">Fungsi Tertentu</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="nama" class="control-label">Kecamatan</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option>-Pilih Kecamatan-</option>
                            @foreach($kecamatan as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="nama" class="control-label">Desa</label>
                        <select class="form-control" name="desa" id="desa">
                            <option>-Pilih desa-</option>
                        </select>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
            <!-- <div class="list-group">
                <a href="#" class="list-group-item active">Kecamatan</a>
                
                <a href="#" class="list-group-item">Bae</a>
                <a href="#" class="list-group-item">Jati</a>
                <a href="#" class="list-group-item">Kaliwingu</a>
                <a href="#" class="list-group-item">Gebog</a>
                <a href="#" class="list-group-item">Mejobo</a>
            </div> -->
            <!-- filter desa/kelurahan -->
            <!-- <div class="list-group">
                <a href="#" class="list-group-item active">Desa / Kelurahan</a>
                <a href="#" class="list-group-item">Getasrabi</a>
                <a href="#" class="list-group-item">Klumpit</a>
                <a href="#" class="list-group-item">Gribig</a>
                <a href="#" class="list-group-item">Karangmalang</a>
                <a href="#" class="list-group-item">Padurenan</a>
            </div> -->
            <!-- filter jenis rth -->
            <!-- <div class="list-group">
                <a href="#" class="list-group-item active">Jenis RTH</a>
                <a href="#" class="list-group-item">Taman</a>
                <a href="#" class="list-group-item">Hutan Kota</a>
                <a href="#" class="list-group-item">Jalur Hijau Jalan</a>
                <a href="#" class="list-group-item">Fungsi Tertentu</a>
            </div> -->
        </div>
        <div class="col-md-10">
            <div class="row">
                <?php $i=0; ?>
                @foreach($park as $key => $value)
                <div class="col-md-6 col-sm-6" style="border: 1px solid black; border-radius:5px; padding:10px; margin-right:20px; margin-bottom:20px; width:45%">
                    <div class="media">
                        <div class="media-left">
                        <a href="rth/{{ $value->id_rth }}">
                            <img style="width:100px" class="media-object" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="rth/{{ $value->id_rth }}" style="color:black; text-decoration:none"><h4 class="media-heading">Media heading</h4></a>
                            <p>{{ $value->nama }}<br>
                            {{ $value->alamat }}<br>
                            {{ $value->pengelola }}</p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
                <!-- end foreach -->
            </div>
        </div>
    </div>
</div>
@include('frontend/foot')