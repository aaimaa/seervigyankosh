<?php $this->load->view('admin/layouts/header');?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title;?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/students');?>">Students</a></li>
            <li class="breadcrumb-item active"><?php echo $title;?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title; ?></h3>
            </div>


            <div class="card-body">

              <div class="row">
                <?php if(!empty($result)){?>
                  <div class="col-sm-12">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <td><?php echo ucwords($result->first_name.' '.$result->last_name);?> </td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php echo (!empty($result->email)) ? ($result->email) : ('-') ?></td>
                      </tr>
                      <tr>
                        <th>Phone number</th>
                        <td><?php echo (!empty($result->phone)) ? ($result->phone) : ('-');?> </td>
                      </tr>
                      <tr>
                        <th>Graduation</th>
                        <td><?php echo (!empty($result->graduation)) ? ($result->graduation) : ('-');?> </td>
                      </tr>
                    </table>
                    <p class="float-sm-right"><?php echo (!empty($result->created_at)) ? date('d M Y', strtotime($result->created_at)) : ('') ?></p>
                  </div>

                <?php } ?>

              </div>

            </div>

            <div class="card-footer">
              <div class="row">
                <div class="form-group col-md-6">
                  <a href="<?php echo base_url('admin/students') ?>" class="btn btn-danger">Back</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('admin/layouts/footer');?>
