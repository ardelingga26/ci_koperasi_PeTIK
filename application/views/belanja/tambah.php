<section class="content">
        <div class="container-fluid">
            <?php 
            //Notifikasi
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            }
            ?>
            <!-- <div class="block-header">
                <h2>DATA SISWA</h2>
            </div> -->           

            <?php 
            // ERROR Warning
            echo validation_errors('<div class="alert alert-warning">', '</div>');

            // ATRIBUT
            $atribut = '';

            // FORM OPEN
            echo form_open(base_url('belanja/tambah'), $atribut);
            ?> 
            
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $title ?>
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">                          
                            <form class="form-horizontal" action="<?=base_url('belanja/tambah');?>" method="post">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Barang</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="barang_id" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <?php 
                                                        foreach ($barang as $barang) {
                                                        echo '<option value="'.$barang->id_barang.'" name="anggota_id">'.$barang->nama_barang.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jumlah</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="jumlah" id="jumlah" type="text" class="form-control"  placeholder="Jumlah" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input placeholder="Tanggal" type="date" class="form-control datepicker" name="tanggal">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Total Belanja</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="total_belanja" type="text" class="form-control" placeholder="Total Belanja" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">                                                
                                                <input name="tgl_lahir" type="text" class="form-control date" placeholder="Ex: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="jk" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Telp.</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="telp" type="text" class="form-control" placeholder="Telpon">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">

                                        <input type="reset" name="reset" class="btn btn-danger m-t-15 waves-effect" value="Reset">                              
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
            
            
            
            
            
        </div>
    </section>

    <script src="<?=base_url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
    <script src="http://momentjs.com/moment-2.4.0.js"></script>

    

    <!-- Jquery Core Js -->
    <script src="<?=base_url('plugins/jquery/jquery.min.js');?>"></script>

    <!-- <script src="<?php echo BASE_URL; ?>/assets/plugins/jQuery/jQuery-2.2.0.min.js"></script> -->

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('plugins/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url('plugins/jquery-countto/jquery.countTo.js');?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url('plugins/raphael/raphael.min.js');?>"></script>
    <script src="<?=base_url('plugins/morrisjs/morris.js');?>"></script>

    <!-- ChartJs -->
    <script src="<?=base_url('plugins/chartjs/Chart.bundle.js');?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.resize.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.pie.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.categories.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.time.js');?>"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?=base_url('plugins/jquery-inputmask/jquery.inputmask.bundle.js');?>"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url('plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('js/admin.js');?>"></script>

    <!-- Demo Js -->
    <script src="<?=base_url('js/demo.js');?>"></script>
</body>

</html>