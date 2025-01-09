<?php
include $Dir . "/include/forms/app/CreateNewVendorContracts.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="flex-s-b">
            <form class="w-75">
                <input onchange="form.submit()" placeholder="Search Subscription..." oninput="SearchData('VendorContractSearch', 'VendorRecords')" type='search' id='VendorContractSearch' class='form-control'>
            </form>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <div class="data-list flex-s-b text-white bg-black bg-dark fs-13">
            <div class="w-pr-5">#</div>
            <div class="w-pr-20 text-left">Plan</div>
            <div class="w-pr-20 text-right">Benefits</div>
            <div class="w-pr-20 text-right">PayPlan</div>
            <div class="w-pr-25 text-right">PaybleAt</div>
            <div class="w-pr-15 text-right">Status</div>
            <div class="w-pr-15 text-right">Actions</div>
        </div>
        <?php
        $SQL = "SELECT * FROM vendor_subscriptions where vendor_main_id='$REQ_VendorId' ORDER BY vendor_subscription_id DESC";
        $AllSubscriptions = SET_SQL($SQL, true);
        if ($AllSubscriptions != null) {
            $SerialNo = 0;
            foreach ($AllSubscriptions as $Subscription) {
                $SerialNo++;
                $VendorSQL = "SELECT * FROM vendor where vendor_id='" . $Subscription->vendor_main_id . "'";
                $PlanSQL = "SELECT * FROM config_subscriptions where config_subs_id='" . $Subscription->subscription_main_id . "'"; ?>
                <div class="data-list flex-s-b">
                    <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                    <div class="w-pr-20 text-left">
                        <p class="mb-0">
                            <span class="bold fs-13"><?php echo FETCH($PlanSQL, "config_subscription_name"); ?></span><br>
                            <span class="fs-13"><?php echo FETCH($PlanSQL, "config_subscription_short_name"); ?></span>
                        </p>
                    </div>
                    <div class="w-pr-20 text-right">
                        <p class="mb-0">
                            <span class="fs-13">
                                <?php echo $Subscription->vendor_subscription_free_limits; ?>
                                <span class="text-secondary">trial leads</span>
                            </span><br>
                            <span class="fs-13"><?php echo $Subscription->vendor_subscription_max_limits; ?>
                                <span class="text-secondary">leads/months </span>
                            </span><br>
                        </p>
                    </div>
                    <div class="w-pr-20 text-right">
                        <p class="mb-0">
                            <span class="fs-13">
                                Payable @ <?php echo $Subscription->vendor_subsciption_pay_period; ?>
                            </span><br>
                            <span class="fs-13"><?php echo Price($Subscription->vendor_subscription_amount, "text-success", "Rs"); ?>
                                <span class="text-secondary">/<?php echo $Subscription->vendor_subsciption_pay_period; ?> </span>
                            </span><br>
                        </p>
                    </div>
                    <div class="w-pr-25 text-right">
                        <p class="mb-0">
                            <span class="fs-13">
                                <span class="text-secondary">Start From @</span>
                                <?php echo DATE_FORMATES("d M, Y", $Subscription->vendor_subscription_start_date); ?>
                            </span><br>
                            <span class="fs-13">
                                <span class="text-secondary">Renewal Date</span>
                                <?php echo DATE_FORMATES("d M, Y", $Subscription->vendor_subscription_renewal_date); ?>
                            </span>
                        </p>
                    </div>
                    <div class="w-pr-15 text-right">
                        <span class="btn btn-sm btn-default">
                            <?php echo StatusViewWithText($Subscription->vendor_subscription_status); ?>
                        </span>
                    </div>
                    <div class="w-pr-15 text-right">
                        <a href="#" onclick="Databar('UpdateSubscription_<?php echo $Subscription->vendor_subscription_id; ?>')" class="btn btn-md btn-default"><i class="fa fa-edit"></i> Update </a>
                    </div>
                </div>
        <?php }
        } else {
            echo NoData("No Subscriptions Found!");
        }
        echo PaginationFooter(TOTAL($SQL), "index.php"); ?>
    </div>
</div>