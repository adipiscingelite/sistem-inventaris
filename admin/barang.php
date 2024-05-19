<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Barang
      <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Barang</h3>
            <div class="btn-group pull-right">
              <a href="barang_tambah.php" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah Barang</a>              
            </div>
          </div>
          <div class="box-body">


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th>SPESIFIKASI</th>
                    <th>LOKASI</th>
                    <th>KONDISI</th>
                    <th>JUMLAH</th>
                    <th>SUMBER DANA</th>
                    <th>JENIS</th>
                    <th>KETERANGAN</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../db_connect.php';
                  $no=1;
                  $data = $myConn->query("SELECT * FROM barang");
                  while($d = $data->fetch_array()){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['barang_nama']; ?></td>
                      

                      <td>                        
                        <a class="btn btn-warning btn-sm" href="barang_edit.php?id=<?php echo $d['barang_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="barang_hapus_konfir.php?id=<?php echo $d['barang_id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>