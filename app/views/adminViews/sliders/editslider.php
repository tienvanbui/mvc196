<div class="container">
<h1 class="text-center mt-3">Update News</h1>
<?php foreach ($list_NewsById as $key => $value) { ?>
<form method ="post" action="<?= BASE_URL."admin_slider/update_SliderById/".$value['id']?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="hinhanh">Image:</label>
    <input type="file" class="form-control" id="hinhanh" name="hinhanh">
    <p><img src="<?= BASE_URL."public/imgs/".$value['hinhanh']?>"></p>
  </div>

  <button type="submit" class="btn btn-dark btn-block mb-3">Update</button>
</form>
<?php }?>
</div>
