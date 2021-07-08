
<div class="container">
<h1 class="text-center my-4">NEWS LIST</h1>
<table  class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th >#</th>
      <th >NewsName</th>
      <th >NewsCode</th>
      <th >NewsImg</th>
      <th >NewsContent</th>
      <th >NewsStatus</th>
      <th >Mangage</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0; 
    foreach($list_News as $key =>$value){
      $i++;
    ?>
    <tr>
      <td><?= $i;?></td>
      <td><?= $value['tentintuc']; ?></td>
      <td><?= $value['matin']; ?></td>
      <td ><img src="<?php echo IMGS_URL.$value['hinhanh'];?>" alt="hinhanh<?=$value['hinhanh']?>" style="width:100%" ></td>
      <td><?= $value['noidung']; ?></td>
      <td><?= $value['tinhtrang']; ?></td>
      <td><a href="<?= BASE_URL."news/selectNewsById/".$value['idtintuc']?>" class="btn btn-primary btn-block ">Update</a><a href="<?= BASE_URL."news/delete_News/".$value['idtintuc']?>" class="btn btn-danger btn-block">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>