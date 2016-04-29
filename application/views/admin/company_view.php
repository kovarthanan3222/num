<div class="content-wrapper">

        <section class="content-header">
          <h1>      Add Company
            <small></small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="form_center">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Company Form</h3>
                    </div>
                    <div class="success-message"><?php echo $this->session->flashdata('success_message'); ?></div>
                    <form id="companyForm" name="companyForm" class="form-horizontal" action="" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="category" class="col-sm-2 control-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="categoryId" id="categoryId">
                                        <option value="">Category</option>
                                        <?php for($c = 0; $c < count($categoryList); $c++){ ?>
                                        <option value="<?php echo $categoryList[$c]["category_id"]; ?>"<?php if(isset($editData[0]["category_id"])) { if($editData[0]["category_id"] == $categoryList[$c]["category_id"]) echo "selected"; } ?>><?php echo $categoryList[$c]["category_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company" class="col-sm-2 control-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" <?php if(isset($editData[0]["company_name"])) echo "value=".$editData[0]["company_name"]; ?>>
                                </div>
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <input type="submit" name="formSubmit" class="btn btn-info pull-right" <?php if(isset($editData[0]["company_name"])) echo "value=Update"; else echo "value=Add"?>>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content">

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Company List</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>S.No</th>
                      <th>Company</th>
                      <th>Category</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                    </tr>
                    <?php for($c = 0; $c < count($companyList); $c++){ ?>
                    <tr>
                      <td><?php echo $c+1; ?></td>
                      <td><?php echo $companyList[$c]["company_name"] ?></td>
                      <td><?php echo $companyList[$c]["category_name"] ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/master/company/edit/<?php echo $companyList[$c]["company_id"] ?>">Edit</td>
                      <td><a href="<?php echo base_url(); ?>admin/master/company/delete/<?php echo $companyList[$c]["company_id"] ?>">Delete</td>
                      
                    </tr>
                    <?php } ?>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>

<script>

$(document).ready(function() {
    
		// validate the comment form when it is submitted
//		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#companyForm").validate({
			rules: {
				categoryId: "required",
				company: {
					required: true,
					minlength: 3,
                                        maxlength: 50
				}
				
			},
			messages: {
				categoryId: "Please select category",
				company: {
					required: "Please enter company name",
					minlength: "Your company name must consist of at least 3 characters",
					maxlength: "Your company name maximum consist of 50 characters"
				}
			}
		});

		
	});

</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
