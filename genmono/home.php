<!DOCTYPE html>
<html lang="en">
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <style type="text/css">
        .nav-tabs > li, .nav-pills > li {
            float:none;
            display:inline-block;
            *display:inline; /* ie7 fix */
            zoom:1; /* hasLayout ie7 trigger */
            width:18%;
        }

        .nav-tabs, .nav-pills {
            text-align:center;
        }
        
        .table td {
           text-align: center;   
        }
        </style>
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li><a href="home.php">Home</a></li>
            <li><a href="item.php">Item</a></li>
            <li><a href="dungeons.php">Dungeons</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">#</a></li>
        </ul>
        <br />
        <center>
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">面板标题</h3>
                </div>
                <div class="panel-body">
                    <img src="123.png" alt="" />
                    <br />
                    <br />
                    <div class="table-responsive">
                       <table class="table">
                          <thead>
                          </thead>
                          <tbody>
                             <tr>
                                <td>s</td>
                                <td>1</td>
                                <td>*</td>
                             </tr>
                             <tr>
                                <td>a</td>
                                <td>1</td>
                                <td>*</td>
                             </tr>
                             <tr>
                                <td>d</td>
                                <td>1</td>
                                <td>*</td>
                             </tr>
                             <tr>
                                <td>d</td>
                                <td>1</td>
                                <td>*</td>
                             </tr>
                          </tbody>
                       </table>
                    </div>
                    <br />
                    <ul class="nav nav-tabs">
                        <li style="width:20%;"><a href="#">#</a></li>
                        <li style="width:20%;"><a href="#">#</a></li>
                        <li style="width:20%;"><a href="#">#</a></li>
                        <li style="width:20%;"><a href="#">#</a></li>
                    </ul>
                    <br />
                    <img src="123.png" alt="" />
                    <br />
                    <br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">面板标题</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>s</td>
                                        </tr>
                                    </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
        <ul class="nav nav-tabs navbar-inverse">
            <li><a href="#">Info</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
        </ul>
  
        <script src="//code.jquery.com/jquery-1.11.3.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>
        <script src="//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
            
            alert("d");
            
            /*
            var onSuccess = function(location){
   console.log(
      "Lookup successful:\n\n"
      + JSON.stringify(location, undefined, 4)
  );
};
 
var onError = function(error){
  console.log(
      "Error:\n\n"
      + JSON.stringify(error, undefined, 4)
  );
};
 
geoip2.city(onSuccess, onError);*/
            
                var Modes = 5;
                
                Modes |= 2;

                function xx(){return 1;}
                console.log(Modes);
            
                console.log("hi");
            });
        </script>
    </body>
</html>