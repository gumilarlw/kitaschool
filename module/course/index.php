<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create"><i class="fa fa-plus"></i></a></span>
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> Tabel dengan data <?php echo strtoupper($_GET['module']) ?></p>
    </div>
    <div class="card-body">
      <div class="p-2">
        <?php 
        if (isset($_SESSION['flash'])): ?>
          <div class="<?php echo $_SESSION['flash']['class']; ?> mt-3 mb-3"> 
            <i class="<?php echo $_SESSION['flash']['icon'] ?>"></i> <?php echo $_SESSION['flash']['label']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
        <?php endif ?>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>#</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nama</th>
            <th>Guru</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td>1</td>
              <td>IP123456</td>
              <td>Agama Islam</td>
              <td>Sinta Yulia</td>
              <td>X IPA 3</td>
              <td>
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>              
            <tr>                
              <td>2</td>
              <td>IP123456</td>
              <td>Matematika</td>
              <td>Fanny Wibianka</td>
              <td>X IPA 4</td>
              <td>
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>                
              <td>2</td>
              <td>1123457</td>
              <td>TIK</td>
              <td>Chairul Rizki</td>
              <td>I</td>
              <td>
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>