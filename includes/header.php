<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Travelx</title>
		<link rel="stylesheet" href="css/globalheaderstyle.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
                        <a href="http://localhost:8012/index.php"><img src="images/tourism3.png" alt="logo"></a>
					</div><!-- logo-->
					<div id="top-nav">
						<ul>
                           <?php
                            session_start();                    
                            if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                            echo "<li><i>Welcome ".$_SESSION["name"]."</i></li>
                            <li><a href='http://localhost:8012/logout.php'>Logout</a></li>";
                            } else {
                        echo "<li><a href='http://localhost:8012/login.php'>Login</a></li>
                            <li><a href='http://localhost:8012/registerform.php'>Register</a></li>";
                            } 
                            ?>
						</ul>
					</div> <!-- top-nav-->
					<div class="clr"></div><!-- clr-->
				</div> <!-- header inner-->
			</header>
			<div class="feature">
				<div class="feature-inner">
                    
				     <ul>
                         <li><h1><a href="http://localhost:8012/index.php"><i class="fa fa-home" aria-hidden="true" style="position:relative;
						 top:-5px"></i></a></h1></li><!-- i class for home-->
                        
                        <li style="float:right;padding: 14px 16px;"><a href="javascript:history.go(-1)">Back </a></li>
                        <li style="float:right;padding: 14px 16px;"><a href="http://localhost:8012/contact.php">Contact</a></li>
                        <li style="float:right;padding: 14px 16px;"><a href="https://goo.gl/forms/yKB8Ct9KfvOTSARm2">Feedback</a></li>
                        <li style="float:right;padding: 14px 16px;"><a href="http://localhost:8012/about.php">About</a></li>
                        
                    </ul><!-- nav-->
				</div><!-- feature inner-->
			</div><!-- feature-->
			
		
	