<?php require "header.php"; ?>

<?php
  $sql = 'select * from myguests order by id desc';
  $result = $conn->query($sql);
  
?>

    <h2 class="col-md-12 mb-3">Form Pagination</h2>
    <div class="col-md-12 mb-3">
      <a href="insert.php" class="btn btn-primary">Add new</a>
    </div>
    <div class="col-md-12 table-responsive">
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">email</th>
            <th scope="col">Profile</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          <?php if ($result->num_rows):?>

            <?php while($r = $result->fetch_assoc()) {?>

              <tr>
                <td>
                  <?php echo $r['id']; ?>
                </td>
                <td>
                  <?php echo $r['firstname']; ?>
                </td>
                <td>
                  <?php echo $r['lastname']; ?>
                </td>
                <td>
                  <?php echo $r['email']; ?>
                </td>
                <td>
                  <img src="<?php echo $r['profile']; ?>" alt="">
                </td>
                <td>
                  <a href="" class="btn btn-light btn-sm">Delete</a>
                  <a href="" class="btn btn-light btn-sm">Edit</a>
                </td>
              </tr>

            <?php } ?>
          <?php else: ?>

            <tr>
              <td colspan="6" class="text-center">Empty</td>
            </tr>

          <?php endif;?>
          
        </tbody>
      </table>
    </div>

    <nav class="col-md-12" aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

<?php require "footer.php"; ?>