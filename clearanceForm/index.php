

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data enetr</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assests/fontawesome/fontawesome-free-5.15.3-web/css/all.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>


    
    


 
  <div class="card-header">
   <h1 class="text-center">Enter your details for Apply a clearance.</h1>
  </div>
  <div class="card-body">
    <!--h2 class"text-center"--><!--?php echo $response; ?></h2-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <p class="text-danger">* required fields </p>
                    </div>
                    <form id="medi_upload_form" enctype="multipart/form-data" method="POST" ><!--user controller wala case eke thiyen type eka-->
                    <!--farmer email and farmer id-->
                        <div class="row mt-3">
                            <div class="col-sm-2 text-muted">
                                <label for="" class="control-label">Email <i class="text-danger">*</i></label>
                                <span id="emailError" class="text-danger"></span> <!-- Error message container -->
                            </div>
                            <div class="col-sm-4 text-muted">
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-sm-2 text-muted">
                                <label for="" class="control-label"> Register Number <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-4 text-muted">
                                <input type="text" name="regno" id="regno" class="form-control" required onblur="getUserData()">
                            </div>
                        
                        </div>




                        <!--fname and lname-->
                        <div class="row mt-3">
                            <div class="col-sm-2 text-muted">
                                <label for="" class="control-label">Full Name <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-4 text-muted">
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>
                            <div class="col-sm-2 text-muted">
                            <label for="intakeSelect" class="control-label">Intake <i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-4 text-muted">
                            <select name="intake" id="intakeSelect" class="form-control" required>
                                <option value="intake39">Intake 39</option>
                                <option value="intake38">Intake 38</option>
                                <option value="intake37">Intake 37</option>
                                <option value="intake40">Intake 40</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        </div>

                        



                        <!--contact number-->


                        <div class="row mt-3">
                            <div class="col-sm-2 text-muted">
                                <label for="" class="control-label">Contact Number <i class="text-danger">*</i></label>
                                
                            </div>
                            <div class="col-sm-4 text-muted">
                                <input type="number" name="phonenumber" id="phonenumber" class="form-control" required>
                            </div>

                      
                            </div-->

                            <div class="col-sm-2 text-muted">
                            <label for="deptSelect" class="control-label">Department <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-4 text-muted">
                            <select name="dept" id="deptSelect" class="form-control" required>
                            <option value="IT">IT</option>
                            <option value="department2">QS</option>
                            <option value="servay">servay</option>
                            <option value="Archi">Archi</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                        </div>



                        <div class="row mt-3">
                          

                            <div class="col-sm-2 text-muted">
                            <label for="acdemicyr" class="control-label">Academic Year <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-4 text-muted">
                            <select name="acdemicyr" id="acdemicyr" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          
                        </select>
                    </div>
                        </div>
                        


                        

                        <div class="row mt-4">
                            <div class="col-sm-4 text-muted">
                            <button id="submit" type="submit" class="btn btn-block button text-white text-uppercase" style="background-color: green; color: white;">Submit</button>
<i class="fa fa-save"></i>&nbsp; &nbsp; Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'DatabaseHandler.php';
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "clearanceawt";

        $dbHandler = new DatabaseHandler($servername, $username, $password, $dbname);

        $email = $_POST['email'];
        $regno = $_POST['regno'];
        $firstname = $_POST['firstname'];
        $intake = $_POST['intake'];
        $phonenumber = $_POST['phonenumber'];
        $dept = $_POST['dept'];
        $acdemicyr = $_POST['acdemicyr'];

        $result = $dbHandler->insertClearanceData($email, $regno, $firstname, $intake, $phonenumber, $dept, $acdemicyr);

        if ($result === true) {
            echo "<script>Swal.fire('Success', 'Data has been submitted successfully', 'success');</script>";
        } else {
            echo "<script>Swal.fire('Error', 'Error: " . $result . "', 'error');</script>";
        }
    }
    ?>
    
    </body>