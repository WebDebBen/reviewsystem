<?php
  function active_url($item ){
    $uri = uri_string();
    if (strpos($uri, $item ) > -1 ){
      echo "active";
    }else{
      echo "";
    }
    /*$uri_arr = explode("/", $uri );
    $uri_item = $uri_arr[count($uri_arr) - 1];
    if ($uri_item == $item ){
      echo "active";
    }else{
      echo "";
    }*/
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Admin Page</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/material-dashboard.css?v=2.1.0')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/js/plugins/toastr.css')?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Budibase
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php active_url('dashboard') ?>">
            <a class="nav-link" href="/admin/trade">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php active_url('category') ?>">
            <a class="nav-link" href="/admin/category">
              <i class="material-icons">category</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item <?php active_url('trade') ?>">
            <a class="nav-link" href="/admin/trade">
              <i class="material-icons">thumb_up</i>
              <p>Trading</p>
            </a>
          </li>
          <li class="nav-item <?php active_url('reviews') ?>">
            <a class="nav-link" href="/admin/trade">
              <i class="material-icons">reviews</i>
              <p>Reviews</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">