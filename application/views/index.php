<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Employee Management System</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-info text-white text-center py-3">
                    <h1 class="mb-0 font-weight-bold">Employee Management System</h1>
                    <button class="btn btn-light btn-lg float-right" data-toggle="modal" data-target="#exampleModal">
                        <strong>+</strong> Add Employee
                    </button>
                </div>
                
                <div class="card-body p-4">
                    <?php if($this->session->flashdata('inserted')): ?>
                        <div class='alert alert-success text-center'>
                            <?php echo $this->session->flashdata('inserted'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if($this->session->flashdata('updated')): ?>
                        <div class='alert alert-success text-center'>
                            <?php echo $this->session->flashdata('updated'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if($this->session->flashdata('delete')): ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('delete'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>NAME</th>
                                    <th>POSITION</th>
                                    <th>SALARY</th>
                                    <th>CONTACT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($employee as $emp): ?>
                                    <tr>
                                        <td><?php echo $emp['id']; ?></td>
                                        <td><?php echo $emp['name']; ?></td>
                                        <td><?php echo $emp['position']; ?></td>
                                        <td><?php echo $emp['salary']; ?></td>
                                        <td><?php echo $emp['contact_info']; ?></td>
                                        <td>
                                            
                                                <a href="<?php echo base_url(); ?>employee/edit/<?php echo $emp['id']; ?>" class="btn  btn-success">Edit</a>
                                                <a href="<?php echo base_url(); ?>employee/delete/<?php echo $emp['id']; ?>" class="btn  btn-danger">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Add Employee Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="<?php echo base_url(); ?>employee/add" method='POST'>
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="text" name="position" class="form-control" placeholder="Enter Your Position" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="number" name="salary" step="0.01" class="form-control" placeholder="Enter Your Salary" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" name="contact" class="form-control" placeholder="Enter Your Contact" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Add Employee</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

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
