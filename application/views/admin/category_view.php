<div class="content-wrapper">

        <section class="content-header">
          <h1>      Add Category
            <small></small>
          </h1>

        </section>

        <!-- Main content -->
        
        <section class="content">
            <div class="form_center">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Category Form</h3>
                    </div>
                    <div class="success-message"><?php echo $this->session->flashdata('success_message'); ?></div>
                    <form id="categoryForm" name="categoryForm" class="form-horizontal" action="" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="category" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Category" <?php if(isset($editData[0]["category_name"])) echo "value=".$editData[0]["category_name"]; ?>>
                                </div>
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <input type="submit" name="formSubmit" class="btn btn-info pull-right" <?php if(isset($editData[0]["category_name"])) echo "value=Update"; else echo "value=Add"?>>
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
                  <h3 class="box-title">City List</h3>
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
                      <th>No</th>
                      <th>Category</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                    </tr>
                    <?php for($c = 0; $c < count($categoryList); $c++){ ?>
                    <tr>
                      <td><?php echo $c+1; ?></td>
                      <td><?php echo $categoryList[$c]["category_name"] ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/master/category/edit/<?php echo $categoryList[$c]["category_id"] ?>">Edit</td>
                      <td><a href="<?php echo base_url(); ?>admin/master/category/delete/<?php echo $categoryList[$c]["category_id"] ?>">Delete</td>
                      
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
		$("#categoryForm").validate({
			rules: {
				
				category: {
					required: true,
					minlength: 3,
                                        maxlength: 50
				}
				
			},
			messages: {
				
				category: {
					required: "Please enter category name",
					minlength: "Your category name must consist of at least 3 characters",
					maxlength: "Your category name maximum consist of 50 characters"
				}
			}
		});

		
	});

</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
