
<div class="container">
<h1 class="text-center my-4">BRANDS LIST</h1>
<table  class="table table-hover" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">BrandName</th>
      <th scope="col">BrandStatus</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0; 
    foreach($list_Brands as $key =>$value){
      $i++;
    ?>
    <tr>
      <td><?= $i;?></td>
      <td><?= $value['tenhieusp']; ?></td>
      <td><?= $value['tinhtrang']; ?></td>
      <td><a href="<?= BASE_URL."brands/selectBrandsById/".$value['idhieusp']?>" class="btn btn-primary">Update</a><a href="<?= BASE_URL."brands/delete_Brands/".$value['idhieusp']?>" class="btn btn-danger ml-2 ">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>