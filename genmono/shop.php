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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">shop list</h3>
                        </div>
                        <div class="panel-body">
                            123
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">update++</h3>
                        </div>
                        <div class="panel-body">
                            123
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">面板标题 有參數1</h3>
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
        <script type="text/javascript">
            $(function() {
                console.log("hi");
            });
        </script>
    </body>
</html>