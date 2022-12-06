<?php session_start(); ?>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles5.css">
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
                <!-- <a href="inputbeli.html"><img src="images/back.png" alt="back" width="50px"></a> -->
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
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;"><?php echo $_SESSION['username'];?></span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <div class=e86_81>
                <div class=e2_201>
                  <!-- <div class="e2_202"></div>
                  <div class="e2_203"></div><span  class="e2_305">Kembali ke menu</span><span  class="e2_206">Nama Pengguna</span><span  class="e2_207">(Karyawan)</span> -->
                  <!-- <div class=e2_208>
                    <div class="ei2_208_208_1526"></div>
                  </div> -->
                  <div class="e2_231"></div><span  class="e2_209" style="font-size: 35px;">Data Pengeluaran berhasil Diinput!</span>
                  <a href="pdashboard.php"><span  class="e2_305">Kembali ke menu</span></a>
                </div>
                <!-- <div class="e4_2425"></div>
                <div class=e86_91>
                  <div class="e4_2426"></div>
                  <div class="e4_2427"></div>
                </div> -->
                <div class="e58_84"></div>
            </div>
          </body>
          </html>