<section class="pop-section hidden" id="Update_<?php echo $Brand->brands_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Udpate Brands Records</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true, [
                    "brands_id" => $Brand->brands_id,
                    "brands_image" => $Brand->brands_image
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Brand Name</label>
                            <input type="text" minlength="3" required name="brands_name" value='<?php echo $Brand->brands_name; ?>' class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control" name='brands_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Brand->brands_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Upload Brand Logo (optional)</label>
                            <input type="FILE" minlength="5" accept="image/*" name="brands_image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateBrands" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('Update_<?php echo $Brand->brands_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>