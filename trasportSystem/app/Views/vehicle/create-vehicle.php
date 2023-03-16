<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-car"></i>  &nbsp; Create Vehicle</h1>
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
                                    <a href="<?= base_url('vehicles')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
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
                                                        <label>License Plate No**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('license_plate_no'))? 'is-invalid' : '';?>" id="license_plate_no" name = "license_plate_no" value="<?php echo set_value('license_plate_no')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('license_plate_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('license_plate_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputlname">Chassis No**</label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('chassis_no'))? 'is-invalid' : '';?>" id="chassis_no" name= "chassis_no"value="<?php echo set_value('chassis_no')?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('chassis_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('chassis_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputeAddress">Engine No**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('engine_no'))? 'is-invalid' : '';?>" id="engine_no" name="engine_no" value="<?php echo set_value('engine_no')?>">
                                                     <?php
                                                                 if(isset($validation) && $validation->hasError('engine_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('engine_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputphone">Model**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('model'))? 'is-invalid' : '';?>" id="model" name="model" value="<?php echo set_value('model')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('model')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('model').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAddress">Color**</label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('color'))? 'is-invalid' : '';?>" id="color" name="color" value="<?php echo set_value('color')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('color')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('color').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputpass">Manufacture Year**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('m_year'))? 'is-invalid' : '';?>" id="m_year" name="m_year" value="<?php echo set_value('m_year')?>">

                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('m_year')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('m_year').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                 <div class="form-group  col-md-4">
                                                    <label for="inputcpass">Mileage**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('mileage'))? 'is-invalid' : '';?>" id="mileage" name="mileage" value="<?php echo set_value('mileage')?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('mileage')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('mileage').'</p>';
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