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
                                <img src="dist\images\traffic.png" alt="traffic" class="float-right">
                                <h6 class="card-title font-weight-bold">Total Registred</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Admins</h6>
                                <h2>26,476</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="dist\images\cart.png" alt="cart" class="float-right">
                                <h6 class="card-title font-weight-bold">New Orders</h6>
                                <h6 class="card-subtitle mb-2 text-muted">This Week</h6>
                                <h2>14,957</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
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
                    </div

                    
        </section>

<?= $this->endSection() ?>