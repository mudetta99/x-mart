

<form action="function/blog_add.php" method="post"  enctype="multipart/form-data">

<div class="form-group">
  <label for="formGroupExampleInput">Image</label>
  <input type="file" class="form-control" id="formGroupExampleInput" name="img" multiple="multiple">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Title</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="title" name ="title">
</div>
<div class="form-group">
  <label for="formGroupExampleInput2">Publisher</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="publisher" name="publisher">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Date</label>
  <input type="date" class="form-control" id="formGroupExampleInput" placeholder="date" name="date">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Description</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="description" name="description">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Link</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="link" name="link">
</div>

<input class="btn btn-primary" type="submit" value="Add">

</form>



