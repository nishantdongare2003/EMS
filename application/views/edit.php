<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h3 class="font-weight-light mb-0">Edit Employee Details</h3>
                    </div>
                    <div class="card-body p-5">
                        <form action="<?php echo base_url(); ?>employee/update/<?php echo $employees['id']; ?>" method='POST'>
                            <input type="hidden" name="id" value='<?php echo $employees['id']; ?>'>

                            <div class="form-group mb-4">
                                <label for="name" class="text-dark mb-2">Full Name</label>
                                <input type="text" id="name" name="name" value='<?php echo $employees['name']; ?>'
                                    class="form-control form-control-lg border-dark" placeholder="John Doe" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="position" class="text-dark mb-2">Job Position</label>
                                <input type="text" id="position" name="position" value='<?php echo $employees['position']; ?>'
                                    class="form-control form-control-lg border-dark" placeholder="Software Engineer" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="salary" class="text-dark mb-2">Monthly Salary</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-dark">₹</span>
                                    </div>
                                    <input type="number" id="salary" name="salary" value='<?php echo $employees['salary']; ?>'
                                        step="0.01" class="form-control form-control-lg border-dark"
                                        placeholder="5000.00" required>
                                </div>
                            </div>

                            <div class="form-group mb-5">
                                <label for="contact" class="text-dark mb-2">Contact Number</label>
                                <input type="text" id="contact" name="contact" value='<?php echo $employees['contact_info']; ?>'
                                    class="form-control form-control-lg border-dark"  required>
                            </div>

                            <div class="form-group mt-5 d-flex justify-content-between">
                                <a href="<?php echo base_url(); ?>employee" class="btn btn-outline-danger btn-lg px-4">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-success btn-lg px-4">
                                    Update Employee
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>