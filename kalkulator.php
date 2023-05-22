<html> 
<head>
    <title>Kalkulator Sederhana</title> 
    <style>
        .watermark {
            position: fixed;
            top: 40px;
            left: 10px;
            font-size: 15px;
            color: rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body> 
<div class="watermark">Muhamad Eko Alfianto</div>
    <form action="" method="post"> 
        <h1>Kalkulator Sederhana </h1> 
        <table border="3"> 
            <table width="25%" border="2" cellspacing="0" cellpadding="0"> 
                <tr> 
                    <td align="center"><b>Bilangan 1</b></td> 
                    <td align="center"><b>Operator</b></td> 
                    <td align="center"><b>Bilangan 2</b></td> 
                    <td align="center"><b></b></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="angka1" size="20" /></td> 
                    <td>
                        <select name="operasi"> 
                            <option value="*">x</option> 
                            <option value="/">/</option> 
                            <option value="+">+</option> 
                            <option value="-">-</option> 
                            <option value="%">%</option> 
                        </select>
                    </td> 
                    <td><input type="text" name="angka2" size="20" /></td> 
                    <td><input type="submit" value="Submit" /></td>
                </tr> 
            </table> 
        </table> 
        
        <?php 
        if (isset($_POST["angka1"]) && isset($_POST["angka2"])) { 
            // Memulai blok if dengan pengecekan apakah "angka1" dan "angka2" ada dalam $_POST
            
            $angka1 = $_POST["angka1"]; // Mengambil nilai angka1
            $angka2 = $_POST["angka2"]; // Mengambil nilai angka2

            if (empty($angka1) || empty($angka2)) {
                // Mengecek jika angka1 atau angka2 kosong
                echo "<br> Bilangan Harus Diisi!";
            } else {
                $hasilkali = $angka1 * $angka2; // Rumus menghitung perkalian
                $hasilbagi = $angka1 / $angka2; // Rumus menghitung perbagian
                $hasiltambah = $angka1 + $angka2; // Rumus menghitung penjumlahan
                $hasilkurang = $angka1 - $angka2; // Rumus menghitung pengurangan
                $hasilpersen = $angka1 % $angka2; // Rumus menghitung persen / modulus

                if ($_POST["operasi"] == '*') { 
                    // Blok if dengan kondisi $_POST["operasi"] sama dengan '*' (perkalian)
                    echo "<br> hasilnya adalah= " . $hasilkali;     // Menampilkan hasil perkalian
                } elseif ($_POST["operasi"] == '/') { 
                    // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '/' (pembagian)
                    echo "<br> hasilnya = " . $hasilbagi;
                    // Menampilkan hasil pembagian
                } elseif ($_POST["operasi"] == '+') { 
                    // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '+' (penjumlahan)
                    echo "<br> hasilnya = " . $hasiltambah;
                    // Menampilkan hasil penjumlahan
                } elseif ($_POST["operasi"] == '-') { 
                    // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '-' (pengurangan)
                    echo "<br> hasilnya = " . $hasilkurang;
                    // Menampilkan hasil pengurangan
                } elseif ($_POST["operasi"] == '%') { 
                    // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '%' (modulus)
                    echo "<br> hasilnya = " . $hasilpersen;
                    // Menampilkan hasil hitungan persen
                }
            }
        } 
        ?> 
    </form> 
</body> 
</html> 