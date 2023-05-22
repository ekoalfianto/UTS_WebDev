<!DOCTYPE html>
<html>
<head>
    <title>Web Penjualan Handphone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .info-label {
            font-weight: bold;
        }

        .info-value {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    // Deklarasi dan inisialisasi variabel
    $produk = "produk";
    $ID = $_POST["ID"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $member = $_POST["member"];
    $pembayaran = $_POST["pembayaran"];
    $harga = 0;

    // Array untuk menyimpan harga produk
    $hargaProduk = array(
        "produk1" => 350000,
        "produk2" => 465000,
        "produk3" => 485000,
        "produk4" => 865000,
        "produk5" => 1624000
    );

    // Menghitung total harga berdasarkan produk yang dipilih
    if (isset($_POST['produk1']))
        $harga += $hargaProduk['produk1'];
    if (isset($_POST['produk2']))
        $harga += $hargaProduk['produk2'];
    if (isset($_POST['produk3']))
        $harga += $hargaProduk['produk3'];
    if (isset($_POST['produk4']))
        $harga += $hargaProduk['produk4'];
    if (isset($_POST['produk5']))
        $harga += $hargaProduk['produk5'];

    // Menghitung diskon 10% jika pembeli adalah member
    $diskonMember = 0;
    if ($member == "Ya") {
        $diskonMember = 0.1 * $harga;
    }

    // Menghitung pembayaran akhir setelah diskon
    $pembayaranAkhir = $harga - $diskonMember;
    ?>

    <h1>Info Pembelian</h1>
    <hr>
    
    <h3>Produk yang dibeli:</h3>
    <?php
    // Menampilkan produk yang dipilih menggunakan metode POST
    if (isset($_POST['produk1']))
        echo "<p>" . $_POST['produk1'] . "</p>";
    if (isset($_POST['produk2']))
        echo "<p>" . $_POST['produk2'] . "</p>";
    if (isset($_POST['produk3']))
        echo "<p>" . $_POST['produk3'] . "</p>";
    if (isset($_POST['produk4']))
        echo "<p>" . $_POST['produk4'] . "</p>";
    if (isset($_POST['produk5']))
        echo "<p>" . $_POST['produk5'] . "</p>";
    ?>
    
    <h3>Informasi Customer:</h3>
    <p class="info-label">ID Customer:</p>
    <p class="info-value"><?php
    // Memvalidasi dan menampilkan ID Customer
    if (strlen($ID) == 0)
        echo "Silahkan masukkan ID Anda!";
    else
        echo $ID;
    ?></p>

    <p class="info-label">Nama:</p>
    <p class="info-value"><?php
    // Memvalidasi dan menampilkan nama
    if (strlen($nama) == 0)
        echo "Silahkan masukkan nama Anda!";
    else
        echo $nama;
    ?></p>

    <p class="info-label">Email:</p>
    <p class="info-value"><?php
    // Memvalidasi dan menampilkan email
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
        echo "Invalid email!";
    } else
        echo $email;
    ?></p>

    <p class="info-label">Alamat:</p>
    <p class="info-value"><?php
    // Memvalidasi dan menampilkan alamat
    if (strlen($alamat) == 0)
        echo "Silahkan masukkan alamat Anda!";
    else
        echo $alamat;
    ?></p>

    <p class="info-label">Member:</p>
    <p class="info-value"><?php echo $member; ?></p>

    <p class="info-label">Pembayaran:</p>
    <p class="info-value"><?php echo $pembayaran; ?></p>

    <p class="info-label">Total Pembayaran:</p>
    <p class="info-value"><?php echo number_format($harga, 0, ',', '.'); ?></p>

    <p class="info-label">Diskon Member:</p>
    <p class="info-value"><?php echo number_format($diskonMember, 0, ',', '.'); ?></p>

    <p class="info-label">Pembayaran Akhir:</p>
    <p class="info-value"><?php echo number_format($pembayaranAkhir, 0, ',', '.'); ?></p>
</body>
</html>
