<div class="container">
  <h1 class="text-center">ADD SLIDER</h1>
  <form action="<?= BASE_URL."admin_slider/insertSlider" ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="hinhanh">Image:</label>
    <input type="file" class="form-control" name='hinhanh'id="hinhanh">
  </div>
  <button type="submit" class="btn btn-dark btn-block">Add</button>
</form>
</div>