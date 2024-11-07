<!DOCTYPE html>
<html>
<head>
  <title>Laporan Penjualan</title>
</head>
<body>
  <h1>Laporan Penjualan</h1>
  
  <table border="1">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Harga Per Produk</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Array asosiatif untuk data produk
        $produk = [
          "A" => ["nama" => "Produk A", "harga" => 10000],
          "B" => ["nama" => "Produk B", "harga" => 7500],
          "C" => ["nama" => "Produk C", "harga" => 12000]
        ];

        // Array multidimensi untuk data transaksi
        $transaksi = [
          ["produk" => "A", "jumlah" => 5],
          ["produk" => "B", "jumlah" => 10],
          ["produk" => "C", "jumlah" => 8]
        ];

        // Hitung total penjualan
        $total_penjualan = 0;
        foreach ($transaksi as $tr) {
          $total_penjualan += $produk[$tr["produk"]]["harga"] * $tr["jumlah"];
        }

        // Tampilkan data penjualan
        foreach ($transaksi as $tr) {
          echo "<tr>";
          echo "<td>" . $produk[$tr["produk"]]["nama"] . "</td>";
          echo "<td>" . $produk[$tr["produk"]]["harga"] . "</td>";
          echo "<td>" . $tr["jumlah"] . "</td>";
          echo "<td>" . $produk[$tr["produk"]]["harga"] * $tr["jumlah"] . "</td>";
          echo "</tr>";
        }

        // Tampilkan total penjualan
        echo "<tr>";
        echo "<td colspan='3'>Total Penjualan</td>";
        echo "<td>" . $total_penjualan . "</td>";
        echo "</tr>";
      ?>
    </tbody>
  </table>
</body>
</html>