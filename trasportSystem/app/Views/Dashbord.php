<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">

          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-house"></i> &nbsp;Dashboard</h1>
            </ul>
          </div>

                   <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="<?=base_url()?>/template/template/assets/img/avatar/Admin.png" class="rounded-circle" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Total Registered</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('admins')?>">ADMINS</a></h6>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM admins ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                 <img src="<?=base_url()?>/template/template/assets/img/avatar/users5.png" class="rounded-circle" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Registered Staff</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('staff')?>">MEMBERS</a></h6>
                               
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM staff ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="dist\images\money.png" alt="money" class="float-right">
                                <h6 class="card-title font-weight-bold">Total Sale</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Last Months</h6>
                                <h2>$38,524</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="dist\images\wallet.png" alt="wallet" class="float-right">
                                <h6 class="card-title font-weight-bold">Total Profit</h6>
                                <h6 class="card-subtitle mb-2 text-muted">In February-2019</h6>
                                <h2>$78,245 </h2>
                            </div>
                        </div>
</div>-->

                    
        </section>

<?= $this->endSection() ?>