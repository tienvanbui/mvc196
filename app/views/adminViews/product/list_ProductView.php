<div class="container">
<h1 class="text-center my-4">PRODUCTS LIST</h1>
<div class="row">
<table  class="table table-hover">
  <thead class="thead-dark" >
    <tr>
      <th>#</th>
      <th>BCode</th>
      <th>Name</th>
      <th>Code</th>
      <th >Img</th>
      <th >Price</th>
      <th>SPrice</th>
      <th >Number</th>
      <th>Type</th>
      <th>Status</th>
      <th>Content</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0; 
    foreach($list_Product as $key =>$value){
      $i++;
    ?>
    <tr>
      <td><?= $i;?></td>
      <td><?= $value['tenhieusp']; ?></td>
      <td><?= $value['tensp']; ?></td>
      <td><?= $value['masp']; ?></td>
      <td><img src="<?php echo IMGS_URL.$value['hinhanh'];?>" alt="hinhanh<?=$value['hinhanh']?>" style="width:100%;"></td>
      <td><?= number_format($value['giadexuat']); ?></td>
      <td><?= number_format($value['giagiam']); ?></td>
      <td><?= $value['soluong']; ?></td>
      <td><?= $value['tenloaisp']; ?></td>
      <td><?= $value['tinhtrang']; ?></td>
      <td><?= $value['noidung']; ?></td>
      <td><a href="<?= BASE_URL."product/selectProductById/".$value['idsanpham']?>" class="btn btn-primary btn-block ">Update</a><a href="<?= BASE_URL."product/delete_Product/".$value['idsanpham']?>" class="btn btn-danger btn-block">Delete</a></td>

    </tr>
    <?php }?>
  </tbody>
</table></div>
</div>