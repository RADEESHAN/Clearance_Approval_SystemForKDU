<?php 
include("conn.php"); 






if (isset($_POST['approve'])) {
    if (!empty($_POST['id'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        // Select the data from the applyclearance table based on the ID
        $selectQuery = "SELECT email, regno, firstname, intake, phonenumber, dept, acdemicyr, created_at, HODstatus, LibrarianStatus, AB_Status, AR_Status, Adjutant_Status FROM applyclearance WHERE id = $id";
        $selectResult = mysqli_query($conn, $selectQuery);

        if ($selectResult) {
            $row = mysqli_fetch_array($selectResult);

            // Insert the data into the finalatd table
            $insertQuery = "INSERT INTO finalatd (email, regno, firstname, intake, phonenumber, dept, acdemicyr, created_at, HODstatus, LibrarianStatus, AB_Status, AR_Status, Adjutant_Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $row['email'], $row['regno'], $row['firstname'], $row['intake'], $row['phonenumber'], $row['dept'], $row['acdemicyr'], $row['created_at'], $row['HODstatus'], $row['LibrarianStatus'], $row['AB_Status'], $row['AR_Status'], $row['Adjutant_Status']);

            if (mysqli_stmt_execute($stmt)) {
                // Data successfully copied to finalatd table
            } else {
                // Handle the error if the insertion fails
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            // Handle the error if the selection fails
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: ID is missing.";
    }
}

if (isset($_POST['approve'])) {
    if (!empty($_POST['id'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        
        // When pressing approve to update status as 'Medical Approve'
        $updateQuery = "UPDATE applyclearance SET Final_Stats = 'Approve' WHERE id = '$id'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if (!$updateResult) {
            // Handle the error if the update fails
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: ID is missing.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .btn-approve {
            background-color: #28a745; /* Green color */
            color: white;
        }
    </style>
</head>
<body>
<div>
    <!--?php include("hodnavbar.html") ?-->
</div>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.kdu.ac.lk" target="_blank">
            <img src="kdu-logo2.png" alt="KDU Logo" width="180" height="35" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Your other navigation items here -->
            </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Move Home to the right side -->
            <li class="nav-item"><a class="nav-link" href="../MA/ma.php">Home</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>

<h1 class="text-center text-white bg-dark col-md-12">LIST OF Adjutant APPROVE MEDICAL</h1>

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
            <th>Action</th>
        </tr>
    </thead>
    <?php 
    $query = "SELECT id, email, regno, firstname, intake, phonenumber, dept, acdemicyr, created_at, HODstatus, LibrarianStatus, AB_Status, AR_Status, Adjutant_Status FROM applyclearance WHERE Adjutant_Status = 'Approved' AND Final_Stats = 'pending'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) { ?>
    <tbody>
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
            <td>
                <form action="viewIndex.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                    <input type="submit" name="approve" value="Approve" class="btn btn-approve">
                </form>
            </td>
        </tr>
    </tbody>
    <?php } ?>
</table>

<h1 class="text-center text-white bg-success col-md-12">APPROVED LIST FINALIST AND FINISH</h1>
<div class="col-md-12 head">
    <div class="float-right">
        <a href="export.php" class="btn btn-success"><i class="dwn"></i>Export</a>    
    </div>
    <hr>
</div>

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
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT id, email, regno, firstname, intake, phonenumber, dept, acdemicyr, created_at, HODstatus, LibrarianStatus, AB_Status, AR_Status, Adjutant_Status FROM finalatd";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>
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
            <td>
                <form action="viewIndex.php" method="POST">
                    <input type="hidden" name="remove_id" value="<?php echo $row['id']; ?>"/>
                    <input type="submit" name="remove" value="Remove" class="btn btn-danger">
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php 
if (isset($_POST['remove'])) { // when pressing remove, delete the selected record
    if (!empty($_POST['remove_id'])) {
        $remove_id = mysqli_real_escape_string($conn, $_POST['remove_id']);
        $deleteQuery = "DELETE FROM finalatd WHERE id = '$remove_id'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if ($deleteResult) {
            // Record successfully deleted
        } else {
            // Handle the error if deletion fails
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: ID is missing.";
    }
}
?>

</body>
</html>
