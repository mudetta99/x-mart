<?php

    $id = $_GET['id'];
    $select = $connect -> query("SELECT * FROM products WHERE id = '$id'");
    $prod_details = $select -> fetch_assoc();
    $prod_name = $prod_details['name'];
    $cat_id = $prod_details['cat_id'];
?>    
    

    

<form action="function/product_edit.php" method="post"  enctype="multipart/form-data">
<div class="form-group">
    <input type="hidden" value="<?php echo$id ?>" name="id">
  <label for="formGroupExampleInput">Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$prod_name ?>" name ="name">
</div>
<div class="form-group">
  <label for="formGroupExampleInput2">Quan</label>
  <input type="text" class="form-control" id="formGroupExampleInput2"value="<?php echo$prod_details['quan'] ?>" name="quan">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Price</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$prod_details['price'] ?>"  name="price">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">sale</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$prod_details['sale'] ?>"  name="sale">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">seller</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$prod_details['seller'] ?>"  name="seller">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Description</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$prod_details['description'] ?>"  name="description">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Image</label>
  <input type="file" class="form-control" id="formGroupExampleInput" name="img[]" multiple="multiple">
</div>

<select name="category" class="form-control" id="exampleFormControlSelect1">
    <optgroup label="Select category:">
      <?php
      $select_category = $connect -> query("SELECT * FROM category");
      foreach($select_category as $cate){

        ?>
     
      <option value="<?php echo$cate['id'] ?>"<?php if($cat_id == $cate['id']){echo "selected";}?>><?php echo$cate['name'] ?></option>
      <?php } ?>
      </optgroup>
      </select>

    <input class="btn btn-primary" type="submit" value="Edit">



</form>



