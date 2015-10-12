    <div class="row" style="margin-left:0px; margin-right:0px; margin-top:100px; background-color:#009688; padding:20px">
        <div class="col-md-4" style="text-align:center">
            <h4 style="color:white">LINK INSTANSI DAERAH</h4><br>
                <p style="color:white">BAPEDA Kabupaten Kudus<br>
                LPSE Kabupaten Kudus<br>
                Badan Pelayanan Perijinan Terpadu<br>
                DPRD Kabupaten Kudus</p>
        </div>
        <div class="col-md-4" style="text-align:center">
            <h4 style="color:white">LINK GO GREEN ACT</h4><br>
            <p style="color:white">
                Greenpeace Indonesia<br>
                Go Green Initiative<br>
                Go Green Expo<br>
                Green Choices
            </p>
        </div>
        <div class="col-md-4" style="text-align:center">
            <h4 style="color:white">KUNJUNGI KAMI</h4><br>
            <p style="color:white">
                Facebook<br>
                Twitter<br>
                Google Plus<br>
                BBM Channels
            </p>
        </div>
    </div>
    <div class="row" style="padding:10px; background-color:#00796B">
        <p style="text-align:center"><b>RTH Kudus &copy; 2015</b></p>
    </div>

    <script src="{{ URL::asset('js/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/lib/angular.min.js') }}"></script> 
    <script src="{{ URL::asset('js/angular-file-upload.min.js') }}"></script> 
    <script src="{{ URL::asset('js/page/userSubmit.js') }}"></script> 
    <script src="{{ URL::asset('js/page/data_post.js') }}"></script> 
    <script type="text/javascript">
        $('#kecamatan').change(function(){
            var id_kecamatan = $(this).val();
            console.log(id_kecamatan);
        });

        function desa(id){
            $.ajax(function(){
                url:"http://localhost:8000/get_desa/"+id,
                success:function(data){

                }
            });
        }
    </script>
  </body>
</html>
