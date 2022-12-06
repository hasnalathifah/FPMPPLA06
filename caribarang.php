<?php session_start(); ?>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles6.css">
            <link rel="stylesheet" href="styles2.css">
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
              */
              body {background: rgba(96.15624949336052, 125.81190258264542, 192.31249898672104, 1); }
            </style>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
            <!-- MDB -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
          </head>
          
          <body style="background-color: rgba(96.15624949336052, 125.81190258264542, 192.31249898672104, 1);;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1);">
              <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"> <img src="images/rectangle_1.png" alt="logo" width="232px"></a>
            
                <!-- Toggle button -->
                <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fas fa-bars"></i>
                </button>
            
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            
                  <!-- Icons -->
                  <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="index.html"><span class="logout" style="color:rgb(255, 255, 255); font-size:20px;">Log Out</span></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;">
                          <?php echo $_SESSION['username'];?></span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <br>
            <div class="d-flex justify-content-center">
                <h1 style="font-family:Iceland; color: white; ">Info Barang</h1>
            </div>
            <br>
            <div class="card shadow mb-4" style="background-color:rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1);">
            <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold" style="color: white;">Deterjen</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2"><img src="images/image_1.png" width="150" alt="buku1"></div>
                  <div class="col-md-10" style="color: white ;">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
                    <p>Berat bersih : 5L</p>
                    <p>Harga per item : Rp 40000</p>
                    <p>Stok tersedia : 
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B01'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow mb-4" style="background-color:rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1);">
              <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold" style="color: white ;">Fabric Softener</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2"><img src="images/image_2.png" width="150" alt="buku1"></div>
                  <div class="col-md-10" style="color: white ;">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
                    <p>Berat bersih : 5L</p>
                    <p>Harga per item : Rp 50000</p>
                    <p>Stok tersedia : 
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B02'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow mb-4" style="background-color:rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1);">
              <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold" style="color: white ;">Parfum Laundry</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2"><img src="images/image_3.png" width="150" alt="buku1"></div>
                  <div class="col-md-10" style="color: white ;">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
                    <p>Berat bersih : 5L</p>
                    <p>Harga per item : Rp 140000</p>
                    <p>Stok tersedia :
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B03'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </body>
          </html>
                    