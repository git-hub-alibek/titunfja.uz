<?php
	$data['images']=$images;
    $this->load->view('header',$data);
    ?>
 
  
			
	
    
	
	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					JAŃALÍQLAR
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php foreach($news as $i): ?>
                    <div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
					
						<div class="block2">	
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
							<img src="/uploads/<?php echo $i['img'];?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									

									<div class="block2-btn-addcart w-size1 trans-0-4">
								
										<!-- Button --> 
										<a class="block2-name dis-block s-text12 p-b-5" href="/news/show/<?php echo $i['id'];?>"><?php echo $i['title'];?>
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											SU'WRETTI TOLÍQ ASHÍW
										</button>
								</a>
										
										
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								
								<a class="block2-name dis-block s-text12 p-b-5" href="/news/show/<?php echo $i['id'];?>"><?php echo $i['title'];?>
								
								</a>
								
							</div>
						</div>
					</div>
                    <?php endforeach; ?>
				</div>
			</div>

		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
			<?php foreach($seminar as $i):?>
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="/uploads/<?php echo $i['img'];?>" alt="IMG-BANNER">
	
						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								
							</span>

							<h3 class="l-text1 fs-35-sm">
								
							</h3>

							<a href="#" class="s-text4 hov2 p-t-20 ">
								
							</a>
						</div>
					</div>
				</div>
                <?php endforeach;?>
				
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h4 class="m-text5 t-center">
					Filialımız Jasları tárepinen islenip atırǵan islenbeler
				</h4>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<?php foreach($islenbeler as $i):?>
					<div class="block3 block3-img dis-block hov-img-zoom">
						
						<img src="/uploads/<?php echo $i['img'];?>" alt="IMG-blog">
						

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a class="m-text11" href="/news/show/<?php echo $i['id'];?>"><?php echo $i['text'];?>   </a>
							</h4>
						<span class="s-text6">on</span> <span class="s-text3"> <?php echo $i['data'];?> </span>

							
						</div>
					</div>
					<?php endforeach; ?>
				</div>

				

				
			</div>
		</div>
		
	</section>

	<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			
			 <h3 class="m-text5 t-center">	Dógerekler </h3> 
			
		</div>

		<div class="flex-w">
			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
			<?php foreach($dogerekler as $i):?>
			<img src="/uploads/<?php echo $i['img'];?>" alt="IMG-blog">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p href="/news/show/<?php echo $i['id'];?>"><?php echo $i['text'];?> class="s-text10 m-b-15 h-size1 of-hidden">
						
						</p>
				</div>
				</a>
				
				<?php endforeach; ?>
			</div>
			</div>
			
			
			

			
		</div>
	</section>
	<?php
    $this->load->view('footer'); //ozgeris kirittim
	?>
	