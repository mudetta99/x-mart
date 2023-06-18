<h1 style="text-align:center;">Products:</h1>


<a class="btn btn-warning rounded-pill " href="?do=add">Add<span class="badge bg-danger rounded-pill">New Product</span></a>

<table style="width:90% ;margin:auto;" class="table table-bordered table-hover table-sm table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quan</th>
            <th>Price</th>
            <th>Sale</th>
            <th>Seller</th>
            <th>Description</th>
            <th>Image</th>
            <th>type</th>
            <th>Control</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $select = $connect -> query("SELECT * FROM products");
        $id = 1;
        $x = 1;

        foreach($select as $row){
        ?>
        <tr>
            <td><?php echo$id++ ?></td>
            <td><?php echo$row['name'] ?></td>
            <td><?php echo$row['quan'] ?></td>
            <td><?php echo$row['price'] ?></td>
            <td><?php echo$row['sale'] ?></td>
            <td><?php echo$row['seller'] ?></td>
            <td><?php echo$row['description'] ?></td>
            <td style="display:flex;"> 
              <?php
              $arr = explode("/",$row['img']);
              for($x=0;$x<count($arr);$x++){
                ?>
              
                <img  style='display:inline-block;border-radius:10px;margin:0 auto;' width="100px" height="100px" src="image/<?php  echo$arr[$x] ?>">
              <?php
              }
              ?>
            </td>
            <td><?php echo$row['type'] ?></td>
            <td>
                <a class="btn btn-primary" href="?do=edit&id=<?php echo$row['id']?>">Edit</a>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$id ?>">
  Delete
</button>

<!-- Modal -->
<div style="color:black;" class="modal fade" id="exampleModal<?php echo$id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You sure delete This <?php echo$row['name']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="function/delete_product.php?id=<?php echo$row['id'] ?>">Delete</a>
      </div>
    </div>
  </div>
</div>
            </td>

        </tr>
<?php } ?>
    </tbody>
</table>