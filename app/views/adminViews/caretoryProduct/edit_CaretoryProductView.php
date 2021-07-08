<div class="container">
<h1 class="text-center mt-3">Update News</h1>
<?php foreach ($lis_caretoryProduct as $key => $value) { ?>
<form method ="post" action="<?= BASE_URL."caretoryProduct/updatecaretoryProductsById/".$value['idloaisp']?>">
<div class="form-group">
    <label for="tenloaisp">Brand Name:</label>
    <input type="text" value="<?php echo $value['tenloaisp']; ?>" class="form-control" name='tenloaisp'id="tenloaisp">
</div>
  <div class="form-group">
    <label for="tinhtrang">Status:</label>
    <input type="text" class="form-control" value="<?php echo $value['tinhtrang']; ?>" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block mb-3">Update</button>
</form>
<?php }?>
</div>
