<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Subscriptions";
$PageDescription = "Manage all customers";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>
    <?php echo $PageName; ?> |
    <?php echo APP_NAME; ?>
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("subscriptions").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h4 class="app-heading mt-2">
                <i class='fa fa-users text-warning'></i>
                <?php echo $PageName; ?>
              </h4>
            </div>
            <div class="col-md-12">
              <a href="#" onclick="Databar('AddSubscriptionPlans')" class="btn btn-sm btn-default"><i class="fa fa-edit"></i> Config Plans</a>
              <a href="#" onclick="Databar('CreateSubscription')" class="btn btn-sm btn-default"><i class="fa fa-edit"></i> Create Subscriptions</a>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-12">
              <div class="data-list flex-s-b text-white bg-black bg-dark fs-13">
                <div class="w-pr-5">#</div>
                <div class="w-pr-25 text-left">Vendor</div>
                <div class="w-pr-20 text-right">Plan</div>
                <div class="w-pr-20 text-right">Benefits</div>
                <div class="w-pr-20 text-right">PayPlan</div>
                <div class="w-pr-20 text-right">PaybleAt</div>
                <div class="w-pr-10 text-right">Status</div>
                <div class="w-pr-10 text-right">Actions</div>
              </div>
              <?php
              $SQL = "SELECT * FROM vendor_subscriptions ORDER BY vendor_subscription_id DESC";
              $AllSubscriptions = SET_SQL($SQL, true);
              if ($AllSubscriptions != null) {
                $SerialNo = 0;
                foreach ($AllSubscriptions as $Subscription) {
                  $SerialNo++;
                  $VendorSQL = "SELECT * FROM vendor where vendor_id='" . $Subscription->vendor_main_id . "'";
                  $PlanSQL = "SELECT * FROM config_subscriptions where config_subs_id='" . $Subscription->subscription_main_id . "'"; ?>
                  <div class="data-list flex-s-b">
                    <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                    <div class="w-pr-25 text-primary text-left">
                      <a href="<?php echo APP_URL; ?>/vendors/details/?vid=<?php echo SECURE(FETCH($VendorSQL, "vendor_id"), "e"); ?>" class="text-primary">
                        <div class="flex-s-b w-100 text-left">
                          <span class="w-pr-10 mr-1">
                            <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo FETCH($VendorSQL, "vendor_logo"); ?>" class="img-fluid shadow-sm b-r-1">
                          </span>
                          <span class="w-pr-90 text-left">
                            <span><?php echo ReplaceSpecialCharacters(LimitText(UpperCase(FETCH($VendorSQL, "vendor_name")), 0, 20), "_"); ?></span><br>
                            <span class="text-secondary"><?php echo FETCH($VendorSQL, "vendor_biz_name"); ?></span><br>
                          </span>
                        </div>
                      </a>
                    </div>
                    <div class="w-pr-20 text-right">
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
                    <div class="w-pr-20 text-right">
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
                    <div class="w-pr-10 text-right">
                      <span class="btn btn-sm btn-default">
                        <?php echo StatusViewWithText($Subscription->vendor_subscription_status); ?>
                      </span>
                    </div>
                    <div class="w-pr-10 text-right">
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
        </div>
      </section>
    </div>
  </div>

  <?php
  include $Dir . "/include/forms/Create-Subscription-Plans.php";
  include $Dir . "/include/forms/Add-Subsciption-Plans.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>