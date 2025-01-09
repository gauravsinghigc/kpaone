<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Brands";
$PageDescription = "Manage all customers";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>
    <?php echo $PageName; ?> | <?php echo APP_NAME; ?>
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("products").classList.add("active");
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
              <h4 class="app-heading mt-0">
                <i class='fa fa-table text-warning'></i>
                <?php echo $PageName; ?>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <?php include __DIR__ . "/../sections/SideMenus.php"; ?>
            </div>

            <div class="col-md-9">
              <h5 class="app-sub-heading"><?php echo $PageName; ?></h5>
              <div class="flex-s-b mb-3">
                <form class="flex-s-b w-pr-80">
                  <div class="form-group mb-0 w-75 mr-1">
                    <input type="search" onchange="form.submit()" value='<?php echo IfRequested("GET", "name", "", false); ?>' name="name" class="form-control mb-0" placeholder="Search Record...">
                  </div>
                  <div class="form-group mb-0 w-25 ml-1">
                    <select onchange="form.submit()" class="form-control mb-0" name="status">
                      <?php echo InputOptionsWithKey(COMMON_STATUS, IfRequested("GET", "status", "", false)); ?>
                    </select>
                  </div>
                </form>
                <a onclick="Databar('AddNewBrands')" class="btn btn-md w-pr-20 btn-danger ml-2"><i class="fa fa-plus"></i> Add Brands</a>
              </div>
              <?php echo ClearFilters("name"); ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="data-list flex-s-b bg-dark text-white">
                    <div class="w-pr-5">SNo</div>
                    <div class="w-pr-35">Brand Name</div>
                    <div class="w-pr-10">Products</div>
                    <div class="w-pr-10">CreatedAt</div>
                    <div class="w-pr-10">UpdatedAt</div>
                    <div class="w-pr-20">CreatedBy</div>
                    <div class="w-pr-10">Status</div>
                    <div class="w-pr-10 text-right">Actions</div>
                  </div>
                  <?php
                  $START = START_FROM;
                  $LIMIT = DEFAULT_RECORD_LISTING;

                  if (isset($_GET['name'])) {
                    $AllBrandsSQL = "SELECT * FROM brands WHERE brands_name LIKE '%" . $_GET['name'] . "%' AND brands_status like '%" . $_GET['status'] . "%' ORDER BY brands_id DESC";
                  } else {
                    $AllBrandsSQL = "SELECT * FROM brands ORDER BY brands_id DESC";
                  }
                  $AllBrands = SET_SQL($AllBrandsSQL . " limit $START, $LIMIT", true);
                  if ($AllBrands != null) {
                    $SerialNo = SERIAL_NO;
                    foreach ($AllBrands as $Brand) {
                      $SerialNo++; ?>
                      <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-35">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/brands/<?php echo $Brand->brands_image; ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo $Brand->brands_name; ?></span>
                          </span>
                        </div>
                        <div class="w-pr-10">
                          <span><?php echo $TotalProducts = TOTAL("SELECT products_id FROM products where product_brand_id='" . $Brand->brands_id . "'"); ?></span>
                          <span class="text-secondary small"> Products</span>
                        </div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Brand->brands_created_at); ?></div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Brand->brands_updated_at); ?></div>
                        <div class="w-pr-20 bold">
                          UID<?php echo $Brand->brands_created_by; ?>-
                          <?php echo FETCH("SELECT UserFullName FROM users where UserId='" . $Brand->brands_created_by . "'", "UserFullName"); ?>
                        </div>
                        <div class="w-pr-10"><?php echo StatusViewWithText($Brand->brands_status); ?></div>
                        <div class="w-pr-10 text-right">
                          <?php
                          if ($TotalProducts == 0) {
                            echo CONFIRM_DELETE_POPUP(
                              "remove_brands",
                              [
                                "remove_brands_records" => true,
                                "brands_id" => $Brand->brands_id
                              ],
                              "ModuleController",
                              "<i class='fa fa-trash'></i>",
                              "btn btn-xs btn-danger"
                            );
                          } ?>
                          <a class="btn btn-xs btn-default" onclick="Databar('Update_<?php echo $Brand->brands_id; ?>')"><i class="fa fa-edit"></i> Update</a>
                        </div>
                      </div>
                  <?php
                      include $Dir . "/include/forms/Update-Brands-Records.php";
                    }
                    echo PaginationFooter(TOTAL($AllBrandsSQL), "index.php");
                  } else {
                    echo NoData("No Brands Record found!");
                  } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php
  include $Dir . "/include/forms/Add-New-Brands.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>