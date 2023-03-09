<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user"></i> Admins</h1>
            </ul>
          </div>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Information Admins</h4></div>
                                <div class="btn-group mb-2">
                                    <a href="<?= base_url('admins/create')?>"><button type="button" class="btn btn-outline-primary rounded-btn btn-lg"><i class="fa-solid fa-plus"></i> Create New</button></a>
                                </div>
                         </div>
                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->
     <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email Address</th>
                                                <th>Phone</th>
                                                <th>Group</th>
                                                <th>status</th>
                                                <th>Date</th>
                                                <th width = "200">Manage</th>
                                            </tr>
                                            <?php if(!empty($admins)){
                                                
                                                foreach($admins as $admin){
                                                
                                                
                                                ?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $admin['image']?></td>
                                                <td><?php echo $admin['firstName']?></td>
                                                <td><?php echo $admin['lastName']?></td>
                                                <td><?php echo $admin['email']?></td>
                                                <td><?php echo $admin['phone']?></td>
                                             <td><?php echo $admin['groups']?></td>
                                                 <td><?php echo $admin['Status']?></td>
                                                   <td><?php echo $admin['Date']?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('admins/edit/'.$admin['id']);?>"  class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                                         <a href="#"  class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                            <?php } 
                                            }
                                            else{?>
                                                <tr>
                                                    <td colspan="9">Records not found</td>
                                                </tr>
                                                <?php }?>
                                    </table>
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