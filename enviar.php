<?php
//echo '<pre>';
//print_r($_FILES);
$permitido = ['image/jpeg', 'image/jpg', 'image/png'];
if(in_array($_FILES['arquivo']['type'], $permitido)) {
$nome = md5(time().rand(0, 1000).'jpg');
//echo $nome;
move_uploaded_file($_FILES['arquivo']['tmp_name'], './'.$nome);
    echo "Arquivo recebido com sucesso!";
} else {
    echo "Arquivo não foi enviado";
}

?>









<!--echo '<pre>';
  //  print_r( $_FILES );
//$nome = $_FILES['arquivo']['name'];
//move_uploaded_file($_FILES['arquivo']['tmp_name'],'./'.$nome);
-->
