<div class="container">
<h1 class="text-center mt-3">Update PRODUCTS</h1>
<?php foreach ($list_ProductById as $key => $value){?>
<form action="<?= BASE_URL."product/update_ProductById/".$value['idsanpham'] ?>" method="post" enctype="multipart/form-data">
 
 <div class="form-group">
   <label for="pwd">ProductBrand Code:</label>
   <select name="idhieusp" class="form-control">
   <?php foreach ($brandProcess as $key => $brandProcessvalue) {
   ?>
   <option value="<?=$brandProcessvalue['idhieusp'];?>"><?=$brandProcessvalue['tenhieusp']?></option>
   <?php }?>
   </select>
 </div>

 <div class="form-group">
   <label for="tensp">Product Name:</label>
   <input type="text" class="form-control" name='tensp'id="tensp" value="<?= $value['tensp']?>">
 </div>
 <div class="form-group">
   <label for="masp">Product Code:</label>
   <input type="text" class="form-control" name='masp'id="masp" value="<?= $value['masp']?>">
 </div>
 <div class="form-group">
   <label for="hinhanh">Product Image:</label>
   <input type="file" class="form-control" name='hinhanh'id="hinhanh">
   <p><img src="<?= BASE_URL."public/imgs/".$value['hinhanh'];?>" alt=""></p>
 </div>
 <div class="form-group">
   <label for="giadexuat">Price:</label>
   <input type="number" class="form-control" id="giadexuat" name="giadexuat" value="<?= $value['giadexuat'] ?>">
 </div>
 <div class="form-group">
   <label for="giagiam">Sale Price:</label>
   <input type="number" class="form-control" id="giagiam" name="giagiam" value="<?= $value['giagiam'] ?>">
 </div>
 <div class="form-group">
   <label for="soluong">Number:</label>
   <input type="number" class="form-control" id="soluong" name="soluong" value="<?= $value['soluong'] ?>">
 </div>
 <div class="form-group">
   <label for="loaisp">Product Type:</label>
   <select name="idloaisp" id="idloaisp" class="form-control">
   <?php foreach ($caretoryProduct as $key => $caretoryProductvalue) {
   ?>
   <option value="<?=$caretoryProductvalue['idloaisp'];?>"><?=$caretoryProductvalue['tenloaisp']?></option>
   <?php }?>
   </select>
 </div>
 <div class="form-group">
   <label for="tinhtrang">Product Status:</label>
   <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" value="<?= $value['tinhtrang'] ?>">
 </div>
 <div class="form-group">
   <label for="noidung">Product Content:</label>
   <textarea name="noidung" id="noidung" class="form-control" rows="10" ><?=$value['noidung'];?></textarea>
 </div>
 <button type="submit" class="btn btn-dark btn-block mb-4">Update</button>
</form>
<?php }?>
</div>
