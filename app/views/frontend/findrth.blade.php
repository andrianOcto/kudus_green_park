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
            </div>
            <div class="col-md-10">
                <h2>{{$rth->nama}}</h2>
                <br>
                @foreach($foto as $key => $value)
                    <img class="img-thumbnail" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:200px">
                @endforeach
                <br>
                <h4>Keterangan:</h4>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Bentuk dan Luas :</label>
                        <div class="col-sm-4">
                            <label class="form-control">{{$rth->luas}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Tanaman :</label>
                        <div class="col-sm-4">
                            <label class="form-control">{{$rth->jenis_tanaman}}</label>
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
                            <label class="form-control">{{$rth->pengelola}}</label>
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
@include('frontend/foot')