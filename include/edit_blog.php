<?php
    
    $id = $_GET['id'];
    $select = $connect -> query("SELECT * FROM blog WHERE id = '$id'");
    $blog = $select -> fetch_assoc();
?>

<div class="form-group">
  <label for="formGroupExampleInput">Image</label>
  <input type="file" class="form-control" id="formGroupExampleInput" name="img[]" multiple="multiple">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Title</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$blog['title']?>" name ="title">
</div>
<div class="form-group">
  <label for="formGroupExampleInput2">Publisher</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo$blog['publisher']?>" name="publisher">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Date</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo$blog['date']?>" name="date">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Description</label>
  <input type="text" class="form-control" id="formGroupExampleInput"value="<?php echo$blog['description']?>" name="description">
</div>

<input class="btn btn-primary" type="submit" value="Edit">

</form>



