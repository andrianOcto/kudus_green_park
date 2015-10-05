<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo-hiddenpark.png">

    <title>Hidden Park Administrator</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/lib/angular.min.js"></script>
    <script src="js/page/data_post.js"></script>

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#5cb85c; color:white">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="color:white"><b>Hidden Park Administrator</b></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><img class="img-circle" style="width:40px; margin-top:5px; margin-left:15px" src="{{ URL::asset('files/photos/user') }}/{{ Session::get('foto') }}"></li>
            <li>
                <a href="user/{{ Session::get('iduser'); }}" style="color:black"> {{ Session::get('username'); }}
                </a>
            </li>
            <li><a href="/logout" style="color:black">logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container-fluid">
        <div class="row" style="margin-top:50px">
            <div class="col-sm-3 col-md-3">
                <center><img src="images/logo-hiddenpark.png" style="width:170px; padding-top:20px; padding-bottom:30px;"></center>
                <ul class="nav nav-pills nav-stacked" style="padding-left:20px">
                    <li style="border-right: 4px solid #428bca"><a href="/home"><p align="center" style="color:black"><b>Dashboard</b></p></a></li>
                    <li style="border-right: 4px solid #5cb85c"><a href="/park"><p align="center" style="color:black"><b>Park</b></p></a></li>
                    <li style="border-right: 4px solid #f0ad4e"><a href="/user"><p align="center" style="color:black"><b>Users</b></p></a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9" style="margin-top:20px">
                <blockquote>
                    <h1>"Every human is unique"</h1>
                    &nbsp;
                    <footer>Deny Salvana E</footer>
                </blockquote>
                &nbsp;
                <a href="/quote"><button type="button" class="btn btn-primary" style="margin-left:20px">edit quote</button></a>
                &nbsp;
                <center><div style="width:50%; margin-top:30px"><canvas id="canvas" height="300" width="800"></canvas></div></center>
                <div class="table-responsive" style="margin-right:30px; margin-top:30px">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Park</th>
                            <th class="success">Visited <span class="badge">{{ $total_visited }}</span></th>
                            <th class="info">Liked <span class="badge">{{ $total_like }}</span></th>
                        </tr>
                        @foreach($parks as $key => $value)
                        <tr>
                            <td class="success"><b>{{ $value->nama_park }}</b></td>
                            <td>{{ $value->numliked }}</td>
                            <th>{{ $value->numvisited }}</th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.js"></script>
    
    <script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data :             [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]

		}

    window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


	</script>
  </body>
</html>
