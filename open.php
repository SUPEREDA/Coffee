<?php
include('connect.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>聯繫我們</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function submit() {
            alert("完成寄出！");
        }

    </script>

</head>

<body>

    <div class="brand"><img src="coffee.png" alt="Mountain View" style="width:100px;height:100px;text-align:center">No.15 Cafe </div>
   
    <div class="address-bar">No.15 Company</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><strong>店內飲品</strong></a>
                    </li>
                    <li>
                        <a href="blog.html"><strong>咖啡的小孩</strong></a>
                    </li>
                    <li>
                        <a href="booking.html"><strong>員工介紹</strong></a>
                    </li>
                    <li>
                        <a href="contact.html"><strong>聯繫我們</strong></a>
                    </li>
                    
                    <li>
                        <a href="ADD.html"><strong>還不是會員嗎?</strong></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
     
       

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   
                        <div class="row">
                         <form  method="post" action="connect.php"> 
                            
                               
                                
                        帳號：<input type="text" name="id" /> <br>
                        密碼：<input type="password" name="pw" /> <br>
                        <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
                            </form>
                           
                            
                        </div>
                </div>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- /.container -->



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <p>Copyright &copy; No.15 Cafe </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
