<section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>DATA SISWA</h2>
            </div> -->           

            <?php 
            // ERROR Warning
            echo validation_errors('<div class="alert alert-warning">', '</div>');

            // ATRIBUT
            $atribut = '';

            // FORM OPEN
            echo form_open(base_url('saldo/tambah'), $atribut);
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
                            <form class="form-horizontal" action="<?=base_url('anggota/tambah');?>" method="post">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Anggota</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="anggota_id" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <?php 
                                                        foreach ($anggota as $anggota) {
                                                        echo '<option value="'.$anggota->id_anggota.'" name="anggota_id">'.$anggota->nama_anggota.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Barang</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="barang_id" id="barang_id" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <?php 
                                                        foreach ($barang as $barang) {
                                                        echo '<option value="'.$barang->id_barang.'" name="barang_id">'.$barang->nama_barang.'</option>';
                                                        }
                                                        
                                                    ?>
                                                </select>
                                                <?php 
                                                // var_dump($saldo);
                                                // exit();

                                                ?>
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
                                                <input name="jumlah" id="jumlah" type="text" class="form-control"  value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Harga Satuan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="harga_satuan" type="text" class="form-control" placeholder="Harga Satuan" 
                                                value="
                                                    <?php
                                                 $attributes = array('class' => 'form-inline','id'=>'myform');
                                                 echo form_open('', $attributes);
                                                 ?>
                                                " required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Total Harga</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="total_harga" type="text" class="form-control" placeholder="Total Harga" required>
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

    <!-- Jquery Core Js -->
    <script src="<?=base_url('plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('plugins/bootstrap/js/bootstrap.js');?>"></script>

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