<div class="container">
  <h1 class="text-center mt-4">ADD CARETORY PRODUCTS</h1>
  <form action="<?= BASE_URL."caretoryProduct/insertcaretoryProduct" ?>" method="post">
  <div class="form-group">
    <label for="tenloaisp">CaretoryProduct Name:</label>
    <input type="text" class="form-control" name='tenloaisp'id="tenloaisp">
  </div>
  <div class="form-group">
    <label for="tinhtrang">CaretoryProduct Status:</label>
    <input type="text" class="form-control" id="tinhtrang" name="tinhtrang">
  </div>
  <button type="submit" class="btn btn-dark btn-block">Add</button>
</form>
</div>