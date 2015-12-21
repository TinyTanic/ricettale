<?php

require_once('db_connect.php');

session_start();
$term = $_POST['term'];

    $search = "SELECT DISTINCT nome, tipo, ing_princ, persone FROM ricette JOIN ingredienti ON ricette.nome = ingredienti.nome_ricetta WHERE nome LIKE '%" .$term . "%' OR tipo LIKE '%" .$term . "%' OR ing_princ LIKE '%" .$term . "%' OR nome_ingrediente LIKE '%" .$term . "%' LIMIT 500";

$result = mysql_query($search);
$pass = false;
while ($row = mysql_fetch_array($result)) {
    $pass = true;
?>
<div class="row section_group ">
    <div class="col-lg-4 col-md-4 ">
        <p><?php echo $row['nome'] ?></p>
    </div>
    <div class="col-lg-4 col-md-4 borderbot">
        <p><?php echo $row['ing_princ'] ?></p>
    </div>
    <div class="col-lg-4 col-md-4 ">
        <button class="btn btn-success">Visualizza</button>
    </div>
</div>
<?php
 }
 if($pass == false){
    echo "nessuna ricetta trovata";
 }
?>
