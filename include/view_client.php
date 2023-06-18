




   
  <table style="width:95%;margin:auto"  class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>CONTROL</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
            $id = 1;
            $select = $connect -> query("SELECT * FROM client");
            foreach($select as $row):
        ?>
      <tr>
        <td><?php echo$id++ ?></td>
        <td><?php echo$row['name'] ?></td>
        <td><?php echo$row['last_name'] ?></td>
        <td><?php echo$row['email'] ?></td>
        <td><?php echo$row['phone'] ?></td>
        <td>
          


                
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
              <a class="btn btn-danger" href="function/delete_client.php?id=<?php echo$row['id']; ?>">Delete</a>
            </div>
          </div>
        </div>
      </div>
            

        </td>
      </tr>
                
      <?php endforeach ?>
    </tbody>
  </table>
</div>