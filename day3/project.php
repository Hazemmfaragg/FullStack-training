<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Task3</title>
    <style>
        
    </style>
</head>

<body class=" p-3 bg-dark-subtle ">
    <div class="container">
        <div class=" row d-flex justify-content-center">
            <div class="col-6">
                <h1 class="d-flex justify-content-center m-3 ">Student Register Form </h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="validationServer01" class="form-label">Fullname</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationServer01" class="form-label">Email</label>
                            <input type="email" class="form-control is-valid" id="validationServer01" value="Mark"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationServer01" class="form-label">Age</label>
                            <input type="number" class="form-control is-valid" id="validationServer01" value="Mark"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                        <label for="validationServer04" class="form-label">Gender</label>
                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                        <option >Male</option>
                        <option>Female</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer01" class="form-label">Degree</label>
                            <input type="number" class="form-control is-valid" id="validationServer01" value="Mark"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Notes</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Required any notes" required></textarea>
                        <div class="invalid-feedback">
                          Please enter a message in the textarea.
                        </div>
                        </div>


                        <div class="d-flex justify-content-center">
                        <div class="col-3 p-1">
                            <button class="btn btn-primary w-100 mb-3 mt-2 bg-success" type="submit">Submit form</button>
                        </div>
                        <div class="col-3 p-1">
                            <button type="button" class="btn btn-primary w-100 mb-3 mt-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                More
                            </button>

                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Student List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
        <div class=" row d-flex justify-content-center">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            
                            <th scope="col">Name</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x=90;
                        $y=70;
                        $z=40;
                        function result($marks) 
                        {
                           if($marks >=85){
                            echo"Excellent";
                           }
                           elseif($marks>=77){
                            echo"very Good";
                           }
                           elseif ($marks>=70){
                            echo "Good";
                           }
                           elseif ($marks>=50){
                            echo "Pass";
                           }
                           else {
                            echo "Failed";
                           }


                        } ?>
                        <tr>
                            <?php ?>
                            <td>Hazem Farag</td>
                            <td><?php echo"$x";?></td>
                            <td><?php result($x); ?></td>
                        </tr>
                        <tr class="table-light">
                          
                            <td>Mo Bor5a</td>
                            <td><?php echo"$y"; ?></td>
                            <td><?php result($y); ?></td>
                        </tr>
                        <tr>
                          
                            <td>Yamin Yamal</td>
                            <td><?php echo"$z"; ?></td>
                            <td><?php result($z); ?></td>
                        </tr>
                    </tbody>

                </table>
                 </div>
        </div>
    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>