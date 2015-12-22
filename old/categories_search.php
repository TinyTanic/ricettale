<?php

require_once('db_connect.php');

session_start();
$term = $_POST['term'];
if($term=="carne"){
    $search  = "SELECT nome, tipo, ing_princ, persone FROM ricette WHERE tipo = '" .$term . "' OR tipo = 'pollame' LIMIT 500";    
}else{
    $search  = "SELECT nome, tipo, ing_princ, persone FROM ricette WHERE tipo = '" .$term . "' LIMIT 500";
}
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
    echo "<p>nessuna ricetta trovata</p>";
 }
?>
