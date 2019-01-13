<?php include 'partials/header.php'; ?>




<div class="container">
<h2> ORDERS</h2>
<hr>

<?php echo validation_errors(); ?>
<?php echo form_open('Order/Order_Taking') ?>

<div class="form-horizontal">
 <?php 

?>

  <div class="">
  <div class="form-group">
    <label >Order No</label>
    <input type="text" class="form-control" id="Order_No" placeholder="Order No" name="order_no">
  
    <label for="inputAddress2">Order Name</label>
    <input type="text" class="form-control" id="Order_Name" placeholder="Order Name" name="order_name">
  </div>
    <div class="form-group">
      <label for="inputCity">Order Date</label>
      <input type="date" class="form-control" id="inputDate" name="order_date">

      <label for="inputCity">Requested Date</label>
      <input type="date" class="form-control" id="inputDate" name="requested_date">
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Create Order</button>
  </div>
    
  </div>
  



  <?php echo form_close();?>
</div>

<?php include 'partials/footer.php'; ?>	
