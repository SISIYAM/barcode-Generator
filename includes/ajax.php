<?php
include 'database.php';

$search = new Database();

if(isset($_POST['search'])){
    $id = $_POST['code'];
    
    $search->select('product','*',null,"code=$id",null,null);
    $result = $search->getResult();
    
    $output = "";
    foreach($result as $row){
        $output = '<p class="" style="margin-bottom:-8px; color:#000000;" id="productName">'.$row['name'].'</p>
        <p class="mx-5" style="color:#000000;" id="productPrice">Price: '.$row['price'].' Tk</p>';
    }

    echo $output;
    
}


?>