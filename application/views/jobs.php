<?php include 'partials/header.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main_style.css"> 


<div class="container">
<h2> JOBS</h2>
<hr>

<?php echo validation_errors(); ?>
<?php echo form_open('c_Jobs/Jobs_Adding') ?>

<div class="form-horizontal">
 <?php 

?>

  <div class="">
  <div class="form-group">
    <label >Job Name</label>
    <input type="text" class="form-control" id="job_name" placeholder="Job Name" name="job_name">
  
    <label for="inputAddress2">Job Description</label>
    <input type="text" class="form-control" id="job_description" placeholder="Job Description" name="job_description">
  </div>
    <div class="form-group">
      <label for="inputDate"> QTY</label>
      <input type="text" class="form-control" id="qty" name="qty">

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
