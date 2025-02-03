<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Online</title>
    <link href='style.css' rel='stylesheet' type='text/css';>
</head>
<body>
    <form action="hasil.php">
        <h1>Kalkulator Online</h1>
        <?php
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($angka1 === null || $angka2 === null || $angka1 === '' || $angka2 === ''){
                echo "<p style='color: red;'>Error: Semua input harus diisi</p>";
                echo "<a href='index.php'>Kembali</a>";
                exit;
            }

            if (!is_numeric($angka1) || !is_numeric($angka2)) {
                echo "<p style='color: red;'>Error: Input harus berupa angka!</p>";
                echo "<a href='index.php'>Kembali</a>";
                exit;
            }

            if ($operator == '+') {
                $hasil = $angka1 + $angka2;
            } 
            else if ($operator == '-') {
                $hasil = $angka1 - $angka2;
            }
            else if ($operator == '/') {
                if ($angka2 == 0 ) {
                    echo "<p style='color: red;'>Error: Input harus berupa angka!</p>";
                    echo "<a href='index.php'>Kembali</a>";
                    exit;
                }
                
                $hasil = $angka1 / $angka2;
            }
            else if ($operator == 'x'){
                $hasil = $angka1 * $angka2;
            }
            else if ($operator == '^') {
                $hasil = pow($angka1, $angka2);
            }
            else if ($operator == '%') {
                $hasil = $angka1 % $angka2;
            }
            else {
                echo "<p style='color: red;'>Error: Operator tidak valid!</p>";
                echo "<a href='index.php'>Kembali</a>";
                error_log("Invalid Operator");
                exit;
            }

            echo $angka1 . ' ' . $operator . ' ' . $angka2 . ' ' . '=' . ' ' . $hasil;
        ?>

        <a href="index.php">Kembali</a>
        <a type="button" onclick="return window.print()">Cetak</a>
    </form>
</body>
</html>