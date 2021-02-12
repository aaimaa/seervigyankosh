<?php $this->load->view('web/layouts/header');?>

<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $title;?></li>
      </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- contact -->
    <div class="contact py-5">
      <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5" >
          <?php echo $title;?>
          <span class="font-weight-bold"></span>
        </h3>
        <!-- form -->
        <form action="#" method="post">
          <div class="contact-grids1 w3agile-6">
            <div class="row">
              <div class="col-md-12 col-sm-12 contact-form1 form-group" >
                <table id="labharthi" class="table table-striped table-bordered" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Father's Name</th>
                      <th>Contact</th>
                      <th>City/Village</th>
                      <th>Email</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  
              </table>
              </div>
            </div>
          </div>
        </form>
        <div id="test"></div>
        <!-- //form -->
      </div>
    </div>
    <!-- //contact -->    
    <?php $this->load->view('web/layouts/footer');?>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script>
  var table = $('#labharthi').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": {
      url : "<?php echo base_url('labharthi-list'); ?>",
      type : 'GET'
    },
  });

</script>