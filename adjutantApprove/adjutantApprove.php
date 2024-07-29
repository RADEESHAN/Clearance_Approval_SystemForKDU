<?php
include("Database.php");
include("ClearanceApplication.php");

$database = new Database();
$db = $database->getConnection();

$clearanceApplication = new ClearanceApplication($db);

// Include PHPMailer and other necessary settings here
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Function to send an email using PHPMailer
function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pramuditharadeeshan@gmail.com'; // Your Gmail email address
        $mail->Password = 'hciocxtwhcbniwke'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('pramuditharadeeshan@gmail.com', 'KDU Clearance management system');
        $mail->addAddress($to);
        $mail->isHTML(true);

        // Email content
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['approve'])) {
    $id = $_POST['id'];
    
    // Retrieve the student's email address from the database
    $query = "SELECT email FROM applyclearance WHERE id = '$id'";
    $result = mysqli_query($db, $query); // Use $db instead of $conn
    $row = mysqli_fetch_assoc($result);
    $studentEmail = $row['email'];

    // Send an email to the student
    $subject = "Clearance Approval";
    $message = "Your clearance request has been approved.";
    sendEmail($studentEmail, $subject, $message);
}

if (isset($_POST['reject'])) {
    $id = $_POST['id'];

    // Retrieve the student's email address from the database
    $query = "SELECT email FROM applyclearance WHERE id = '$id'";
    $result = mysqli_query($db, $query); // Use $db instead of $conn
    $row = mysqli_fetch_assoc($result);
    $studentEmail = $row['email'];

    // Send an email to the student
    $subject = "clearance Rejection";
    $message = "Your clearance request has been rejected.";
    sendEmail($studentEmail, $subject, $message);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['approve'])) {
        $id = $_POST['id'];
        if ($clearanceApplication->approveApplication($id)) {
            header("Location: adjutantApprove.php");
            exit;
        } else {
            echo "Error updating record.";
        }
    }

    if (isset($_POST['reject'])) {
        $id = $_POST['id'];
        if ($clearanceApplication->rejectApplication($id)) {
            header("Location: adjutantApprove.php");
            exit;
        } else {
            echo "Error updating record.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pending, Approved, and Reject Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    .btn-success {
        background-color: #28a745;
        color: white;
    }
    .btn-danger {
        background-color: #dc3545;
        color: white;
    }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.kdu.ac.lk" target="_blank">
            <img src="kdu-logo2.png" alt="KDU Logo" width="180" height="40" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav text-center">
                <!-- Replace the href with the appropriate URLs for your pages -->
                <li class="nav-item"><a class="nav-link" href="/Clearnce/adjutant/adjutant.php">Home</a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>

<h1 class="text-center text-white bg-dark col-md-12">PENDING LIST</h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
        <th scope="col">Medical No</th>
        <th scope="col">Email</th>
        <th scope="col">Registration No</th>
        <th scope="col">Name</th>
        <th scope="col">Intake</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Department</th>
        <th scope="col">Academic Year</th>
        <th scope="col">Created At</th>
        <th scope="col">HOD Status</th>
        <th scope="col">Librarian Status</th>
        <th scope="col">AB Status</th>
        <th scope="col">AR Status</th>
        <th scope="col">Adjutant Status</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$result = $clearanceApplication->getPendingApplications();
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
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
        <form action="adjutantApprove.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="submit" name="approve" value="Approve" class="btn btn-success"> &nbsp;
          <input type="submit" name="reject" value="Reject" class="btn btn-danger">
        </form>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>

<!-- Approved List Table -->

<h1 class="text-center text-white bg-success col-md-12">APPROVED LIST</h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
        <th scope="col">Medical No</th>
        <th scope="col">Email</th>
        <th scope="col">Registration No</th>
        <th scope="col">Name</th>
        <th scope="col">Intake</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Department</th>
        <th scope="col">Academic Year</th>
        <th scope="col">Created At</th>
        <th scope="col">HOD Status</th>
        <th scope="col">Librarian Status</th>
        <th scope="col">AB Status</th>
        <th scope="col">AR Status</th>
        <th scope="col">Adjutant Status</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$result = $clearanceApplication->getApprovedApplications();
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
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
        <form action="adjutantApprove.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="submit" name="reject" value="Reject" class="btn btn-danger">
        </form>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>

<!-- Reject List Table -->

<h1 class="text-center text-white bg-danger col-md-12">REJECT LIST</h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
        <th scope="col">Medical No</th>
        <th scope="col">Email</th>
        <th scope="col">Registration No</th>
        <th scope="col">Name</th>
        <th scope="col">Intake</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Department</th>
        <th scope="col">Academic Year</th>
        <th scope="col">Created At</th>
        <th scope="col">HOD Status</th>
        <th scope="col">Librarian Status</th>
        <th scope="col">AB Status</th>
        <th scope="col">AR Status</th>
        <th scope="col">Adjutant Status</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$result = $clearanceApplication->getRejectedApplications();
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
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
        <form action="adjutantApprove.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="submit" name="approve" value="Approve" class="btn btn-success">
        </form>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>

</body>
</html>
