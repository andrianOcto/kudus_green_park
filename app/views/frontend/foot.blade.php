    <div class="row" style="margin-left:0px; margin-right:0px; background-color:#009688; padding:3px">
    </div>
    <div class="row" style="padding:10px; background-color:#00796B">
        <center>
            <h1 style="color:whitesmoke; font-weight:400">PEMERINTAH KABUPATEN KUDUS</h1>
            <h3 style="color:whitesmoke; font-weight:400">Dinas Cipta Karya Dan Tata Ruang</h3>
            <p style="padding-top:10px"> <b>RTH Kudus &copy; 2015</b> | <a style="color:#333; text-decoration:none" href="http://www.nullpointermedia.com" target="_blank">created by nullpointer media</a> </p>
        </center>
    </div>

    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/angular-file-upload.min.js') }}"></script> 
    <script src="{{ URL::asset('js/page/userSubmit.js') }}"></script> 
    <script src="{{ URL::asset('js/page/data_post.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.elevatezoom.js') }}"></script>
    <script type="text/javascript">
        $('#kecamatan').change(function(){
            var id_kecamatan = $(this).val();
            console.log(id_kecamatan);
            desa(id_kecamatan);

        });

        function desa(id){
           $.ajax({
          type: 'GET',
          url:'http://localhost:8000/desa/'+id,
          success: function(data) {
            //called when successful
            var nama = '<option value="all">-Pilih Desa-</option>';
              for(var i in data){
                  nama += '<option value="'+data[i].id+'">'+ data[i].nama+'</option>';                        
              }
              $('#desa').html(nama);    
           console.log(data);
          },
          error: function(e) {
            //called when there is an error
            //console.log(e.message);
          }
        });
       }
    </script>
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
       
    $('#gallery a').removeClass('active').eq(currentValue-1).addClass('active'); 
        var ez =   $('#zoom').data('elevateZoom');
            ez.swaptheimage(smallImage, largeImage); 
        });
    });
    </script>
  </body>
</html>
