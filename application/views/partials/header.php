
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lanka Studio Management System</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HOME</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Menu<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Other</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('index.php/Home/Order'); ?>">Order</a></li>
            <li><a href="<?php echo base_url('index.php/Home/Jobs'); ?>">Job</a></li>
            <li><a href="#">TR 1</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">TR 2</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">TR 3</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report Center <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Report 1</a></li>
            <li><a href="#">Report 2</a></li>
            <li><a href="#">Report 3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Report 4</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Report 5</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/Home/Login'); ?>">LOGIN</a></li>
        <li><a href="<?php echo base_url('index.php/Home/Register'); ?>">REGISTER</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gihan Kumara <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>