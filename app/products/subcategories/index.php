<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Sub Categories";
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
                <a onclick="Databar('AddNewSubCategories')" class="btn btn-md w-pr-20 btn-danger ml-2"><i class="fa fa-plus"></i> Add Sub-Categories</a>
              </div>
              <?php echo ClearFilters("name"); ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="data-list flex-s-b bg-dark text-white">
                    <div class="w-pr-5">SNo</div>
                    <div class="w-pr-25">Sub-Category Name</div>
                    <div class="w-pr-20">Category Name</div>
                    <div class="w-pr-10">Products</div>
                    <div class="w-pr-10">CreatedAt</div>
                    <div class="w-pr-10">UpdatedAt</div>
                    <div class="w-pr-15">CreatedBy</div>
                    <div class="w-pr-10">Status</div>
                    <div class="w-pr-10 text-right">Actions</div>
                  </div>
                  <?php
                  $START = START_FROM;
                  $LIMIT = DEFAULT_RECORD_LISTING;

                  if (isset($_GET['name'])) {
                    $AllCategorySQL = "SELECT * FROM categories_sub WHERE categories_sub_name LIKE '%" . $_GET['name'] . "%' AND categories_status like '%" . $_GET['status'] . "%' ORDER BY categories_sub_id DESC";
                  } else {
                    $AllCategorySQL = "SELECT * FROM categories_sub ORDER BY categories_sub_id DESC";
                  }
                  $AllCategory = SET_SQL($AllCategorySQL . " limit $START, $LIMIT", true);
                  if ($AllCategory != null) {
                    $SerialNo = SERIAL_NO;
                    foreach ($AllCategory as $Records) {
                      $SerialNo++;
                      $categories_main_id = $Records->categories_main_id;
                      $CategorySQL = "SELECT categories_name, categories_image FROM categories where categories_id='$categories_main_id'"; ?>
                      <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-25">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/subcategories/<?php echo $Records->categories_sub_image; ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo $Records->categories_sub_name; ?></span>
                          </span>
                        </div>
                        <div class="w-pr-20">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/categories/<?php echo FETCH($CategorySQL, "categories_image"); ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo FETCH($CategorySQL, "categories_name"); ?></span>
                          </span>
                        </div>
                        <div class="w-pr-10">
                          <span><?php echo $TotalProducts = TOTAL("SELECT products_id FROM products where product_sub_category_id='" . $Records->categories_sub_id . "'"); ?></span>
                          <span class="text-secondary small"> Products</span>
                        </div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Records->categories_sub_created_at); ?></div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Records->categories_sub_updated_at); ?></div>
                        <div class="w-pr-15 bold">
                          UID<?php echo $Records->categories_sub_created_by; ?>-
                          <?php echo FETCH("SELECT UserFullName FROM users where UserId='" . $Records->categories_sub_created_by . "'", "UserFullName"); ?>
                        </div>
                        <div class="w-pr-10"><?php echo StatusViewWithText($Records->categories_sub_status); ?></div>
                        <div class="w-pr-10 text-right">
                          <?php
                          if ($TotalProducts == 0) {
                            echo CONFIRM_DELETE_POPUP(
                              "remove_categories_sub_records",
                              [
                                "remove_sub_categories_records" => true,
                                "categories_sub_id" => $Records->categories_sub_id
                              ],
                              "ModuleController",
                              "<i class='fa fa-trash'></i>",
                              "btn btn-xs btn-danger"
                            );
                          } ?>
                          <a class="btn btn-xs btn-default" onclick="Databar('Update_Sub_Category_<?php echo $Records->categories_sub_id; ?>')"><i class="fa fa-edit"></i> Update</a>
                        </div>
                      </div>
                  <?php
                      include $Dir . "/include/forms/Update-Sub-Categories-Records.php";
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
  include $Dir . "/include/forms/Add-Sub-Categories-Records.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>