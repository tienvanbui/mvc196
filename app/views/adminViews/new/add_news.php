<div class="container">
  <h1 class="text-center">ADD NEWS</h1>
  <form action="<?= BASE_URL."news/insertNews" ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="tentintuc">Name New:</label>
    <input type="text" class="form-control" name='tentintuc'id="tentintuc">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Code:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="matin">
  </div>
  <div class="form-group">
    <label for="hinhanh">Image:</label>
    <input type="file" class="form-control" name='hinhanh'id="hinhanh">
  </div>
  <div class="form-group">
    <label for="noidung">Content:</label>
    <input type="text" class="form-control" id="noidung" name="noidung">
  </div>
  <div class="form-group">
    <label for="tinhtrang">Status:</label>
    <input type="text" class="form-control" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block">Add</button>
</form>
</div>