<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <title>Jawaban Untuk Bootcamp</title>
</head>

<body>
    <div class="container-fluid mt-4">
        Soal Nomer 1
        <p>
            Sebuah produk mempunyai deskripsi sebagai berikut: itemId = 12341822 itemName = basic t-shirt price = 70000
            availableColorAndSize =· color = red, size= S,M,L · color = solid black, sizes= M, L freeShiping = false
            <br>
            Buatlah sebuah function yang mempunyai return value berformat JSON dan berisi dari deskripsi produk di
            atas!
            Clue: itemId(string) itemName(string) price(number) availableColorAndSize (array of object)
            freeShiping(boolean)
        </p>
        <?php
        $data['itemId'] = 12341822;
        $data['itemName'] = 'basic t-shirt';
        $data['price'] = 70000;
        $data['availableColorAndSize'] = array('color' => array('red', 'solid black'), 'size' => array('S, M, L', 'M, L'));
        $data['freeShipping'] = false;

        
        echo "<div class='alert alert-primary' role='alert'>
        ".json_encode($data)."
      </div>";

?>
        <hr>
        Soal Nomer 2
        <p>
            Sebuah form memiliki sebuah field bernama username. Buatlah sebuah function untuk memverifikasi field
            username
            dengan requirements lima karakter pertama huruf kecil dilanjutkan underscore atau titik dan dilanjutkan dua
            huruf besar! Contoh valid username adalah
            <br>
            · qwert_QQ
            · lkjhg.AA
        </p>
        <form action="" method="POST">
            <br>
            <input type="text" name="username">
            <button class="submit"> Kirim </button>
        </form>

        <?php

if (isset($_POST['username'])) {

    $kondisi = preg_match("/(^[a-z]{5})(.|_)([A-Z]{2}$)/", $_POST['username']);
    echo "<br> <div class='alert alert-primary' role='alert'>
    ";
    if ($kondisi) {
        echo 'Username Benar';
    } else {
        echo 'Username Salah';
    }
    echo "</div>";
}
?>
        <br>
        <hr>
        Soal Nomer 3
        <p>
            Buatlah function untuk mencetak segi tiga siku deret bilangan asli dengan parameter panjang deret! Dengan
            panjang deret tidak boleh lebih dari 10, dan buatlah pesan error jika lebih dari 10.
            <br>
            Clue:
            Jika function itu dijalankan:
            segitigaAsli(7)
            akan dicetak di layar:
        </p>
        <form action="" method="POST">
            <br>
            <input type="number" name="segitiga" placeholder="Segitiga">
            <button class="submit"> Kirim </button>
        </form>
        <?php
        if (isset($_POST['segitiga'])) {
            if ($_POST['segitiga'] <= 10) {
                echo "<br> <div class='alert alert-primary' role='alert'>
                ";
                for ($i = 1; $i <= $_POST['segitiga']; $i++) {
                    
                    for ($j = 1; $j <= $i; $j++) {
                        echo $j . '  ';
                    }
                    echo "<br>";
                }
                echo "</div>";
            
            } else {
                echo 'Tidak Boleh Lebih Dari 10';
            }
            
        }
?>
        <br>
        <hr>
        Soal Nomer 4
        <br>
        Buatlah function untuk menghitung jumlah jabat tangan yang terjadi dalam pertemuan yang dihadiri oleh beberapa
        orang. Jika setiap orang berjabat tangan dengan semua yang hadir dan hanya sekali berjabat tangan tangan dengan
        orang yang sama!
        <br>
        NB: Gunakan perulangan dan tidak menggunakan rumus n x (n-1)/2 atau ½.n.(n-1) !
        clue:
        print(count_handshake(3))
        result: 3
        print(count_handshake(6))
        result: 15

        <form action="" method="POST">
            <br>
            <input type="number" name="handshake" placeholder="Jumlah Orang">
            <button class="submit"> Kirim </button>
        </form>
        <?php 
        function handshake($n)  
        { 
            if ($n == 0)  
                return 0; 
            else
                return ($n - 1) + handshake($n - 1);  
        } 
        
        $n = $_POST['handshake']; 
        if(isset($_POST['handshake'])) {
            echo("<br><div class='alert alert-primary' role='alert'>".handshake($n)."</div>");
        }
        ?>
        <hr>
        // Soal Nomer 5
        <p>
            Dalam PHP ada fungsi bernama substr_count() atau string.count() di python, yang berguna untuk menghitung
            jumlah
            karakter yang sama pada sebuah string. Buatlah sebuah function versimu sendiri yang memiliki kegunaan sama
            dengan function substr_count() atau string.count() !
            <br>
            NB: soal nomer 5 dilarang menggunakan built-in function.
            Clue:
            Function myCountChar(“x”,”y”)
            · myCountChar (“bootcamp”,”o”)
            Akan diperoleh result: 2
            · myCountChar (“arkademy”,”k”)
            Akan diperoleh result: 1
        </p>

        <form action="" method="POST">
            <input type="text" name="kalimat" placeholder="Kalimat" required>
            <input type="text" name="kata" placeholder="Kata" required>
            <button type="submit"> Hitung Kata </button>
        </form>

        <?php 
            if (isset($_POST['kalimat'])) {
                $x = $_POST['kalimat'];
                    foreach (count_chars($x, 1) as $i => $val) {
                        if($_POST['kata'] === chr($i)) {
                            
                            echo "<br> <div class='alert alert-primary' role='alert'>
                            'Kata $x Memiliki $val huruf ".  chr($i)."<br>
                            </div>";     
                        }
                    }
            }
        ?>

        <hr>
        Soal Nomer 6
        Buatlah table pada database MySQL sebagaimana berikut ini beserta relasinya
        <div class="row mt-3">
            <div class="col-md">
                <h6> Tabel Category </h6>
                <img src="assets/tabelcategory.png" alt="">

            </div>
            <div class="col-md">
                <h6> Tabel Produk </h6>
                <img src="assets/tabelproduk.png" alt="">

            </div>
            <div class="col-md">
                <h6> Perintah My SQL </h6>
                <img src="assets/sql.png" alt="">

            </div>

            <div class="col-md">
                <h6> Hasil Perintah </h6>
                <img src="assets/sqlhasil.png" alt="">

            </div>
        </div>
        <br>




        <br>
        <hr>
        Soal Nomer 7
        <p>Dari soal nomor 6, buatlah aplikasi sederhana untuk menampilkan hasil dari query ke layar. Gunakan Html,
            css, dan twitter bootstrap untuk tampilan, sedangkan bahasa pemrograman bebas!</p>
        <br>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "myProduk";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $perintah = ("SELECT category_id as Id, product_categories.name ,COUNT(category_id) as Total
        FROM product_categories
        RIGHT JOIN products ON product_categories.id = products.category_id
        GROUP BY category_id");
?>

        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jumlah Produk</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($conn->query($perintah) as $p) {?>

                <tr>
                    <td>
                        <?=$p['Id']?>
                    </td>
                    <td>
                        <?=$p['name'];?>
                    </td>
                    <td>
                        <?=$p['Total']?>
                    </td>
                </tr>
                <?php }?>

            </tbody>

        </table>

        <br>
        <br>
    </div>
</body>

</html>