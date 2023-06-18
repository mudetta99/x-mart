

<form action="function/product_add.php" method="post"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Name Product" name ="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Quan</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Quan" name="quan">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Price</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Price" name="price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Sale</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="sale" name="sale">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Seller</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="seller" name="seller">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Description" name="Description">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Image</label>
    <input type="file" class="form-control" id="formGroupExampleInput" name="img[]" multiple="multiple">
  </div>

  <h6>Select Category</h6>
  <select name="category" class="form-control" id="exampleFormControlSelect1">
    <optgroup label="Select Category:">
    <?php
    $select_category = $connect -> query("SELECT * FROM category");
    foreach($select_category as $cate){
      ?>
    <option value="<?php echo$cate['id']?>"><?php echo$cate['name']?></option>
    <?php } ?>
    </optgroup>
    </select>
      <br>

    <h6>This Producct Is New Or Old</h6>
    <select name="upcoming" class="form-control" id="exampleFormControlSelect1">
    <optgroup label="Upcoming:">

    <option value="new">New</option>
    <option value="old" selected>Old</option>

    </optgroup>
    </select>
    

  <input class="btn btn-primary" type="submit" value="Add">

</form>



