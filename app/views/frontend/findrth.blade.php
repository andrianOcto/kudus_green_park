@include('frontend/head')
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-2">
                <!-- filter kecamatan -->
                <form method="POST" action="findrth">
                <div class="form-group">
                    <label for="nama" class="control-label">Jenis RTH</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option>-Pilih Jenis RTH-</option>
                            @foreach($jenis as $key => $value)
                                <option value="{{$value->id}}">{{$value->jenis}}</option>    
                            @endforeach
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
                            <option></option>
                        </select>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
            </div>
            <div class="col-md-10">
                <h2>{{$rth->nama_rth}}</h2>
                <br>
                @foreach($foto as $key => $value)
                    <img class="img-thumbnail" src="{{ URL::asset('files/photos/park') }}/{{ $value->fileName }}" style="height:200px">
                @endforeach
                <br>
                <div class="row" style="font-size:1.8em; line-height:1.8; font-weight:300; margin-top:40px">
                    <div class="col-sm-4" style="text-align:right">Kode RTH :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->id_rth}}</div>
                    <div class="col-sm-4" style="text-align:right">Jenis RTH :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->jenis}}</div>
                    <div class="col-sm-4" style="text-align:right">Kecamatan :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->kecamatan}}</div>
                    <div class="col-sm-4" style="text-align:right">Desa :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->desa}}</div>
                    <div class="col-sm-4" style="text-align:right">Bentuk dan Luas :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->luas}}</div>
                    <div class="col-sm-4" style="text-align:right">Jenis Tanaman :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->jenis_tanaman}}</div>
                    <div class="col-sm-4" style="text-align:right">Status Lahan :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->status}}</div>
                    <div class="col-sm-4" style="text-align:right">Pengelola :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->pengelola}}</div>
                    <div class="col-sm-4" style="text-align:right">Fungsi :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->fungsi}}</div>
                    <div class="col-sm-4" style="text-align:right">Alamat :</div>
                    <div class="col-sm-7" style="text-align:left">{{$rth->alamat}}</div>
                    <div class="col-sm-4" style="text-align:right">Lokasi :</div>
                    <div class="col-sm-7" style="text-align:left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.8299452059696!2d110.79948599999997!3d-6.790536999999971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dcac333a0f6d%3A0x4027a76e352f320!2sKaliwungu%2C+Kudus+Regency%2C+Central+Java!5e0!3m2!1sen!2sid!4v1441844808618" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $("#zoom").elevateZoom({
            gallery : "gallery",
            galleryActiveClass: "active",
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        }); 

    $("#select").change(function(e){
       var currentValue = $("#select").val();
       if(currentValue == 1){    
           smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png';
           largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg';
       }
       if(currentValue == 2){    
           smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png';
           largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg';
       }
       if(currentValue == 3){    
           smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png';
           largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image3.jpg';
       }
       if(currentValue == 4){    
           smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png';
           largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image4.jpg';
       }
        
    $('#gallery a').removeClass('active').eq(currentValue-1).addClass('active'); 
        var ez =   $('#zoom').data('elevateZoom');
            ez.swaptheimage(smallImage, largeImage); 
        });
    });
    </script>
@include('frontend/foot')