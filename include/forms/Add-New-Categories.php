<section class="pop-section hidden" id="AddNewCategories">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New Categories</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Category Name</label>
                            <input type="text" minlength="3" required name="categories_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='categories_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, ""); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Upload Category Logo</label>
                            <input type="FILE" minlength="5" accept="image/*" required name="categories_image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="SaveCategoryRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('AddNewCategories')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>