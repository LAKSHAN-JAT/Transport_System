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
                                            
                                            

                                        
                                            </div>
                                             <form name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>First Name**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('firstName'))? 'is-invalid' : '';?>" id="firstName" name = "firstName" value="<?php echo set_value('firstName')?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('firstName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('firstName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputlname">Last Name**</label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('lastName'))? 'is-invalid' : '';?>" id="lastName" name= "lastName"value="<?php echo set_value('lastName')?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('lastName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('lastName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputeAddress">Email Address**</label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('email'))? 'is-invalid' : '';?>" id="email" name="email" value="<?php echo set_value('email')?>">
                                                     <?php
                                                                 if(isset($validation) && $validation->hasError('email')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('email').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputphone">Phone Number**</label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('phone'))? 'is-invalid' : '';?>" id="phone" name="phone" value="<?php echo set_value('phone')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('phone')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('phone').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAddress">Address**</label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('address'))? 'is-invalid' : '';?>" id="address" name="address" value="<?php echo set_value('address')?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('address')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('address').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="form-group  col-md-4">
                                                    <label for="inputpass">Password**</label>
                                                    <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('pass'))? 'is-invalid' : '';?>" id="pass" name="pass" value="<?php echo set_value('pass')?>">

                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('pass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('pass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                 <div class="form-group  col-md-4">
                                                    <label for="inputcpass">Confirm Password**</label>
                                                    <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('cpass'))? 'is-invalid' : '';?>" id="cpass" name="cpass" value="<?php echo set_value('cpass')?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('cpass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('cpass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                <div class="form-group  col-md-4">
                                                    <label for="inputImage">Image**</label>
                                                    <input type="file" class="form-control <?php echo (isset($validation) && $validation->hasError('image'))? 'is-invalid' : '';?>" id="image" name="image" value="<?php echo set_value('image')?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('image')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('image').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>

                                                 <div class="form-group col-md-4">
                                                        <label for="inputState">Group**</label>
                                                        <select name = "group" id="group" class="form-control <?php echo (isset($validation) && $validation->hasError('group'))? 'is-invalid' : '';?>" name="group" value="<?php echo set_value('group')?>">
                                                            <option selected="">Choose...</option>
                                                            <option value="1">Super Admin</option>
                                                            <option value="2">Admin</option>
                                                       </select>
                                                    </div>
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('group')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('group').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>

                                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i> Save</button>
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