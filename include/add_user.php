

<form method="post" action="function/user_add.php" style="width:90%;margin:auto;">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="email">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

  <div style="margin-top:10px ;" class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
    <optgroup label="Select Role:">
    <?php
    $select_priv = $connect -> query("SELECT * FROM priv");
    foreach($select_priv as $priv){
      ?>
    <option value="<?php echo$priv['id']?>"><?php echo$priv['name']?></option>
    <?php } ?>
    </optgroup>
    </select>
    

  </div>
  <input style="margin-top:15px ;" type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>