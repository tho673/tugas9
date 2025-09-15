<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">➕ Tambah Barang</h2>

    <!-- Form -->
    <form method="post" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Nama Barang</label>
        <input type="text" name="nama_barang" required
          class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 px-3 py-2" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="number" name="harga" required
          class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 px-3 py-2" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Stok</label>
        <input type="number" name="stok" required
          class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 px-3 py-2" />
      </div>

      <div class="flex items-center justify-between mt-6">
        <a href="index.php" class="text-gray-600 hover:underline">⬅️ Kembali</a>
        <input type="submit" name="submit" value="Simpan"
          class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition cursor-pointer" />
      </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama  = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];

        $query = "INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama','$harga','$stok')";
        mysqli_query($koneksi, $query);
        header("Location: index.php");
        exit;
    }
    ?>
  </div>
</body>
</html>
