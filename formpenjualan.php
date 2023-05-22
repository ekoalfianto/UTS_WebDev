<!DOCTYPE html>
<html>
<head>
    <title>Toko Handphone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>HANDPHONE SHOP</h1>
    <form action="validasipenjualan.php" method="post">
        <p>Produk GSM Mobile (Best Price):</p>
        <label><input type="checkbox" name="produk1" value="Nokia 1208 Rp.350.000,-">Nokia 1208 Rp.350.000,-</label>
        <label><input type="checkbox" name="produk2" value="Nokia 1661 Rp.465.000,-">Nokia 1661 Rp.465.000,-</label>
        <label><input type="checkbox" name="produk3" value="SonyEricson K330 Rp.485.000,-">SonyEricson K330 Rp.485.000,-</label>
        <label><input type="checkbox" name="produk4" value="Samsung Champ Rp.865.000,-">Samsung Champ Rp.865.000,-</label>
        <label><input type="checkbox" name="produk5" value="Samsung B3410 Rp.1.624.000,-">Samsung B3410 Rp.1.624.000,-</label>

        <hr>

        <p>Data Customer:</p>
        <label>ID Customer: <input type="text" name="ID" size="30" maxlength="60"></label>
        <label>Nama: <input type="text" name="nama" size="30" maxlength="60"></label>
        <label>Email: <input type="text" name="email" size="30" maxlength="60"></label>
        <label>Alamat: <input type="text" name="alamat" size="30" maxlength="100"></label>

        <label>Member:
            <input type="radio" name="member" value="Ya">Member
            <input type="radio" name="member" value="Bukan">Bukan
        </label>

        <label>Pembayaran:
            <select name="pembayaran">
                <option value="VISA">VISA</option>
                <option value="MasterCard">Master Card</option>
                <option value="DebitBCA">Debit BCA</option>
            </select>
        </label>

        <input type="submit" value="Proses" name="submit">
    </form>
</body>
</html>
