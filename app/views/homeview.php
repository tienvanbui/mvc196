</div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
	      <div class="section group">
		  		<?php foreach ($homeProduct_data as $key => $data) {?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?=BASE_URL."public/imgs/".$data['hinhanh']?>"><img src="<?=BASE_URL."public/imgs/".$data['hinhanh']?>" alt="<?=BASE_URL."public/imgs/".$data['hinhanh']?>"></a>
					 <h2><?=$data['tensp']?></h2>
					 <p><?=$data['noidung']?></p>
					 <p><span class="strike"><?=number_format($data['giadexuat'])?></span><span class="price"><?=number_format($data['giagiam'])?></span></p>
					  <div class="button"><span><img src="<?=BASE_URL."public/imgs/cart.jpg"?>"/><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
				     <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
				</div>
				<?php }?>
			</div>
    </div>
 </div>
</div>