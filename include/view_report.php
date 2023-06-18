

<div class="container mt-3">
  <h2>▒Reportes▒</h2>
  <!-- <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>             -->
  <table class="table table-light table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID_C</th>
        <th>ID_P</th>
        <th>Report</th>
        <th>Date</th>
        <th>Sold</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            $id = 1;
            $select = $connect -> query("SELECT * FROM report");
            foreach($select as $row){
                ?>

             

      <tr>
        <td><?php echo$id++ ?></td>
        <td><?php echo$row['id_c'] ?></td>
        <td><?php echo$row['id_p'] ?></td>
        <td><?php echo$row['report'] ?></td>
        <td><?php echo$row['date'] ?></td>
        <td><?php echo$row['sold'] ?></td>

      </tr>
      <?php } ?>

      </tr>
    </tbody>
  </table>
</div>


