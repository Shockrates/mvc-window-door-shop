<div class='container'>
    <button type="button" onClick="location.href='<?php echo ROOT_URL; ?>/order/createOrder'"class="btn btn-warning">ΝΕΑ ΠΑΡΑΓΓΕΛΙΑ</button>
    <br>
    <br>
</div>
 <div class='container'>
  <table border='1' class='table'>
    <tr style='background: whitesmoke;'>
      <th>Κωδικός</th>
      <th>Πελάτης</th>
      <th>Δημιουργος</th>
      <th>Σειρά</th>
      <th>Λειτουργία</th>
    </tr>

    <?php 
    

  
    foreach ($data['order'] as $order) {
       $id = $order['order_id'];
       $customer = $order['customer'];
       $series = $order['series'];
       $created_by = $order['created_by'];

    ?>
    <tr>
       <td align='center'><?= $id ?></td>
       <td><?= $customer ?></td>
       <td><?= $created_by ?></td>
       <td><?= $series ?></td>
       <td align='center'>
            <!-- <button class='delete btn btn-danger' id='del_<?//= $id ?>'>Delete</button> -->
            <button class="load btn btn-warning" onClick="location.href='<?php echo BASE_URL; ?>order/loadOrder/<?php echo $order['order_id']; ?>'">ΦΩΡΤΩΣΗ</button>
 
       </td>
    </tr>
    <?php
    
    }
    ?>
  </table>
</div>