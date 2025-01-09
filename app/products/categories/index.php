<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Categories";
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
                <a onclick="Databar('AddNewCategories')" class="btn btn-md w-pr-20 btn-danger ml-2"><i class="fa fa-plus"></i> Add Categories</a>
              </div>
              <?php echo ClearFilters("name"); ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="data-list flex-s-b bg-dark text-white">
                    <div class="w-pr-5">SNo</div>
                    <div class="w-pr-35">Category Name</div>
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
                    $AllCategorySQL = "SELECT * FROM categories WHERE categories_name LIKE '%" . $_GET['name'] . "%' AND categories_status like '%" . $_GET['status'] . "%' ORDER BY categories_id DESC";
                  } else {
                    $AllCategorySQL = "SELECT * FROM categories ORDER BY categories_id DESC";
                  }
                  $AllCategory = SET_SQL($AllCategorySQL . " limit $START, $LIMIT", true);
                  if ($AllCategory != null) {
                    $SerialNo = SERIAL_NO;
                    foreach ($AllCategory as $Records) {
                      $SerialNo++; ?>
                      <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-35">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/categories/<?php echo $Records->categories_image; ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo $Records->categories_name; ?></span>
                          </span>
                        </div>
                        <div class="w-pr-10">
                          <span><?php echo $TotalProducts = TOTAL("SELECT products_id FROM products where product_category_id='" . $Records->categories_id . "'"); ?></span>
                          <span class="text-secondary small"> Products</span>
                        </div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Records->categories_created_at); ?></div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Records->categories_updated_at); ?></div>
                        <div class="w-pr-20 bold">
                          UID<?php echo $Records->categories_created_by; ?>-
                          <?php echo FETCH("SELECT UserFullName FROM users where UserId='" . $Records->categories_created_by . "'", "UserFullName"); ?>
                        </div>
                        <div class="w-pr-10"><?php echo StatusViewWithText($Records->categories_status); ?></div>
                        <div class="w-pr-10 text-right">
                          <?php
                          if ($TotalProducts == 0) {
                            echo CONFIRM_DELETE_POPUP(
                              "remove_brands",
                              [
                                "remove_categories_records" => true,
                                "categories_id" => $Records->categories_id
                              ],
                              "ModuleController",
                              "<i class='fa fa-trash'></i>",
                              "btn btn-xs btn-danger"
                            );
                          } ?>
                          <a class="btn btn-xs btn-default" onclick="Databar('Update_Category_<?php echo $Records->categories_id; ?>')"><i class="fa fa-edit"></i> Update</a>
                        </div>
                      </div>
                  <?php
                      include $Dir . "/include/forms/Update-Category-Records.php";
                    }
                    echo PaginationFooter(TOTAL($AllCategorySQL), "index.php");
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
  include $Dir . "/include/forms/Add-New-Categories.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>