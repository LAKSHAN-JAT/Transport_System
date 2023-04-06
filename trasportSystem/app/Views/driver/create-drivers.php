<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-nurse"></i><i class="fa-solid fa-plus"></i>  &nbsp; Create Driver</h1>
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
                                    <a href="<?= base_url('drivers')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                                        <label>Employee No**</label>
                                                        <input type="text" class="form-control border border-info rounded <?php echo (isset($validation) && $validation->hasError('emp_no'))? 'is-invalid' : '';?>" id="emp_no" name = "emp_no" value="<?php echo set_value('emp_no')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('emp_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('emp_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputlname">Finger Print No.**</label>
                                                        <input type="text" class="form-control border border-info <?php echo (isset($validation) && $validation->hasError('finger_print_no'))? 'is-invalid' : '';?>" id="finger_print_no" name= "finger_print_no"value="<?php echo set_value('finger_print_no')?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('finger_print_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('finger_print_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                <div class="form-group col-md-4">
                                                        <label>Driver NIC**</label>
                                                        <input type="text" class="form-control border border-info rounded <?php echo (isset($validation) && $validation->hasError('nic'))? 'is-invalid' : '';?>" id="nic" name = "nic" value="<?php echo set_value('nic')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('nic')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('nic').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                      <div class="form-group col-md-4">
                                                        <label for="inputlname">Name with initials**</label>
                                                        <input type="text" class="form-control border border-info <?php echo (isset($validation) && $validation->hasError('name_with_initials'))? 'is-invalid' : '';?>" id="name_with_initials" name= "name_with_initials" value="<?php echo set_value('name_with_initials')?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('name_with_initials')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('name_with_initials').'</p>';
                                                                 }   
                                                        ?>
                                                    </div>
                                                     <div class="form-group col-md-4">
                                                        <label>Contact No.**</label>
                                                        <input type="text" class="form-control border border-info rounded <?php echo (isset($validation) && $validation->hasError('phone'))? 'is-invalid' : '';?>" id="phone" name = "phone" value="<?php echo set_value('phone')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('phone')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('phone').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
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