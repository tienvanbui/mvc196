<?php foreach ($New_array_data as $key => $value) { ?>
<div class="wapperNew">
    <div class="imgNew">
        <img src="<?= BASE_URL."public/imgs/".$value['hinhanh'] ?>" alt="<?=$value['hinhanh']?>">
    </div>
    <div class="content">
        <h2><?=$value['tentintuc'];?></h2>
        <p><?=$value['noidung']?></p>
        <button type="submit"> <a href="#">ReadMore</a></button>
    </div>
    
</div>
<?php }?>
<div class="clear"></div>