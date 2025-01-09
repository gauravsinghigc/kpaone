<section class="pop-section hidden" id="Update_Category_<?php echo $Records->categories_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Categories</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true, [
                    "categories_id" => $Records->categories_id,
                    "categories_image" => $Records->categories_image,
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Category Name</label>
                            <input type="text" minlength="3" required name="categories_name" value='<?php echo $Records->categories_name; ?>' class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='categories_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Records->categories_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Upload Category Logo</label>
                            <input type="FILE" minlength="5" accept="image/*" name="categories_image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCategoryRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('Update_Category_<?php echo $Records->categories_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>