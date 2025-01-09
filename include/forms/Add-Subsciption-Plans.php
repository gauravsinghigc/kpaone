<section class="pop-section hidden" id="AddSubscriptionPlans">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12 mb-2'>
                    <div class="flex-s-b">
                        <h4 class='app-heading w-pr-100 m-b-0'>Update Subscription Plans</h4>
                        <a onclick="Databar('AddSubscriptionPlans')" class="btn btn-sm btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" onclick="Databar('SubscriptionForm')" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add New Plans</a>
                </div>
                <div class="col-md-12 mt-3">
                    <div id='SubscriptionForm' class="shadow-sm p-2 mt-3 hidden">
                        <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                            <?php echo FormPrimaryInputs(true); ?>
                            <div class="col-md-12">
                                <h5 class="app-sub-heading">Add New Subscription Plan</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Plan Name</label>
                                <input type="text" required name="config_subscription_name" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Plan Short Name</label>
                                <input type="text" required name="config_subscription_short_name" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Payable period</label>
                                <select name='config_subscription_pay_period' required class="form-control">
                                    <?php echo InputOptionsWithKey([
                                        "" => "Select Pay Period",
                                        "MONTHLY" => "Monthly",
                                        "QUATERLY" => "Quaterly",
                                        "HALF_YEARLY" => "Half-Yearly",
                                        "YEARLY" => "Yearly"
                                    ], ""); ?>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Plan Amount</label>
                                <input type="number" required name="config_subscription_payable_amount" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Status</label>
                                <select name='config_subs_status' required class="form-control">
                                    <?php echo InputOptionsWithKey(["1" => "Active", "2" => "Inactive"], "1"); ?>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Trial Limits of Leads</label>
                                <input type="number" required name="config_subscription_free_limits" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Max Leads Per Months</label>
                                <input type="number" required name="config_subscription_max_leads" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Subscription Plan details</label>
                                <textarea name="config_subscription_desc" class="form-control editor" rows="5"></textarea>
                                <hr>
                            </div>
                            <div class="col-md-12 text-right">
                                <a href="#" onclick="Databar('SubscriptionForm')" class="btn btn-md btn-default">Cancel</a>
                                <button type="submit" name="SaveSubscriptionPlanRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="data-list flex-s-b fs-15 bg-dark text-white">
                        <div class="w-pr-5">Sno</div>
                        <div class="w-pr-20">
                            <h5 class="bold">Plan Name</h5>
                        </div>
                        <div class="w-pr-10">
                            <span>Pay Period</span>
                        </div>
                        <div class="w-pr-15">
                            <span>Plan Rate</span>
                        </div>
                        <div class="w-pr-15">
                            <span>Trial Leads</span>
                        </div>
                        <div class="w-pr-15">
                            <span>Max Leads</span>
                        </div>
                        <div class="w-pr-10">
                            <span>Status</span>
                        </div>
                        <div class="w-pr-15">
                            <span>Action</span>
                        </div>
                    </div>
                    <?php
                    $AllSubscriptionPlans = SET_SQL("SELECT * FROM config_subscriptions ORDER BY config_subs_id DESC", true);
                    if ($AllSubscriptionPlans != null) {
                        $SerialNo = 0;
                        foreach ($AllSubscriptionPlans as $SubscriptionPlan) {
                            $SerialNo++ ?>
                            <div class="data-list flex-s-b fs-15">
                                <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                                <div class="w-pr-20">
                                    <h5 class="bold"><?php echo $SubscriptionPlan->config_subscription_name; ?></h5>
                                </div>
                                <div class="w-pr-10">
                                    <span><?php echo $SubscriptionPlan->config_subscription_pay_period; ?></span>
                                </div>
                                <div class="w-pr-15">
                                    <span><?php echo Price($SubscriptionPlan->config_subscription_payable_amount, "text-success bold", "Rs."); ?>/
                                        <span class="text-secondary small"><?php echo $SubscriptionPlan->config_subscription_pay_period; ?></span>
                                    </span>
                                </div>
                                <div class="w-pr-15">
                                    <span><?php echo $SubscriptionPlan->config_subscription_free_limits; ?> <span class="text-secondary small">Leads</span></span>
                                </div>
                                <div class="w-pr-15">
                                    <span><?php echo $SubscriptionPlan->config_subscription_max_leads; ?>
                                        <span class="text-secondary small">Leads /months</span>
                                    </span>
                                </div>
                                <div class="w-pr-10">
                                    <span class="btn btn-sm btn-default"><?php echo StatusViewWithText($SubscriptionPlan->config_subs_status); ?></span>
                                </div>
                                <div class="w-pr-15">
                                    <button onclick="Databar('Update_<?php echo $SubscriptionPlan->config_subs_id; ?>')" type="button" class="btn btn-sm btn-default">Update <i class="fa fa-angle-double-down"></i></button>
                                </div>
                            </div>
                            <div id='Update_<?php echo $SubscriptionPlan->config_subs_id; ?>' class="shadow-sm p-2 mt-3 hidden">
                                <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                                    <?php echo FormPrimaryInputs(true, [
                                        "config_subs_id" => $SubscriptionPlan->config_subs_id
                                    ]); ?>
                                    <div class="col-md-12">
                                        <h5 class="app-sub-heading">Add New Subscription Plan</h5>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Plan Name</label>
                                        <input type="text" required name="config_subscription_name" value='<?php echo $SubscriptionPlan->config_subscription_name; ?>' class="form-control">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Plan Short Name</label>
                                        <input type="text" required name="config_subscription_short_name" value='<?php echo $SubscriptionPlan->config_subscription_short_name; ?>' class="form-control">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Payable period</label>
                                        <select name='config_subscription_pay_period' required class="form-control">
                                            <?php echo InputOptionsWithKey([
                                                "" => "Select Pay Period",
                                                "MONTHLY" => "Monthly",
                                                "QUATERLY" => "Quaterly",
                                                "HALF_YEARLY" => "Half-Yearly",
                                                "YEARLY" => "Yearly"
                                            ], $SubscriptionPlan->config_subscription_pay_period); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Plan Amount</label>
                                        <input type="number" required name="config_subscription_payable_amount" value='<?php echo $SubscriptionPlan->config_subscription_payable_amount; ?>' class="form-control">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Status</label>
                                        <select name='config_subs_status' required class="form-control">
                                            <?php echo InputOptionsWithKey(
                                                [
                                                    "1" => "Active",
                                                    "2" => "Inactive"
                                                ],
                                                $SubscriptionPlan->config_subscription_status
                                            ); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Trial Limits of Leads</label>
                                        <input type="number" required name="config_subscription_free_limits" value='<?php echo $SubscriptionPlan->config_subscription_free_limits; ?>' class="form-control">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Max Leads Per Months</label>
                                        <input type="number" required name="config_subscription_max_leads" value='<?php echo $SubscriptionPlan->config_subscription_max_leads; ?>' class="form-control">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label>Subscription Plan details</label>
                                        <textarea name="config_subscription_desc" class="form-control editor" rows="5"><?php echo SECURE($SubscriptionPlan->config_subscription_desc, "d"); ?></textarea>
                                        <hr>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="#" onclick="Databar('Update_<?php echo $SubscriptionPlan->config_subs_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                                        <button type="submit" name="UpdateSubscriptionPlanRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </form>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>