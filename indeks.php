<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">📦 Data Barang</h2>

    <!-- Tombol tambah -->
    <div class="mb-4">
      <a href="tambah.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        ➕ Tambah Barang
      </a>
    </div>

    <!-- Tabel barang -->
    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-gray-200 text-left">
            <th class="px-4 py-2 border">ID</th>
            <th class="px-4 py-2 border">Nama Barang</th>
            <th class="px-4 py-2 border">Harga</th>
            <th class="px-4 py-2 border">Stok</th>
            <th class="px-4 py-2 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = mysqli_query($koneksi, "SELECT * FROM barang");
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr class='hover:bg-gray-50'>
                      <td class='px-4 py-2 border'>{$row['id_barang']}</td>
                      <td class='px-4 py-2 border'>{$row['nama_barang']}</td>
                      <td class='px-4 py-2 border'>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                      <td class='px-4 py-2 border'>{$row['stok']}</td>
                      <td class='px-4 py-2 border'>
                        <a href='ubah.php?id={$row['id_barang']}' class='text-yellow-600 hover:underline mr-2'>✏️ Ubah</a>
                        <a href='hapus.php?id={$row['id_barang']}' class='text-red-600 hover:underline'>🗑️ Hapus</a>
                      </td>
                    </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
