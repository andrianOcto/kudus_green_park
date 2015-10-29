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
    </script>
  </body>
</html>