<div class="container">
  <h1 class="text-center mt-4">ADD PRODUCTS</h1>
  <form action="<?= BASE_URL."product/insertProducts" ?>" method="post" enctype="multipart/form-data">
 
  <div class="form-group">
    <label for="pwd">ProductBrand Code:</label>
    <select name="idhieusp" class="form-control">
    <?php foreach ($brandProcess as $key => $value) {
    ?>
    <option value="<?=$value['idhieusp'];?>"><?=$value['tenhieusp']?></option>
    <?php }?>
    </select>
  </div>

  <div class="form-group">
    <label for="tensp">Product Name:</label>
    <input type="text" class="form-control" name='tensp'id="tensp">
  </div>
  <div class="form-group">
    <label for="masp">Product Code:</label>
    <input type="text" class="form-control" name='masp'id="masp">
  </div>
  <div class="form-group">
    <label for="hinhanh">Product Image:</label>
    <input type="file" class="form-control" name='hinhanh'id="hinhanh">
  </div>
  <div class="form-group">
    <label for="giadexuat">Price:</label>
    <input type="number" class="form-control" id="giadexuat" name="giadexuat">
  </div>
  <div class="form-group">
    <label for="giagiam">Sale Price:</label>
    <input type="number" class="form-control" id="giagiam" name="giagiam">
  </div>
  <div class="form-group">
    <label for="soluong">Number:</label>
    <input type="number" class="form-control" id="soluong" name="soluong">
  </div>
  <div class="form-group">
    <label for="loaisp">Product Type:</label>
    <select name="idloaisp" id="idloaisp" class="form-control">
    <?php foreach ($caretoryProduct as $key => $value) {
    ?>
    <option value="<?=$value['idloaisp'];?>"><?=$value['tenloaisp']?></option>
    <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="tinhtrang">Product Status:</label>
    <input type="text" class="form-control" id="tinhtrang" name="tinhtrang">
  </div>
  <div class="form-group">
    <label for="noidung">Product Content:</label>
    <textarea name="noidung" id="noidung" class="form-control" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-dark btn-block mb-4">Add</button>
</form>
</div>