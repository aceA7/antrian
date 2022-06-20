<!DOCTYPE html>
<html>
<head>
<style>
div {
  width: 320px;
  padding: 5px;
  margin: 0;
}
h2 {
  font-size : 40px;

}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
</head>
<body>

<h2 align ="center">Puskesmas Cempae</h2>
<hr>

<div align="center" style="font-size:30px;">
Nomor Antrian Loket
</div>
<div align="center" style="font-size:250px;" > 
<?php
        include "../../config/database.php";
        $query    =mysqli_query($mysqli, "SELECT * FROM tbl_antrian ORDER BY no_antrian DESC LIMIT 1");
        while($data    =mysqli_fetch_array($query)){
        ?>

        <?=$data['no_antrian']?>
        

        <?php
        }
        ?>
</div>


</body>
</html>
<script>
    window.print();
    window.onfocus=function(){ window.close();}
</script>