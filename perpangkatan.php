<?php
if (isset($_POST['bilangan_pertama']) && isset($_POST['bilangan_pemangkat'])) {
    echo "data lengkap siap diproses";
} else {
    echo "<p style='text-align: center; color: red; margin: 10px 0;'>Data tidak lengkap</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" style="display: flex; justify-content: center;" method="POST">
    <table border="1">
    <tr>
        <td><label>Bilangan Pertama :</label></td>
        <td><input type="number" name="bilangan_pertama"></td>
    </tr>
    <tr>
        <td><label>Bilangan Pemangkatan :</label></td>
        <td><input type="number" name="bilangan_pemangkat"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit">Hitung</button></td>
    </tr>
    </table>
    </form>
</body>
</html>
