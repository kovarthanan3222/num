<div class="content-wrapper">

        <section class="content-header">
          <h1>      Add Area
            <small></small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="form_center">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Area Form</h3>
                    </div>
                    <div class="success-message"><?php echo $this->session->flashdata('success_message'); ?></div>
                    <form id="cityForm" name="areaForm" class="form-horizontal" action="" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">Select City</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="cityId" id="cityId">
                                        <option value="">City</option>
                                        <?php for($c = 0; $c < count($cityList); $c++){ ?>
                                        <option value="<?php echo $cityList[$c]["city_id"]; ?>" <?php if(isset($editData[0]["city_id"])) { if($editData[0]["city_id"] == $cityList[$c]["city_id"]) echo "selected"; } ?>><?php echo $cityList[$c]["city_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area" class="col-sm-2 control-label">Area Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area" name="area" placeholder="Area" <?php if(isset($editData[0]["area_name"])) echo "value=".$editData[0]["area_name"]; ?>>
                                </div>
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <input type="submit" name="formSubmit" class="btn btn-info pull-right" <?php if(isset($editData[0]["area_name"])) echo "value=Update"; else echo "value=Add"?>>
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
                  <h3 class="box-title">Area List</h3>
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
                      <th>Area</th>
                      <th>City</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                    </tr>
                    <?php for($c = 0; $c < count($areaList); $c++){ ?>
                    <tr>
                      <td><?php echo $c+1; ?></td>
                      <td><?php echo $areaList[$c]["area_name"] ?></td>
                      <td><?php echo $areaList[$c]["city_name"] ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/master/area/edit/<?php echo $areaList[$c]["area_id"] ?>">Edit</td>
                      <td><a href="<?php echo base_url(); ?>admin/master/area/delete/<?php echo $areaList[$c]["area_id"] ?>">Delete</td>
                      
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
		$("#cityForm").validate({
			rules: {
				cityId: "required",
				area: {
					required: true,
					minlength: 3,
                                        maxlength: 50
				}
				
			},
			messages: {
				cityId: "Please select city",
				area: {
					required: "Please enter area name",
					minlength: "Your area name must consist of at least 3 characters",
					maxlength: "Your area name maximum consist of 50 characters"
				}
			}
		});

		
	});

</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
