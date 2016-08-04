<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Easy Trip</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php 

                        echo "<li>";
                        echo "<a href=\"login.php\">Home</a>";
                        echo "</li>";



                    ?> 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/airline.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Easy Trip</h1>
                        <hr class="small">
                        <span class="subheading">Taipei to Australia Budget airline</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php

require('./tools/pageCtrl.php');
$pageObj = new pageCtrl;

?>
<head>
	<link rel="stylesheet" href="icon.css">
</head>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
            <form action="sendEmail.php" method="post">
                   <table>
						<tr>
                            <td>
                               <h3>User Name：</h3>
                            </td>
                            <td>
                                <input type="text" name="username"/>
                            </td>
						</tr>
					    <tr>
						    <td>
							    <h3>Password：</h3>
						    </td>
						    <td>
							    <input type="password" name="userpass"/>
						    </td>
					    </tr>
					    <tr>
						    <td><h3>E-mail：</h3></td>
						    <td><input type="text" name="email"/></td>
					    </tr>					
				    </table>  
				    <?php 
				    	$pageObj -> checkImage("checknum");
				    ?>
				    
				    <button class="btn" type="submit">send</button>
				</form>
			</div>
		</div>
	</div>

				