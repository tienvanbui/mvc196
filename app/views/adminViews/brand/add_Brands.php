<div class="container">
  <h1 class="text-center mt-4">ADD BRANDS</h1>
  <form action="<?= BASE_URL."brands/insertBrands" ?>" method="post">
  <div class="form-group">
    <label for="tenhieusp">Brands Name:</label>
    <input type="text" class="form-control" name='tenhieusp'id="tenhieusp">
  </div>
  <div class="form-group">
    <label for="tinhtrang">Brands Status:</label>
    <input type="text" class="form-control" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block">Add</button>
</form>
</div>