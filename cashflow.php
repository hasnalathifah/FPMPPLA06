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
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;"><?php echo $_SESSION['username'];?></span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <br>
            <div class="container d-flex justify-content-center">
                <h1 style="font-family:Iceland; color: white; ">Daftar Pemasukan</h1>
            </div>
            <span style="color: white ; font-family: Iceland; font-size: 25px;">
                    Total pemasukan : Rp 
                            <?php
                                include('config.php');
                                $query = "SELECT total_pemasukan FROM catatan_keuangan WHERE id=1";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['total_pemasukan'];
                            ?>
                    </span>
            <br>
            <div class="d-flex justify-content-center">
                <table class="table table-striped table-dark table-sm" border="1" >
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama customer</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No telp</th>
                        <th scope="col">Jenis barang</th>
                        <th scope="col">qty</th>
                        <th scope="col">Total harga</th>
                        <th scope="col">Pencatat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include('config.php');

                    $batas = 10;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
    
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $sql = "SELECT transaksi.id, tanggal, nama_customer, alamat, no_telp, jenis_barang, qty, harga*qty AS total, username FROM transaksi JOIN barang ON transaksi.kode_barang = barang.id JOIN karyawan ON transaksi.pencatat=karyawan.username";
                    $query = mysqli_query($db, $sql);
                    $jumlah_data = mysqli_num_rows($query);
                    $total_halaman = ceil($jumlah_data / $batas);

                    $sql = "SELECT transaksi.id, tanggal, nama_customer, alamat, no_telp, jenis_barang, qty, harga*qty AS total, username FROM transaksi JOIN barang ON transaksi.kode_barang = barang.id JOIN karyawan ON transaksi.pencatat=karyawan.username limit $halaman_awal, $batas";
                    $data = mysqli_query($db, $sql);
                    $nomor = $halaman_awal+1;

                    while($transaksi = mysqli_fetch_array($data)){
                        echo "<tr>";
                        
                        echo "<td>".$nomor++."</td>";
                        echo "<td>".$transaksi['tanggal']."</td>";
                        echo "<td>".$transaksi['nama_customer']."</td>";
                        echo "<td>".$transaksi['alamat']."</td>";
                        echo "<td>".$transaksi['no_telp']."</td>";
                        echo "<td>".$transaksi['jenis_barang']."</td>";
                        echo "<td>".$transaksi['qty']."</td>";
                        echo "<td>"."Rp ".$transaksi['total']."</td>";
                        echo "<td>".$transaksi['username']."</td>";
                        
                        echo "</tr>";
                    }		
                ?>
                </tbody>
                </table>
            </div>
            <nav>
			    <ul class="pagination justify-content-center">
				<li class="page-item" style="background-color: white;">
					<a class="page-link" style="color: blue;" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item" style="background-color: white;"><a class="page-link" style="color: blue;" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item" style="background-color: white;">
					<a  class="page-link" style="color: blue;" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
                </ul>
            </nav>
      </body>
    </html>