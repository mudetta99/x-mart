


<div class="container mt-3">
  <h2>Blog</h2>
  
  <a class="btn btn-warning rounded-pill " href="?do=add">Add<span class="badge bg-danger rounded-pill">Blog</span></a>
          
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Publisher</th>
        <th>Date</th>
        <th>Description</th>
        <th>CONTROL</th>

      </tr>
    </thead>
    <tbody>

        <?php
            $select = $connect -> query("SELECT * FROM blog");
            $id = 1;
            foreach($select as $row){
                ?>
                <tr>
                    <td><?php echo$id++ ?></td>
                    <td><?php echo$row['img']?></td>
                    <td><?php echo$row['title'] ?></td>
                    <td><?php echo$row['publisher'] ?></td>
                    <td><?php echo$row['date'] ?></td>
                    <td><?php echo$row['description'] ?></td>
                    <td><a class="btn btn-primary" href="?do=edit&id=<?php echo$row['id'] ?> ">Edit</a>
                    
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
              Are You Sure Delete : <span style="color:crimson;font-weight:bold;"> <?php echo $row['title']?> </span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-danger" href="function/delete_blog.php?id=<?php echo$row['id']; ?>">Delete</a>
            </div>
          </div>
        </div>
      </div>
              </td>
          </tr>  

                  
                    
                    </td>

                    
                </tr>


            <?php } ?>

    
    

    </tbody>
  </table>
</div>


