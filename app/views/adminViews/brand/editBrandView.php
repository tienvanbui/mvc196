<div class="container">
<h1 class="text-center mt-3">Update News</h1>
<?php foreach ($list_Brands as $key => $value) { ?>
<form method ="post" action="<?= BASE_URL."brands/update_BrandsById/".$value['idhieusp']?>">
<div class="form-group">
    <label for="tenhieusp">Brand Name:</label>
    <input type="text" value="<?php echo $value['tenhieusp']; ?>" class="form-control" name='tenhieusp'id="tenhieusp">
</div>
  <div class="form-group">
    <label for="tinhtrang">Status:</label>
    <input type="text" class="form-control" value="<?php echo $value['tinhtrang']; ?>" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block mb-3">Update</button>
</form>
<?php }?>
</div>
