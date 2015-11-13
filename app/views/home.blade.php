@include("head")
<legend>
    <h1 style="font-weight:200">Info RTH</h1>
</legend>
<div id="clock" style="font-size:2em; font-weight:300"></div>
<div id="date" style="margin-bottom:30px">
    <p style="font-size:1.5em; font-weight:300">
        <script type='text/javascript'>
          var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var date = new Date();
          var day = date.getDate();
          var month = date.getMonth();
          var thisDay = date.getDay(),
              thisDay = myDays[thisDay];
          var yy = date.getYear();
          var year = (yy < 1000) ? yy + 1900 : yy;
          document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        </script>
    </p>
</div>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <div class="row">
            <div class="container" style="width:90%">
                <div class="col-sm-3 bg-info" style="margin:20px">
                    <h3 style="font-weight:300">Kecamatan:</h3>
                    <h1>10</h1>
                </div>
                <div class="col-sm-3 bg-warning" style="margin:20px">
                    <h3 style="font-weight:300">Desa/Kelurahan:</h3>
                    <h1>10</h1>
                </div>
                <div class="col-sm-3 bg-danger" style="margin:20px">
                    <h3 style="font-weight:300">Jenis RTH:</h3>
                    <h1>10</h1>
                </div>
                <div class="col-sm-3 bg-success" style="margin:20px">
                    <h3 style="font-weight:300">Data RTH:</h3>
                    <h1>10</h1>
                </div>
                <div class="col-sm-3 bg-danger" style="margin:20px">
                    <h3 style="font-weight:300">Event:</h3>
                    <h1>10</h1>
                </div>
                <div class="col-sm-3 bg-info" style="margin:20px">
                    <h3 style="font-weight:300">Testimoni:</h3>
                    <h1>10</h1>
                </div>
                
            </div>
        </div>
    </div>
</div>

@include("foot")