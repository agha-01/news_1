<div class="max">
	<div class="container">
		<h2 class="head">Sou-biznes Xeberleri</h2>
		<div class="news">
			<div class="row">
				<div class="col-md-9">
					<div class="blocks">
						<?php 
						$sql=Controller::$db->newsSelect('sou_biznes');
						while ($row=mysqli_fetch_assoc($sql)) {

						 ?>
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="<?php echo $row["image"]; ?>">
								<div class="img_text">
									<h2><?php echo $row["name"]; ?></h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
					<?php } ?>
						<!-- <div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div> -->
					</div>
					<!-- <div class="blocks">
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
					</div>
					<div class="blocks">
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
					</div>
					<div class="blocks">
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
						<div class="col-md-6 ">
							<a href="single" target="_blank">
								<div class="block">
								<img src="assets/img/img-category3.jpg">
								<div class="img_text">
									<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
								</div>
								</a>
								<div class="comment">
									<i class="fa fa-eye"></i>
									<span>25</span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>

								</div>
								</div>
						</div>
					</div> -->
				</div>
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



			<div class="pagination">
				<li><a href="#" aria-label="previous"><span aria-hiddin="true">&laquo;</span></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="next"><span aria-hiddin="true">&raquo;</span></a></li>
			</div>
		</div>

</div>
















</div>