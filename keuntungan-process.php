<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
<style>
table {
    background-color: white;
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<table class="table table-striped table-dark table-sm" border="1" >
    <thead>
        <tr>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Harga per item</th>
            <th scope="col">Total Terjual</th>
            <th scope="col">Total Keuntungan</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        include("config.php");
        $bln = intval($_GET['bulan']);
        $thn = intval($_GET['tahun']);
        
        if ($bln==0) {
            $sql = "SELECT jenis_barang, harga, SUM(qty) AS jumlah, SUM(qty*barang.harga) AS total_keuntungan FROM transaksi JOIN barang ON barang.id = transaksi.kode_barang WHERE YEAR(Tanggal) = $thn GROUP BY kode_barang;";
            $query = mysqli_query($db, $sql);

            while($result = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $result['jenis_barang'] . "</td>";
            echo "<td>" . "Rp " . $result['harga'] . "</td>";
            echo "<td>" . $result['jumlah'] . "</td>";
            echo "<td>" . "Rp " . $result['total_keuntungan'] . "</td>";
            echo "</tr>";
            }
        }
        else{
            $sql = "SELECT jenis_barang, harga, SUM(qty) AS jumlah, SUM(qty*barang.harga) AS total_keuntungan FROM transaksi JOIN barang ON barang.id = transaksi.kode_barang WHERE MONTH(Tanggal)=$bln AND YEAR(Tanggal) = $thn GROUP BY kode_barang;";
            $query = mysqli_query($db, $sql);

            while($result = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $result['jenis_barang'] . "</td>";
            echo "<td>" . "Rp " . $result['harga'] . "</td>";
            echo "<td>" . $result['jumlah'] . "</td>";
            echo "<td>" . "Rp " . $result['total_keuntungan'] . "</td>";
            echo "</tr>";
            }
        }
    ?>
    </tbody>
</table>
<br>
<table class="table table-striped table-dark table-sm" border="1" >
    <thead>
        <tr>
            <th scope="col">Total Keuntungan Keseluruhan</th>
            <th scope="col">Rata - rata keuntungan per bulan</th>
            <th scope="col">Total Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        include("config.php");
        $bln = intval($_GET['bulan']);
        $thn = intval($_GET['tahun']);
        
        if ($bln==0) {
            $sql = "SELECT SUM(qty*barang.harga) AS Total, SUM(qty*barang.harga) / 12 AS Rata_rata FROM transaksi JOIN barang ON barang.id = transaksi.kode_barang WHERE YEAR(Tanggal) = $thn GROUP BY YEAR(Tanggal);";
            $sql1 = "SELECT SUM(jml_pengeluaran) AS Total_pengeluaran FROM pengeluaran WHERE YEAR(Tanggal) = $thn GROUP BY YEAR(Tanggal);";
            $query = mysqli_query($db, $sql);
            $query1 = mysqli_query($db, $sql1);

            while($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . "Rp " . $result['Total'] . "</td>";
                echo "<td>" . "Rp " . $result['Rata_rata'] . "</td>";
            }
            while($result1 = mysqli_fetch_array($query1)){
                echo "<td>" . "Rp " . $result1['Total_pengeluaran'] . "</td>";
                echo "</tr>";
            }
        }
        else{
            $sql = "SELECT SUM(qty*barang.harga) AS Total, SUM(qty*barang.harga) / 30 AS Rata_rata FROM transaksi JOIN barang ON barang.id = transaksi.kode_barang WHERE MONTH(Tanggal)=$bln AND YEAR(Tanggal) = $thn GROUP BY MONTH(Tanggal);";
            $sql1 = "SELECT SUM(jml_pengeluaran) AS Total_pengeluaran FROM pengeluaran WHERE MONTH(Tanggal)=$bln AND YEAR(Tanggal) = $thn GROUP BY YEAR(Tanggal);";
            $query = mysqli_query($db, $sql);
            $query1 = mysqli_query($db, $sql1);

            while($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . "Rp " . $result['Total'] . "</td>";
                echo "<td>" . "Rp " . $result['Rata_rata'] . "</td>";
            }
            while($result1 = mysqli_fetch_array($query1)){
                echo "<td>" . "Rp " . $result1['Total_pengeluaran'] . "</td>";
                echo "</tr>";
            }
        }
    ?>
    </tbody>
</table>
</body>
</html>