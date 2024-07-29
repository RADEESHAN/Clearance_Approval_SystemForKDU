<?php include("conn.php"); ?>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
      <th>Email</th>
      <th>Registration Number</th>
      <th>First Name</th>
      <th>Intake</th>
      <th>Phone Number</th>
      <th>Department</th>
      <th>Academic Year</th>
      <th>Created At</th>
      <th>HOD Status</th>
      <th>Librarian Status</th>
      <th>AB Status</th>
      <th>AR Status</th>
      <th>Adjutant Status</th>
      
    </tr>
  </thead>

  <tbody>
    <?php 
      $query = "SELECT * FROM finalatd";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['regno']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['intake']; ?></td>
        <td><?php echo $row['phonenumber']; ?></td>
        <td><?php echo $row['dept']; ?></td>
        <td><?php echo $row['acdemicyr']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td><?php echo $row['HODstatus']; ?></td>
        <td><?php echo $row['LibrarianStatus']; ?></td>
        <td><?php echo $row['AB_Status']; ?></td>
        <td><?php echo $row['AR_Status']; ?></td>
        <td><?php echo $row['Adjutant_Status']; ?></td>
        
      </tr>
    <?php } ?>
  </tbody>
</table>
