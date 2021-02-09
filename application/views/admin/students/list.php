<?php $this->load->view('admin/layouts/header');?>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title;?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $title;?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title;?> List</h3>
              <a href="<?php echo base_url('admin/students/add');?>" class="btn btn-primary float-sm-right">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Profile Image</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Email</th>
                    <th>Graduation</th>
                    <th>City/Village</th>
                    <th>Added-By</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('admin/layouts/footer');?>

<script>
  var table = $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": {
      url : "<?php echo base_url('admin/students-list'); ?>",
      type : 'GET'
    },
  });

  function changeStatus(id,status){
    if(status == 1){
      var updateStatus = 'Enable';
    }else{
      var updateStatus = 'Disable';
    }
    swal({
      title: "Are you sure?",
      text: "You want to "+updateStatus+" this record!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, "+updateStatus+" it!",
      closeOnConfirm: false
    },
    function(){
      $.ajax({
        url: "<?php echo base_url('admin/students/update-status')?>",
        type: "GET",
        data: {"id":id,"status": status},
        dataType:"json",
        success: function () {
          swal("Great!", "Your records has been "+updateStatus+"d.", "success");
          table.ajax.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal("Oops!", "Please try again", "error");
        }
      });
    });
  }
  function confirmDelete(id){
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    },
    function(){
      $.ajax({
        url: "<?php echo base_url('admin/students/delete')?>",
        type: "GET",
        data: {"id":id,"table": 'students'},
        dataType:"json",
        success: function () {
          swal("Deleted!", "Your records has been deleted.", "success");
          table.ajax.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal("Error deleting!", "Please try again", "error");
        }
      });
    });
  }

</script>