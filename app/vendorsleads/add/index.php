<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

$PageName = "Add Vendor";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageName; ?> @ <?php echo APP_NAME; ?></title>
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Vendors").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mt-1 mb-1">
            <div class="flex-s-b">
              <a href="../index.php" class="btn btn-sm btn-danger btn-block mr-1 w-pr-15"><i class="fa fa-angle-left"></i> Back to All</a>
              <h4 class="app-heading w-100 mb-0"><i class='fa fa-edit text-warning'></i> <?php echo $PageName; ?> </h4>
            </div>
          </div>
        </div>

        <form class="row mt-3 pb-5" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
          <?php echo FormPrimaryInputs(true); ?>
          <div class="col-md-4">
            <div class="shadow-sm p-2 br1">
              <div class="row">
                <div class="col-md-12">
                  <h5 class="app-sub-heading">Vendor Primary Informations</h5>
                  <hr>
                </div>
                <div class="col-md-12 form-group">
                  <label>Business Name</label>
                  <input type="text" required name="vendor_biz_name" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                  <label>Full Name</label>
                  <input type="text" required name="vendor_name" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                  <label>Phone Number <span id='phonemsg'></span></label>
                  <div class="flex-s-b">
                    <select class="form-control w-pr-50" name='PhoneCode'>
                      <?php echo InputCountryCodes("91"); ?>
                    </select>
                    <input type="tel" oninput="CheckExistingPhoneNumbers()" id='CheckPhoneNumber' name="vendor_phone" required class="form-control w-75 ml-1" placeholder="XXXXXXXXXX">
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <label>Email-Id <span id='emailmsg'></span></label>
                  <input type="email" oninput="CheckExistingMailId()" id='CheckEmailId' required name="vendor_email" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                  <label>Status</label>
                  <select class="form-control" name='vendor_status'>
                    <?php echo InputOptionsWithKey(COMMON_STATUS, "1"); ?>
                  </select>
                </div>
                <div class="col-md-8 form-group">
                  <label>Vendor Type</label>
                  <select class="form-control" name='vendor_type_id' required>
                    <?php $VendorRecords = VendorTypeDetails();
                    if ($VendorRecords != null) {
                      echo "<option value=''>Select Vendor Type</option>";
                      foreach ($VendorRecords as $Record) {
                        echo "<option value='{$Record->vendor_type_id}'>{$Record->vendor_type_name}</option>";
                      }
                    } else {
                      echo "<option value=''>No Vendor Types Found</option>";
                    } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Vendor Entry Status</label>
                  <select name='vendor_conversion_status' class="form-control" required="">
                    <?php echo InputOptionsWithKey([
                      "" => "Select Vendor Entry Status",
                      "LEAD" => "Stay in Enquiries",
                      "VENDOR" => "MOVE into Vendors"
                    ], ""); ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Vendor Enquiry Source</label>
                  <select name='vendor_source' class="form-control" required="">
                    <?php echo InputOptionsWithKey([
                      "" => "Select Source",
                      "REFERRAL" => "Referral",
                      "FACEBOOK" => "facebook",
                      "INSTAGRAM" => "instagram",
                      "GOOGLE" => "google",
                      "GOOGLE_MAP" => "google_map",
                      "META_ADS" => "meta_ads",
                      "OTHERS" => "Others",
                      "SELF" => "Self"
                    ], ""); ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="shadow-sm p-2 br1">
              <div class="row">
                <div class="col-md-12">
                  <h5 class="app-sub-heading">Vendor Primary Address</h5>
                  <hr>
                </div>
                <div class="col-md-12 form-group">
                  <label>Address Line</label>
                  <textarea name="vendor_address" required class="form-control" rows="1"></textarea>
                </div>
                <div class="col-md-12 form-group">
                  <label>Area Locality</label>
                  <input type="text" required name="vendor_area_locality" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>City</label>
                  <input type="text" required name="vendor_city" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>State</label>
                  <input type="text" required name="vendor_state" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>Country</label>
                  <input type="text" required name="vendor_country" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>Pincode</label>
                  <input type="text" required name="vendor_pincode" class="form-control">
                </div>
                <div class="col-md-7 form-group">
                  <label>GST No</label>
                  <input type="text" name="vendor_address_gst_no" class="form-control">
                </div>
                <div class="col-md-5 form-group">
                  <label>Address Type</label>
                  <select class="form-control" name='vendor_address_type' required>
                    <?php echo InputOptions(ADDRESS_TYPE, "Select Address Type"); ?>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="shadow-sm p-2 br1">
              <div class="row">
                <div class="col-md-12">
                  <h5 class="app-sub-heading">Supplier of Products & Items</h5>
                  <hr>
                </div>
                <div class="col-md-12">
                  <input type='search' id='SearchProducts' class="form-control mb-2" placeholder="Search product..." oninput="SearchData('SearchProducts', 'ProductLists')">
                  <div class="height-control">
                    <?php
                    $AllProducts = SET_SQL("SELECT * FROM products where product_status='1'", true);
                    if ($AllProducts != null) {
                      foreach ($AllProducts as $Products) {
                        $product_category_id = $Products->product_category_id;
                        $product_sub_category_id = $Products->product_sub_category_id;
                        $product_brand_id = $Products->product_brand_id;
                        $CategorySQL = "SELECT * FROM categories where categories_id='$product_category_id'";
                        $SubCategorySQL = "SELECT * FROM categories_sub where categories_sub_id='$product_sub_category_id'";
                        $BrandSQL = "SELECT * FROM brands where brands_id='$product_brand_id'";
                    ?>
                        <div class="ProductLists">
                          <label class="data-list flex-s-b">
                            <div class="w-pr-5">
                              <input type="checkbox" style='width:1.2rem;height:1.2rem;' name="product_ids[]" value="<?php echo $Products->product_id; ?>">
                            </div>
                            <div class="w-pr-95">
                              <h6 class="mb-0 mt-0 pt-0 pb-0">
                                <?php echo $Products->products_name; ?>
                                <small>- <?php echo FETCH($CategorySQL, "categories_name"); ?></small>
                                <small>- <?php echo FETCH($SubCategorySQL, "categories_sub_name"); ?></small>
                                <small>- <?php echo FETCH($BrandSQL, "brands_name"); ?></small>
                              </h6>
                            </div>
                          </label>
                        </div>
                    <?php
                      }
                    } else {
                      echo NoData("No Products Found!");
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-right mt-3">
            <hr>
            <div class="flex-end">
              <button id='BtnControl' type="button" name="SavePrimaryDetailOfVendorsAsLeads" class="btn btn-primary btn-lg">Save &amp; Continue <i class="fa fa-angle-right"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function CheckExistingPhoneNumbers() {
      let SearchingFor = document.getElementById("CheckPhoneNumber");
      var phonemsg = document.getElementById("phonemsg");
      var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
      var subbtn = document.getElementById("BtnControl");
      let ExistingPhoneNumbers = [<?php
                                  $AllData = SET_SQL("SELECT vendor_phone FROM vendor", true);
                                  if ($AllData != null) {
                                    foreach ($AllData as $Data) {
                                      echo "'" . $Data->vendor_phone . "', ";
                                    }
                                  } ?>];

      if (ExistingPhoneNumbers.includes(SearchingFor.value)) {
        phonemsg.classList.add("text-danger");
        phonemsg.classList.remove("text-warning");
        phonemsg.innerHTML = "<i class='fa fa-warning'></i> Phone Number Already Exits";
        subbtn.type = "button";
      } else if (pattern.test(SearchingFor.value) == false) {
        phonemsg.classList.add("text-warning");
        phonemsg.classList.remove("text-danger");
        phonemsg.innerHTML = "<i class='fa fa-warning'></i> Phone Number is not valid";
        subbtn.type = "button";
      } else {
        phonemsg.classList.remove("text-danger");
        phonemsg.classList.remove("text-warning");
        phonemsg.classList.add("text-success");
        phonemsg.innerHTML = "<i class='fa fa-check'></i> Phone Number is Ok";
        subbtn.type = "submit";
      }
    }

    function CheckExistingMailId() {
      let SearchingFor = document.getElementById("CheckEmailId");
      var emailmsg = document.getElementById("emailmsg");
      var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      var subbtn = document.getElementById("BtnControl");
      let CheckExistingMailId = [<?php
                                  $AllData = SET_SQL("SELECT vendor_email FROM vendor", true);
                                  if ($AllData != null) {
                                    foreach ($AllData as $Data) {
                                      echo "'" . $Data->vendor_email . "', ";
                                    }
                                  } ?>];

      if (CheckExistingMailId.includes(SearchingFor.value)) {
        emailmsg.classList.add("text-danger");
        emailmsg.classList.remove("text-warning");
        emailmsg.innerHTML = "<i class='fa fa-warning'></i> Email-Id Already Exits";
        subbtn.type = "button";
      } else if (pattern.test(SearchingFor.value) == false) {
        emailmsg.classList.add("text-warning");
        emailmsg.classList.remove("text-danger");
        emailmsg.innerHTML = "<i class='fa fa-warning'></i> Email-ID is not valid";
        subbtn.type = "button";
      } else {
        emailmsg.classList.remove("text-danger");
        emailmsg.classList.remove("text-warning");
        emailmsg.classList.add("text-success");
        emailmsg.innerHTML = "<i class='fa fa-check'></i> Email-ID is Ok";
        subbtn.type = "submit";
      }
    }
  </script>
  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>