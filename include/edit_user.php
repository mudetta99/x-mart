

<?php
    $id = $_GET['id'];
    $select = $connect -> query("SELECT * FROM users WHERE id = '$id'");
    $user_details = $select -> fetch_assoc();
    $gender = $user_details['gender'];
    $priv_id = $user_details['priv'];
?>


<form method="post" action="function/user_edit.php" style="width:90%;margin:auto;">
  <div class="form-group">
<input type="hidden" value="<?php echo $id ?>" name ='id'>
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name" value="<?php echo $user_details['name'] ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="email" value="<?php echo$user_details['email'] ?>" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password" value="<?php echo$user_details['password'] ?>">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone" value="<?php echo$user_details['phone'] ?>">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" <?php if($gender == 0 ){echo "checked";} ?>  >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" <?php if($gender == 1 ){echo "checked";} ?> >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

  <div style="margin-top:10px ;" class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
    <optgroup label="Select role:">
      <?php $select_priv = $connect -> query("SELECT * FROM priv");
      foreach($select_priv as $priv){

        ?>
     
      <option value="<?php echo$priv['id'] ?>"<?php if($priv_id == $priv['id']){echo "selected";}?>><?php echo$priv['name'] ?></option>
      <?php } ?>
      </optgroup>
      </select>
      
      

  </div>
  <input style="margin-top:15px ;" type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>