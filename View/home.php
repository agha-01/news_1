

  <div class="max home">

   <!-- Feature Carousel Section -->
<section id="feature_news_section" class="feature_news_section section_wrapper ff">


	<div class="container">   
		
	    <div class="row">
	    	<div class="col-md-7">
	    		<div class="reklam_left hidden-sm hidden-xs">
		   		<img src="assets/img/reklam.gif">
		   				</div>
	    		  <div class="slider_box" width="600px;">
					    <!-- slide & description -->
					    <div class="silder_con">
					      <div class="silder_panel">
					        <a href="#" class="silder_panel_item">
					          <img src="https://picsum.photos/1100/500?image=777">
					        </a>
					        <a href="#" target="_blank" class="silder_intro">
					          <div class="silder_intro_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto error, voluptatum expedita, ipsum tenetur doloremque
					            doloribus rem, dolores ut molestias illum ea voluptate ex maxime. Amet repudiandae libero, error delectus?</div>
					        </a>
					      </div>
					      <div class="silder_panel">
					        <a href="#" class="silder_panel_item">
					          <img src="https://picsum.photos/1100/500?image=776">
					        </a>
					        <a href="#" target="_blank" class="silder_intro">
					          <div class="silder_intro_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quia laudantium temporibus odit, modi similique
					            possimus, iusto enim corporis quaerat dolor debitis, doloribus. Quibusdam illum, ipsam earum consectetur minus,
					            iure!
					          </div>
					        </a>
					      </div>
					      <div class="silder_panel">
					        <a href="#" class="silder_panel_item">
					          <img src="https://picsum.photos/1100/500?image=775">
					        </a>
					        <a href="#" target="_blank" class="silder_intro">
					          <div class="silder_intro_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque asperiores est doloremque inventore, provident
					            adipisci dolore consequuntur obcaecati, tempore libero necessitatibus facere totam? Quidem porro sequi, illo
					            labore et cum.</div>
					        </a>
					      </div>
					    </div>
					    <!-- contorl nav (created by JS)-->
					    <div class="silder_nav_mask"></div>
					    <div class="silder_nav"></div>
					</div>
	    	</div><!--col-md-7-->
	    	
	    	<div class="col-md-5">
	    		<div class="banner">
	    			<div class="row">
	    				<div class="col-md-12">
	    					
	    					<div class="r_b hidden-xs hidden-sm">
	    						<table id="calendar-demo" class="calendar"></table>
	    					</div>
	    					<div class="small hidden-xs hidden-sm">
	    							<div class="wrapper"> 
									  <div id="banner_wrap">
									    <div class="banner_content"> 
									    	<a id="banner0" class="banner">
									    		<img src="assets/img/img-news1.jpg">
									    	</a> 
									    	<a id="banner1" class="banner" href="javascript:;">
									    		<img src="assets/img/img-news___.jpg">
									    	</a> 
									    	<a id="banner2" class="banner" href="javascript:;">
									    		<img src="assets/img/img-news.jpg">
									    	</a> 
									    	<a id="banner3" class="banner" href="javascript:;">
									    		<img src="assets/img/img-single.jpg">
									    	</a> 
									    	<a id="banner4" class="banner" href="javascript:;">
									    		<img src="assets/img/video-thumb.jpg">
									    	</a> 
									    	<a id="banner5" class="banner" href="javascript:;">
									    		<img src="assets/img/video3.jpg">
									    	</a> 
									    	<a id="banner6" class="banner" href="javascript:;">
									    		<img src="assets/img/img_feature_news.jpg">
									    	</a> 
									    </div>
									    <div class="banner_nav">
									      <ul class="nav">
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									        <li class="navLi"></li>
									      </ul>
									    </div>
									  </div>
									  
									</div>
	    					</div>
	    					<div class="reklam_right hidden-xs hidden-sm">
		   							<img src="assets/img/reklam.gif">
		   						</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div><!--col-md-5-->



	    </div><!--row-->
	</div><!--container-->   	
</section><!--feature_news_section-->

    <!-- Feature Category Section & sidebar -->
