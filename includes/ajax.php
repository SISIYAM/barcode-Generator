<?php
include 'database.php';

$search = new Database();

if(isset($_POST['search'])){
    $id = $_POST['code'];
    
    $search->select('product','*',null,"code=$id",null,null);
    $result = $search->getResult();
    
    $output = "";
    foreach($result as $row){
        $output = '
        <div class="form-group">
        <label class="control-label col-sm-2" for="product">Product:</label>
        <div class="col-sm-10">
          <input autocomplete="OFF" type="text" class="form-control" id="product" value="'.$row['name'].'" name="product">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="product_id">Product ID:</label>
        <div class="col-sm-10">
          <input autocomplete="OFF" type="text" class="form-control" id="product_id" value="'.$row['code'].'" name="product_id">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="rate">Price</label>
        <div class="col-sm-10">          
          <input autocomplete="OFF" type="text" class="form-control" id="rate" value="'.$row['price'].'"  name="rate">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
        <div class="col-sm-10">          
          <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
        </div>
      </div>
     ';
    }

    echo $output;
    
}


?>