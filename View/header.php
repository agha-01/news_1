<?php $site_url="http://localhost/news/"; ?>

<html lang="az">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports</title>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="<?php echo $site_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo $site_url; ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Owl carousel -->
    <link href="<?php echo $site_url; ?>assets/css/owl.carousel.css" rel="stylesheet">
	 <link href="<?php echo $site_url; ?>assets/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="<?php echo $site_url; ?>assets/css/offcanvas.min.css" rel="stylesheet">

    <!--Theme CSS -->
    <link href="<?php echo $site_url; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $site_url; ?>assets/css/dcalendar.picker.css" rel="stylesheet" type="text/css">
    
        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $site_url; ?>assets/css/small_style.css">


        <script src="<?php echo $site_url; ?>assets/js/jquery.min.js"></script>

  		<link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/style.css">
  		<script src="<?php echo $site_url; ?>assets/js/slides.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body >
<div id="main-wrapper">

    <!-- Header Section -->
	<header>
	    <div class="container-fluid">
			<div class="fluid">
				     	<div class="top_ber">
							<div class="row">
					    		<div class="col-md-6">
									<div class="top_ber_left">
										<p id="hours"></p>
									</div><!--top_ber_left-->
					    		</div><!--col-md-6-->
					    		<div class="col-md-6">
					    			
					    			<div class="top_ber_right">

					    				<div class="top-menu">
					    					<ul class="nav navbar-nav">  
					    						<?php 
					    						if (@$_SESSION["email"]!=null) {


							    				echo "<span class='reng1'>".@$_SESSION["email"] ."<span>";
								                echo " ";
								                echo "<a href='exitt' class='reng2'>Cixis</a>";

						                    }
						                    else{
						                    	?>
					    					
					    						  <li><a href="login"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
						                        <li><a href="register"><i class="fa fa-users" aria-hidden="true"></i> Register</a></li>
						                
						                    <?php } ?>

						                       
				                    		</ul>
					    				</div><!--top-menu-->
					    			</div><!--top_ber_left-->
					    		</div><!--col-md-6-->
					    	</div><!--row-->
		     			</div><!--top_ber-->
		    
		     	
			     	<div class="header-section">
						<div class="row">
				    	 	<div class="col-md-6">
								<div class="logo">
								<a  href="home" title="Agha" >
									<p>News</p>
								</div><!--logo-->
				    	 	</div><!--col-md-3-->
				    	 	
				    	 	
				    	 	<div class="col-md-6">

								<div class="social_icon1">
										 		<div class="language">
					    				<a href="" class="active">Az</a>
					    				<a href="">Ru</a>
					    				<a href="">En</a>
					    			</div>
										<a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
										<!--Twitter-->
										<a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
										<!--Google +-->
										<a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a>
										<!--Linkedin-->
										<a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a> 
										<!--Pinterest-->
										<a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a>
								</div> <!--social_icon1-->
				    	 	</div><!--col-md-3-->
				    	</div> <!--row-->	
			     	</div><!--header-section-->   


	     	</div>	 	      
	 	</div><!-- /.container -->   

		<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
				<ul class="nav navbar-nav">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="home">Ana seyfe</a></li>
					<li><a class="page-scroll" href="olke">olke</a></li>
					<li><a class="page-scroll" href="siyaset">siyaset</a></li>
					<li><a class="page-scroll" href="sou_biznes">sou-biznes</a></li>
					<li><a class="page-scroll" href="kriminal">kriminal</a></li>
					<li><a class="page-scroll" href="idman">idman</a></li>
					<li><a class="page-scroll" href="maraqli">maraqli</a></li>
				</ul>
				<div class="pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input class="form-control" placeholder="Search" name="q" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</nav> 
		<!-- .navbar -->
	</header>