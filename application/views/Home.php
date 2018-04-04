<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('C_Home') ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('C_Home/news') ?>">News </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('C_Home/About') ?>">About </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('C_Home/Contact') ?>">Contact</a>
      </li>
      
      
      
    </ul>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome</h1>
      <p class="lead">Selamat Datang Di Website ini</p>
    </div>

  <div id="container">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
  <h1>Biodata Saya dari array</h1>
    <table class="table table-hover">
    <tbody>
      <?php foreach ($biodatabuilder_array as $key){?>
      <tr>
        <td><?php echo $key['nama']?></td>
      </tr>
        <td><?php echo $key['nim']?></td>
      </tr>
      <tr>
        <td><?php echo $key['alamat']?></td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
  <h1>Biodata Saya Dari Object</h1>
    <table class="table table-hover">
    <tbody>
    <?php foreach ($biodatabuilder_object as $key) {?>
    <tr>
      <td><?php echo $key->nama ?></td>
    </tr>
    <tr>
      <td><?php echo $key->nim ?></td>
    </tr>
    <tr>
      <td><?php echo $key->alamat?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
  <h1>Biodata Saya dari query builder array</h1>
    <table class="table table-hover">
    <tbody>
      <?php foreach ($biodata_array as $key){?>
      <tr>
        <td><?php echo $key['nama']?></td>
      </tr>
        <td><?php echo $key['nim']?></td>
      </tr>
      <tr>
        <td><?php echo $key['alamat']?></td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
  <h1>Biodata Saya Dari Query Builder Object</h1>
    <table class="table table-hover">
    <tbody>
    <?php foreach ($biodata_object as $key) {?>
    <tr>
      <td><?php echo $key->nama ?></td>
    </tr>
    <tr>
      <td><?php echo $key->nim ?></td>
    </tr>
    <tr>
      <td><?php echo $key->alamat?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>