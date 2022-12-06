<?php session_start(); ?>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles2.css">
            <link rel="stylesheet" href="styles6.css">
            
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
          
          <body style="background-color: rgba(96.15624949336052, 125.81190258264542, 192.31249898672104, 1);">
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
                      <a class="nav-link" href="logout.php"><span class="logout" style="color:rgb(255, 255, 255); font-size:20px;">Log Out</span></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;"><?php echo $_SESSION['username'];?><br> (Karyawan)</span></a>
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
                <h1 style="font-family:Iceland; color: white; ">Daftar Pengeluaran</h1>
            </div>
            <span style="color: white ; font-family: Iceland; font-size: 25px;">
                    Total pengeluaran : Rp 
                            <?php
                                include('config.php');
                                $query = "SELECT total_pengeluaran FROM catatan_keuangan WHERE id=1";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['total_pengeluaran'];
                            ?>
                    </span>
            <br>
            <div class="d-flex justify-content-center">
                <table class="table table-striped table-dark table-sm" border="1" >
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah pengeluaran</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include('config.php');
                    $sql = "SELECT * FROM pengeluaran";
                    $query = mysqli_query($db, $sql);
                    
                    $i=1;
                    while($pengeluaran = mysqli_fetch_array($query)){
                        echo "<tr>";
                        
                        echo "<td>".$i++."</td>";
                        echo "<td>".$pengeluaran['tanggal']."</td>";
                        echo "<td>".$pengeluaran['jml_pengeluaran']."</td>";
                        echo "<td>".$pengeluaran['keperluan']."</td>";
                        echo "<td>".$pengeluaran['keterangan']."</td>";
                        
                        echo "</tr>";
                    }		
                ?>
                </tbody>
                </table>
            </div>
      </body>
    </html>