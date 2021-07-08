<div class="main">
    <div class="content">
		<div class="content_top">
    		<div class="heading">
    		<?php foreach ($getData_byProduct_type as $key => $valueProduct_data) { ?>
    		<h3><?=$valueProduct_data['tenloaisp']
			?></h3>
			<?php break;?>
			<?php }?>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="clear"></div>
    	</div>
		
	      <div class="section group">	
		  <?php foreach ($getData_byProduct_type as $key => $valueProduct_data) { ?>	 
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?= BASE_URL?>public/imgs/<?=$valueProduct_data['hinhanh']?>"><img src="<?= BASE_URL?>public/imgs/<?=$valueProduct_data['hinhanh']?>" alt="<?=$valueProduct_data['hinhanh']?>" /></a>
					 <h2><?=$valueProduct_data['tensp']?></h2>
					 <p><?=$valueProduct_data['noidung']?></p>
					 <p><span class="strike"><?=number_format($valueProduct_data['giadexuat'])?></span><span class="price"><?=number_format($valueProduct_data['giagiam'])?></span></p>
					 <div class="button"><span><img src="<?=BASE_URL."public/imgs/cart.jpg"?>"/><a href="#" class="cart-button">Add to Cart</a></span> </div>
				     <div class="button"><span><a href="<?=BASE_URL."user_product_detail/index"?>" class="details">Details</a></span></div>
				</div>
				<?php }?>
			</div>
 <ul class="Pagination">
	  <?php 
	  for($num = 1;$num <= $number_page[0];$num++){
		
	  ?>
	  <?php if($num != $number_page[2]){ ?>
	  	<li class="page-item"><a class="page-link" href="<?= BASE_URL."product/"?>ProductType/<?=$number_page[1]?>/<?=$num?>"><?=$num?></a></li>
		<?php }
		else{ ?>
			<strong class="current-page"><?=$num?></strong>
			<?php }?>
	<?php 
	}?>
  </ul>
    </div>
 </div>