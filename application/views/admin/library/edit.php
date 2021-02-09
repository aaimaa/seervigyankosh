<?php $this->load->view('admin/layouts/header');?>
 <!-- Main content -->
 <div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <?php echo validation_errors(); ?>
                <!-- form start -->
                <form role="form" name="update_bhamashah_list" method="post" id="update_bhamashah_list">
                    
                    <div class="box-body">
                    	<div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter full name" value="<?php print_r($result[0]->name);?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City/Village</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City/Village" value="<?php print_r($result[0]->city);?>">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" value="<?php print_r($result[0]->amount);?>">
                        </div>
                       <div class="form-group">
                            <label for="datr">Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="Date" value="<?php print_r($result[0]->date);?>">
                        </div> 

                        <input type="hidden" name="update_id" id="update_id" value="<?php print_r($result[0]->id);?>">
                       
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
                        <a href="<?php echo base_url('bhamashah/bhamashah-list')?>" class="btn btn-warning">Cancel</a>
                    </div>
                    <div style="color:green;text-align: center;"id="msg"></div>
                </form>
            </div><!-- /.box -->

        </div>
        <div class="col-md-3"></div>
    </div>   <!-- /.row -->
</section><!-- /.content -->
</div>

<script type="text/javascript">
  $(document).ready(function(){

       var validator = $("#update_bhamashah_list").validate({
            rules: {
  
                  fullName: {
                            required: true,
                    },

                city: {
                  required: true,
                }, 
                amount: {
                  required: true,
                  number: true
                }, 

                date: {
                  required: true,
                }, 
                 
                         
            },

            messages: {

                fullName: {
                  required: "Please Enter Name",
                }, 
              
                city: {
                  required: "Please Enter City",
                }, 
                amount: {
                  required: "Please Enter Amount",
                  number:"Please Enter Valid Amount",
                }, 

                date: {
                  required: "Please Enter Date",
                }, 
                 

                },    

        submitHandler:function(form){
              var url = "<?php echo base_url();?>Bhamashah/get_update_bhamashah";
              var form_data= new FormData(form);
                
              $.ajax({
                url: url,
                type: 'POST',
                  processData: false,
               contentType: false,
              data: form_data,
                DataType:'json',
                success: function(data){
                    if ($data="1") {
                        $("#msg").show();
                        $("#msg").html("<h4>Updated Successfuly</h4>");
                      setTimeout(function(){
                           $("#msg").hide();
                            window.location.replace("<?php echo base_url('bhamashah/bhamashah-list');?>");
                      },5000);
                    }
                }
            }); 
        }          

        });

  })
</script>

<?php $this->load->view('admin/layouts/footer');?>

