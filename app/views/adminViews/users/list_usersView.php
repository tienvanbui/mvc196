
<div class="container">
<h1 class="text-center my-4">USERS LIST</h1>
<table  class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th >#</th>
      <th>UserName</th>
      <th >Email</th>
      <th >Adress</th>
      <th >PhoneNumber</th>
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
      <td><?= $value['username']?></td>
      <td><?= $value['email']?></td>
      <td><?= $value['address']?></td>
      <td><?= $value['phone_number']?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>