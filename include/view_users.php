<style>
  .add-btn{
    position:absolute;
    top:17.5%;
    color:#fff;
    font-weight:bold;
  }
  </style>

<?php
    
    $id = $_SESSION['login'];
    $select_p = $connect -> query("SELECT * FROM users WHERE id = '$id'");
    $user_details = $select_p -> fetch_assoc();
    $priv = $user_details['priv'];
    $nam = $user_details['name'];
    $priv_s = $_SESSION['priv'];
 

?>
<a <?php if($priv_s == 2 and $user_details['priv'] < 2 ){echo "hidden";}
        elseif($priv_s == 3 and $user_details['priv'] < 3){echo "hidden";}elseif($priv_s == 4 and $user_details['priv'] <= 4){
          echo "hidden";
        } ?> class="btn btn-warning m-2 add-btn" href="?do=add" >ADD</a>
<h2 style="text-align:center;letter-spacing:2px;font-weight:bolder;color:#fff;background:#044981;margin:auto;">Dashboard Roles</h2><br>
<table style="width:90% ;margin:auto;" class="table table-hover table-sm table-borderless  table-light  table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Priv</th>
        <th>C O N T R O L</th>
    </tr>
</thead>
<tbody>
    <?php
    $select = $connect -> query("SELECT * FROM users");
    $id = 0;
    
    foreach($select as $row){
      $priv = $row['priv']
    ?>
    <tr>
        <td><?php echo ++$id  ?></td>
        <td><?php echo $row['name']  ?></td>
        <td><?php echo $row['email']  ?></td>
        <td><?php echo $row['phone']  ?></td>
        <td><?php if($row['gender'] == 0){echo "Male";}else{echo"Female";}; ?></td>
        
        

        <td>
        <?php
          $select_priv = $connect -> query("SELECT * FROM priv WHERE id = $priv");
          $details = $select_priv -> fetch_assoc();
          echo $details['name'];
          ?>
        </td>

     
        
        
        <td 
        <?php if($priv_s == 2 and $row['priv'] < 2 ){echo "hidden";}
        elseif($priv_s == 3 and $row['priv'] < 3){echo "hidden";}elseif($priv_s == 4 and $row['priv'] <= 4){
          echo "hidden";
        } ?>
        >
            <a class="btn btn-primary" href="?do=edit&id=<?php echo$row['id'] ?> ">Edit</a>
            
                <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'];?>">
      Delete</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 style="color:crimson;font-weight:bold;" class="modal-title" id="exampleModalLabel">Modal Delete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div style="color:black;font-weight:bold;" class="modal-body">
              Are You Sure Delete : <span style="color:crimson;font-weight:bold;"> <?php echo $row['name']?> </span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-danger" href="function/delete_user.php?id=<?php echo$row['id']; ?>">Delete</a>
            </div>
          </div>
        </div>
      </div>
              </td>
          </tr>
          <?php } ?>
      </tbody>
      </table>