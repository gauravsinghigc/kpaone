<section class="pop-section hidden" id="CreateSubscription">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Create Subscriptions</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-4">
                    <div class="shadow-sm p-2 rounded">
                        <h6 class="app-sub-heading">Select Vendor</h6>
                        <input type="search" class="form-control" id='searchVendors' oninput="SearchData('searchVendors', 'VendorList')" placeholder="Search Vendor...">
                        <div class="bg-white p-1 height-control">
                            <?php
                            $AllVendors = SET_SQL("SELECT * FROM vendor where vendor_status='1' ORDER BY vendor_id DESC", true);
                            if ($AllVendors != null) {
                                foreach ($AllVendors as $Vendor) { ?>
                                    <div class="bg-white shadow-sm p-2 rounded mb-1 VendorList">
                                        <label>
                                            <h6 class="text-black mb-0">
                                                <input type="radio" name="vendor_main_id" value="<?php echo $Vendor->vendor_id; ?>" required>
                                                <?php echo $Vendor->vendor_name; ?>
                                            </h6>
                                            <p class="text-secondary mt-0 mb-0">
                                                <span id='text-secondary'>(<?php echo $Vendor->vendor_biz_name; ?>)</span><br>
                                                <span><?php echo $Vendor->vendor_phone_code; ?> <?php echo $Vendor->vendor_phone; ?></span><br>
                                                <span><?php echo $Vendor->vendor_email; ?></span><br>
                                            </p>
                                        </label>
                                    </div>
                            <?php }
                            } else {
                                echo NoData("No Vendor Found!");
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow-sm p-2 rounded">
                        <h6 class="app-sub-heading">Select Subscription</h6>
                        <div class="bg-white p-1">
                            <?php
                            $AllPlans = SET_SQL("SELECT * FROM config_subscriptions where config_subs_status='1' ORDER BY config_subs_id DESC", true);
                            if ($AllPlans != null) {
                                foreach ($AllPlans as $Plans) { ?>
                                    <div class="bg-white shadow-sm p-2 rounded mb-1">
                                        <label>
                                            <h6 class="text-black mb-0">
                                                <input type="radio" name="subscription_main_id" value="<?php echo $Plans->config_subs_id; ?>" required>
                                                <?php echo $Plans->config_subscription_name; ?>
                                            </h6>
                                            <p class="text-secondary mt-0 mb-0">
                                                <span id='text-secondary'>(<?php echo $Plans->config_subscription_short_name; ?>)</span><br>
                                                <span>Payable @ <?php echo $Plans->config_subscription_pay_period; ?></span><br>
                                                <span>Free Lead @ <?php echo $Plans->config_subscription_free_limits; ?> leads /month </span><br>
                                                <span>Max Lead @ <?php echo $Plans->config_subscription_max_leads; ?> leads /month </span><br>
                                                <span class="fs-16"><?php echo Price($Plans->config_subscription_payable_amount, "text-success bold", "Rs."); ?></span><br>
                                            </p>
                                        </label>
                                    </div>
                            <?php }
                            } else {
                                echo NoData("No Vendor Found!");
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="shadow-sm p-2 rounded">
                        <h6 class="app-sub-heading">Add More Details</h6>
                        <div class="bg-white p-1">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" value='<?php echo date("Y-m-d"); ?>' class="form-control" name="vendor_subscription_start_date" required>
                            </div>
                            <div class="form-group">
                                <label>Renewal Date</label>
                                <input type="date" value='<?php echo date("Y-m-d", strtotime("+1 month")); ?>' class="form-control" name="vendor_subscription_renewal_date" required>
                            </div>
                            <div class="form-group">
                                <label>Subscription Notes</label>
                                <textarea class="form-control editor" name="vendor_subscriptions_notes" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Subscription Status</label>
                                <select name='vendor_subscription_status' class="form-control" required>
                                    <?php echo InputOptionsWithKey(COMMON_STATUS, 0); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="CreateSubscriptionPlans" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('CreateSubscription')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>