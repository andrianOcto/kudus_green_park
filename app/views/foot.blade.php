</div>
        </div>
    </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('js/jquery.elevatezoom.js') }}"></script>
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
    
        function startTime() {
            var today=new Date(),
                curr_hour=today.getHours(),
                curr_min=today.getMinutes(),
                curr_sec=today.getSeconds();
                    curr_hour=checkTime(curr_hour);
                    curr_min=checkTime(curr_min);
                    curr_sec=checkTime(curr_sec);
            document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
        }
        
        function checkTime(i) {
            if (i<10) {
                i="0" + i;
            }
            return i;
        }
        
        setInterval(startTime, 500);
    </script>
  </body>
</html>