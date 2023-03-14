<?php
$satir = 0;
$sutun = 0;
if(isset($_POST["gonder"])){
    $sutun=$_POST["sutun"];
    $satir=$_POST["satir"];
}

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>Php tablo oluşturma</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label>Sütun</label>
                    <input type="text" value="<?=$sutun?>" class="form-control" name="sutun" placeholder="Sütun değerini giriniz">
                </div>
                <div class="form-group">
                    <label>Satır</label>
                    <input type="text" value="<?=$satir?>" class="form-control" name="satir" placeholder="Satır değerini giriniz">
                </div>
                <button type="submit" name="gonder" class="btn btn-primary">Tablo Oluşturma</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <!--tablo başlangıç-->
            <?= '     <table class="table table-striped">' ?>
            <?php
            $sayac=1;
            for ($i = 0; $i < $satir; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $sutun; $j++){
                    echo "<td>$sayac</td>";
                    $sayac++;
                }
                    echo "</tr>";
            } ?>
            <?= '<table>' ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
