<div class="header_bottom">
		<div class="header_bottom_left">			
			<div class="section group">
			<?php foreach ($TopProductBrandHome_data as $key => $value) { ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="<?=BASE_URL."public/imgs/".$value['hinhanh']?>"> <img src="<?=BASE_URL."public/imgs/".$value['hinhanh']?>" alt="<?=$value['hinhanh']?>" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2><?= $value['tenhieusp']?></h2>
						<p><?= $value['noidung']?></p>
						<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				   </div>
			   </div>
			   <?php } ?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php foreach ($Slider_Img_Data_get as $key => $value) { ?>
						<li><img src="<?= BASE_URL?>public/imgs/<?=$value['hinhanh']?>" alt="<?=$value['hinhanh']?>"/></li>
						<?php }?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>