<section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container">   
		<div class="row">





		   	<div class="col-md-9">
		   		<!-- olke start -->
		   		<div class="category_layout">
		   			<!-- olke start -->
			   		<div class="item_caregory red">

			   			<h2><a href="#">Olke</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('olke');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
										<div class="media-body">
											<h3 class="media-heading"><?php echo $wrow["name"]; ?>
											</h3>

											<div id="message"><?php echo $wrow["text"]; ?></div>
											<span id="result"></span>

										</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
					<!-- olke end -->




					<!-- siyaset start -->
		   		<div class="category_layout">
			   		<div class="item_caregory red">

			   			<h2><a href="#">Siyaset</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('siyaset');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
													<div class="media-body">
														<h3 class="media-heading"><?php echo $wrow["name"]; ?>
														</h3>

														<p><?php echo $wrow["text"]; ?></p>

													</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
		   		<!-- siyaset end -->



		   		
		   		<!-- sou biznes start -->
		   		<div class="category_layout">
			   		<div class="item_caregory red">

			   			<h2><a href="#">Sou biznes</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('sou_biznes');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
													<div class="media-body">
														<h3 class="media-heading"><?php echo $wrow["name"]; ?>
														</h3>

														<p><?php echo $wrow["text"]; ?></p>

													</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
		   		<!-- sou biznes end -->



		   		
		   		<!-- kriminal start -->
		   		<div class="category_layout">
			   		<div class="item_caregory red">

			   			<h2><a href="#">Kriminal</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('kriminal');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
													<div class="media-body">
														<h3 class="media-heading"><?php echo $wrow["name"]; ?>
														</h3>

														<p><?php echo $wrow["text"]; ?></p>

													</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
		   		<!-- kriminal end -->



		   		

		   		<!-- idman start -->
		   		<div class="category_layout">
			   		<div class="item_caregory red">

			   			<h2><a href="#">Idman</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('idman');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
													<div class="media-body">
														<h3 class="media-heading"><?php echo $wrow["name"]; ?>
														</h3>

														<p><?php echo $wrow["text"]; ?></p>

													</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
		   		<!-- idman end -->



		   		
		   		<!-- maraqli start -->
		   		<div class="category_layout">
			   		<div class="item_caregory red">

			   			<h2><a href="#">maraqli</a></h2></div>
						<div class="row">
								<div class="media_wrapper">
								<?php 
							$sql=Controller::$db->newsSelect('maraqli');
							while ($wrow=mysqli_fetch_assoc($sql)) {
								 ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="single" target="_blank">
											<div class="media-left">
											<img class="media-object" src="<?php echo $wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
													<div class="media-body">
														<h3 class="media-heading"><?php echo $wrow["name"]; ?>
														</h3>

														<p><?php echo $wrow["text"]; ?></p>

													</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
						   		<?php } ?>

								</div>
				   			
				   		
				   		</div><!--row-->
				</div><!--category_layout-->
		   		<!-- maraqli end -->
		   		
		   		
		   	</div><!--col-md-9-->

		   	<div class="col-md-3">
		   		<div class="lent">
		   			<div class="lent_item">
		   				<h3 class="lent_a">Xeber lenti</h3>
		   			</div>
		   			<!-- xeber right -->
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   			<div class="news_lent">
		   				<div class="row">
		   					<div class="col-md-2">
		   						<p class="hours">15:30</p>		   						
		   					</div>
		   					<div class="col-md-10">
		   						<p class="news_all">Xeberin basligi</p>
		   						
		   					</div>
		   				</div>
		   			</div>
		   		
		   			<!-- xeber end -->
		   			<div class="btn_">
		   				<button type="button" class="btn_h"><a href="#" style="color: white !important;">Hamsin goster</a></button>
		   			</div>
		   		</div>		
               
			</div>
		</div>	   	
</section><!--feature_category_section-->

</div>

<script>
	var message,result,Charcter=10;
	message=document.getElementById("message");
	result=document.querySelector("#result");
	message.onkeydown=charcterControl;
	message.onkeyup=charcterControl;
	function charcterControl(){
		var messagelength=this.value.length;
		if (Charcter>=messagelength) {
			var lastlength=Charcter-messagelength;
			result.innerHTML=lastlength+" Karakter kaldi";

		}else{
			this.value=this.value.substr(0,Charcter);
		}
	}


</script>
