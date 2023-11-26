<?php
	    $sql_lh = "SELECT * FROM tbl_lienhe";
		$query_lh = mysqli_query($conn,$sql_lh);
?>
<div id="contact-page" class="container">
    	<div class="bg">
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-9">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thong tin lien he</h2>
	    				<address>
	    				<?php
						while($row_lh = mysqli_fetch_array($query_lh)){
						?>	
						<p>
								<?php echo $row_lh['thongtinlienhe']?>
						</p>
							<?php
						}
						?>	
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Lien ket mang xa hoi</h2>
							<ul>
								<li>
									<a href="#"><i class="fab fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-instagram-square"></i></i></a>
								</li>
								<li>
									<a href="#"><i class="fas fa-envelope"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->