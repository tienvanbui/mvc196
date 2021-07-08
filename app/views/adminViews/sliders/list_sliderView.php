
<div class="container">
<h1 class="text-center my-4">SLIDERS LIST</h1>
<table  class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th >#</th>
      <th>SliderImg</th>
      <th>Manage</th>
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
      <td ><img src="<?php echo IMGS_URL.$value['hinhanh'];?>" alt="hinhanh<?=$value['hinhanh']?>" style="width:40rem" ></td>
      <td><a href="<?= BASE_URL."admin_slider/selectNewsById/".$value['id']?>" class="btn btn-primary btn-block ">Update</a><a href="<?= BASE_URL."admin_slider/delete_Slider/".$value['id']?>" class="btn btn-danger btn-block">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>