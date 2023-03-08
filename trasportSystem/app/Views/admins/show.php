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
                                               <th>#</th>
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
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                 <td>$320,800</td>
                                                  <td>$320,800</td>
                                                   <td>$320,800</td>
                                                    <td>
                                                        <a href="#"  class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>  
                                                      <a href="#"  class="btn btn-danger"><i class="fa fa-trash"> Delete</a>                                                                                                                                                                
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
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