<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-plus"></i>  &nbsp; Create Staff</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Information</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('staff')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                            
                                            <?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-plus"></i>  &nbsp; Create Staff</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Information</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('staff')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                            
                                            

                                        
                                            </div>
                                             <form name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Name**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('name'))? 'is-invalid' : '';?>" id="name" name = "name" value="<?php echo set_value('name')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('name')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('name').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputlname">NIC**</label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('nic'))? 'is-invalid' : '';?>" id="nic" name= "nic"value="<?php echo set_value('nic')?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('nic')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('nic').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputeAddress">Branch**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('branch'))? 'is-invalid' : '';?>" id="branch" name="branch" value="<?php echo set_value('branch')?>">
                                                     <?php
                                                                 if(isset($validation) && $validation->hasError('branch')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('branch').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputphone">Contact No.**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('contact_no'))? 'is-invalid' : '';?>" id="contact_no" name="contact_no" value="<?php echo set_value('contact_no')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('contact_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('contact_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAddress">Photo**</label>
                                                        <input type="file" class="form-control <?php echo (isset($validation) && $validation->hasError('photo'))? 'is-invalid' : '';?>" id="photo" name="photo" value="<?php echo set_value('photo')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('photo')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('photo').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputpass">Employee No.**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('employee_no'))? 'is-invalid' : '';?>" id="employee_no" name="employee_no" value="<?php echo set_value('employee_no')?>">

                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('employee_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('employee_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                 <div class="form-group  col-md-4">
                                                    <label for="inputcpass">Finger Print No.**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('finger_print_no'))? 'is-invalid' : '';?>" id="finger_print_no" name="finger_print_no" value="<?php echo set_value('finger_print_no')?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('finger_print_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('finger_print_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                   

                                                <div class="form-group col-md-4">
                                                        <label>Address**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('address'))? 'is-invalid' : '';?>" id="address" name = "address" value="<?php echo set_value('address')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('address')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('address').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                </div>
                                                 
                                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>&nbsp; Save</button>
                                             </form>
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

                                        
                                            </div>
                                            
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