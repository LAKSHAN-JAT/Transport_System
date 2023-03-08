<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-plus"></i> Create Admins</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Informations</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('admins')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-undo"></i> Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            
                                             <form name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control rounded" id="firstName" name = "firstName" <?php echo (isset($validation) && $validation->hasError('firstName'))? 'is-invalid' : '';?>>
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('firstName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('firstName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputlname">Last Name</label>
                                                        <input type="text" class="form-control" id="lname">
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputeAddress">Email Address</label>
                                                    <input type="text" class="form-control" id="email">
                                                </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputphone">Phone Number</label>
                                                        <input type="text" class="form-control rounded" id="phone">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="address">
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputpass">Password</label>
                                                    <input type="password" class="form-control" id="pass">
                                                </div>
                                                 <div class="form-group  col-md-4">
                                                    <label for="inputcpass">Confirm Password</label>
                                                    <input type="password" class="form-control" id="cpass">
                                                </div>
                                                <div class="form-group  col-md-4">
                                                    <label for="inputImage">Image</label>
                                                    <input type="file" class="form-control" id="image">
                                                </div>

                                                 <div class="form-group col-md-4">
                                                        <label for="inputState">Group</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            <option>Super Admin</option>
                                                            <option>Admin</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i> Save</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>