<section class="pop-section hidden" id="AddNewSubCategories">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New Sub Categories</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Sub-Category Name</label>
                            <input type="text" minlength="3" required name="categories_sub_name" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Select Main Category</label>
                            <select name='categories_main_id' class="form-control" required>
                                <option value="0">Select Main Category</option>
                                <?php
                                $AllCats = SET_SQL("SELECT * FROM categories where categories_status='1' ORDER BY categories_name ASC", true);
                                if ($AllCats != null) {
                                    foreach ($AllCats as $Cat) {
                                        echo "<option value='" . $Cat->categories_id . "'>" . $Cat->categories_name . "</option>";
                                    }
                                } else {
                                    echo "<option value='0'>No Category Found!</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='categories_sub_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, ""); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Upload Sub-Category Logo</label>
                            <input type="FILE" minlength="5" accept="image/*" required name="categories_sub_image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="SaveSubCategoryRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('AddNewSubCategories')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>