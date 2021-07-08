<div class="container">
<h1 class="text-center mt-3">Update News</h1>
<?php foreach ($list_NewsById as $key => $value) { ?>
<form method ="post" action="<?= BASE_URL."news/update_NewsById/".$value['idtintuc']?>" enctype="multipart/form-data">
<div class="form-group">
    <label for="tentintuc">Name New:</label>
    <input type="text" value="<?php echo $value['tentintuc']; ?>" class="form-control" name='tentintuc'id="tentintuc">
</div>
  <div class="form-group">
    <label for="matin">New Code:</label>
    <input type="text" value="<?php echo $value['matin']; ?>"class="form-control" id="matin" name="matin">
  </div>
  <div class="form-group">
    <label for="hinhanh">Image:</label>
    <input type="file" class="form-control" id="hinhanh" name="hinhanh">
    <p><img src="<?= BASE_URL."public/imgs/".$value['hinhanh']?>"></p>
  </div>
  <div class="form-group">
    <label for="noidung">Content:</label>
    <textarea name="noidung" id="noidung" rows="10" class="form-control" ><?php echo $value['noidung'];?></textarea>
  </div>
  <div class="form-group">
    <label for="tinhtrang">Status:</label>
    <input type="text" class="form-control" value="<?php echo $value['tinhtrang']; ?>" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block mb-3">Update</button>
</form>
<?php }?>
</div>
