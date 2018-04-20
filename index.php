
		<?php include('includes/header.php'); ?>
	
			<div id="content">
				<div id="content-inner">
                    <?php include 'slideshow.php';?>
					
					<nav id="sidebar">
						<div class="widget">
						<i class="fa fa-briefcase" aria-hidden="true" id="tours"></i><!-- brief case-->
						
							<?php                    
                            if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                                
                            echo "<h2>Our Tours</h2>
							<hr>
							
							<ul>
							<li><a href='http://localhost:8012/europe.php'>Europe Trips</a></li>
							<li><a href='http://localhost:8012/india.php'>India Trips</a></li>
                            </ul>";
                            } 
                          else
                            {
                        echo "<h2>Why choose us</h2>
							<hr> 
							
                            <div>1000000 + Satisfied Guest
                                300 + Expert Tour Leaders
                                Carry Zero Money on Tour
                                ISO 9001:2015 and BS OHSAS 18001:2007
                                The best way to Network and earn a Lifetime of Friendship
                                Happiness Guaranteed
                                Largest Tour Operator for Domestic and International Holidays
                                550 +Tour Options for all age groups @ Affordable Prices
                                33 Years of creating Everlasting memories
						</div>";
                            } 
                            ?>
						 </div>	
					</nav><!--sidebar for option of india or europe --> 
					
					<div class="clr"></div><!--clr -->
				</div><!--content inner -->
			</div><!-- content-->
		
			<?php include('includes/footer.php'); ?>