<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <form action="hasil.php" method="POST">
        <h1>Kalkulator Online</h1>
        <input type="number" name="angka1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>/</option>
            <option>x</option>
            <option>^</option>
            <option>%</option>
        </select>
        <input type="number" name="angka2">
        <button type="submit">Hitung</button>
    </form>
</body>
</html>