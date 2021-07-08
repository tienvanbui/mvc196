
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= BASE_URL."login/dashboard";?>">Hi:<?= $_SESSION['username'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=BASE_URL."product/add_Products"?>">Add Products</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=BASE_URL."product/list_Products"?>">View Products</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= BASE_URL."news/add_News";?>">Add News</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= BASE_URL ."news/list_News";?>">View News</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Orders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Add Orders</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">View Orders</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Brands
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL."brands/add_Brands"?>">Add Brands</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo BASE_URL."brands/list_Brands"?>">View Brands</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Caretory Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL."caretoryProduct/add_caretoryProduct"?>">Add Caretory Products</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo BASE_URL."caretoryProduct/list_caretoryProduct"?>">View Caretory Products</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sliders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL."admin_slider/add_Sliders"?>">Add Sliders</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo BASE_URL."admin_slider/list_Slider"?>">View Sliders</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL."admin_users/list_Users"?>">View Users</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">

    <a href="<?= BASE_URL ."login/logOut"?>" class='LogOutbtn'>Sign Out</a>
    </form>
  </div>
  </nav>
