<div class="main">
  <div class="content">
    <div class="content_top">
      <div class="cartoption">
        <div class="cartpage">
          <h2 style="width: 100%;">Chi tiết đơn hàng</h2>
          <?php if (session::get('message_success') != false) { ?>
            <div style="font-size: 20px;color:green;" id="message_sucess"><?= session::get('message_success') ?></div>
          <?php session::remove('message_success');
          } else { ?>
            <div style="font-size: 20px;color:red;" id="message_fail"><?= session::get('message_fail') ?></div>
          <?php session::remove('message_fail');
          } ?>
          <table class="tblone" style="width: 100%;">
            <thead>
              <th width="10%" style="font-weight: bold">Mã đơn hàng</th>
              <th width="10%" style="font-weight: bold">Tổng tiền</th>
              <th width="20%" style="font-weight: bold">Phương thức thanh toán</th>
              <th width="10%" style="font-weight: bold">Ngày đặt</th>
              <th width="10%" style="font-weight: bold">Trạng thái</th>
            </thead>
            <tbody>
              <tr>
                <?php foreach($newOrderList  as  $index => $order){ ?>
                  <td><?= $index + 1 ?></td> 
                  <td >
                      <p><?= number_format($order['total']).'VND'  ?></p>
                  </td>
                  <td>
                      <p><?= $order['name']?></p>
                  </td>
                  <td><?= date('d/m/Y', strtotime($order['created_date'])) ?></td>
                  <td>
                    <?php if ($order['status'] == 0) { ?>
                      <p style="font-size: 18px;color:blueviolet;font-weight:800;">Chờ</p>
                    <?php } else if ($order['status'] == 1) { ?>
                      <form action="<?= BASE_URL . 'order/updateOrderStatusInUser/' . $order['id'] ?>" method="POST" style="display: flex;">
                        <input type="hidden" name="status" value="2">
                        <button style="padding: 5px 30px;margin-left:30px;background-color:brown;font-size:18px;">Xác nhận</button>
                      </form>
                    <?php } else if ($order['status'] == 2) { ?>
                      <p style="font-size: 18px;color:yellowgreen">Đã nhận</p>
                    <?php } ?>
                  </td>

              </tr>
              <?php } ?>
            </tbody>
          </table>
         
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>