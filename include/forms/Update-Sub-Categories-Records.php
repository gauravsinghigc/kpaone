<section class="pop-section hidden" id="Update_Sub_Category_<?php echo $Records->categories_sub_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Sub Categories</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true, [
                    "categories_sub_id" => $Records->categories_sub_id,
                    "categories_sub_image" => $Records->categories_sub_image
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Sub-Category Name</label>
                            <input type="text" minlength="3" required name="categories_sub_name" value='<?php echo $Records->categories_sub_name; ?>' class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Select Main Category</label>
                            <select name='categories_main_id' class="form-control" required>
                                <option value="0">Select Main Category</option>
                                <?php
                                $AllCats = SET_SQL("SELECT * FROM categories where categories_status='1' ORDER BY categories_name ASC", true);
                                if ($AllCats != null) {
                                    foreach ($AllCats as $Cat) {
                                        if ($Records->categories_main_id == $Cat->categories_id) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='" . $Cat->categories_id . "' $selected>" . $Cat->categories_name . "</option>";
                                    }
                                } else {
                                    echo "<option value='0'>No Category Found!</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='categories_sub_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Records->categories_sub_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Upload Sub-Category Logo</label>
                            <input type="FILE" minlength="5" accept="image/*" name="categories_sub_image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateSubCategoryRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('Update_Sub_Category_<?php echo $Records->categories_sub_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>