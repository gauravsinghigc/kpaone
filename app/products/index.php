<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Products";
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
              <?php include __DIR__ . "/sections/SideMenus.php"; ?>
            </div>

            <div class="col-md-9">
              <h5 class="app-sub-heading"><?php echo $PageName; ?></h5>
              <div class="flex-s-b mb-3">
                <form class="flex-s-b w-pr-80">
                  <div class="form-group mb-0 w-75 mr-1">
                    <input type="search" onchange="form.submit()" value='<?php echo IfRequested("GET", "name", "", false); ?>' name="name" class="form-control mb-0" placeholder="Search Record...">
                  </div>
                  <div class="form-group mb-0 w-25 mr-1">
                    <select name="product_category_id" onchange="form.submit()" class="form-control">
                      <option value="">All Categories</option>
                      <?php
                      $AllCategories = SET_SQL("SELECT categories_id, categories_name FROM categories WHERE categories_status='1' ORDER BY categories_status ASC", true);
                      if ($AllCategories != null) {
                        foreach ($AllCategories as $Category) {
                          $Active = IfRequested("GET", "product_category_id", null, false);
                          if ($Category->categories_id == $Active) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }

                          // Output the option element
                          echo "<option value='" . $Category->categories_id . "' $selected>" . $Category->categories_name . "</option>";
                        }
                      } else {
                        echo "<option value='0'>No Category Found!</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mb-0 w-25 mr-1">
                    <select name="product_sub_category_id" onchange="form.submit()" class="form-control">
                      <option value="">All SubCategories</option>
                      <?php
                      if (isset($_GET['product_category_id'])) {
                        $categories_main_id = $_GET['product_category_id'];
                        $SubCatSQL = "SELECT categories_sub_id, categories_sub_name FROM categories_sub where categories_main_id='$categories_main_id' and categories_sub_status='1' ORDER BY categories_sub_name ASC";
                      } else {
                        $SubCatSQL = "SELECT categories_sub_id, categories_sub_name FROM categories_sub where categories_sub_status='1' ORDER BY categories_sub_name ASC";
                      }
                      $AllSubCategories = SET_SQL($SubCatSQL, true);
                      $AllSubCategories[] = (object)[
                        'categories_sub_id' => 'NEW',
                        'categories_sub_name' => "Create New Sub Category"
                      ];
                      if ($AllSubCategories != null) {
                        foreach ($AllSubCategories as $SubCategory) {
                          $Active = IfRequested("GET", "product_sub_category_id", null, false);
                          if ($SubCategory->categories_sub_id == $Active) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }
                          echo "<option value='" . $SubCategory->categories_sub_id . "' $selected>" . $SubCategory->categories_sub_name . "</option>";
                        }
                      } else {
                        echo "<option value='0'>No Sub Category Found!</option>";
                      } ?>
                    </select>
                  </div>
                  <div class="form-group mb-0 mr-1 w-25">
                    <select name="product_brand_id" class="form-control" onchange="form.submit()">
                      <option value="0">Select Brand Name</option>
                      <?php
                      $AllBrands = SET_SQL("SELECT brands_id, brands_name FROM brands where brands_status='1' ORDER BY brands_name ASC", true);
                      if ($AllBrands != null) {
                        foreach ($AllBrands as $Brands) {
                          $Active = IfRequested("GET", "product_brand_id", null, false);
                          if ($Brands->brands_id == $Active) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }
                          echo "<option value='" . $Brands->brands_id . "' $selected>" . $Brands->brands_name . "</option>";
                        }
                      } else {
                        echo "<option value='0'>No Sub Category Found!</option>";
                      } ?>
                    </select>
                  </div>
                  <div class="form-group mb-0 w-25 ml-1">
                    <select onchange="form.submit()" class="form-control mb-0" name="status">
                      <?php echo InputOptionsWithKey(COMMON_STATUS, IfRequested("GET", "status", "", false)); ?>
                    </select>
                  </div>
                </form>
                <a href="add/" class="btn btn-md w-pr-20 btn-danger ml-2"><i class="fa fa-plus"></i> Add Products</a>
              </div>
              <?php echo ClearFilters("name"); ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="data-list flex-s-b bg-dark text-white">
                    <div class="w-pr-5">SNo</div>
                    <div class="w-pr-20">ProductName</div>
                    <div class="w-pr-10">SerialNo</div>
                    <div class="w-pr-20">CategoryName</div>
                    <div class="w-pr-20">SubCategoryName</div>
                    <div class="w-pr-15">BrandName</div>
                    <div class="w-pr-10">Measure</div>
                    <div class="w-pr-10">CreatedAt</div>
                    <div class="w-pr-5">Status</div>
                    <div class="w-pr-10 text-right">Actions</div>
                  </div>
                  <?php
                  $START = START_FROM;
                  $LIMIT = DEFAULT_RECORD_LISTING;

                  if (isset($_GET['name'])) {
                    $product_brand_id = $_GET['product_brand_id'];
                    $product_category_id = $_GET['product_category_id'];
                    $product_sub_category_id = $_GET['product_sub_category_id'];
                    $AllProductSQL = "SELECT * FROM products WHERE product_category_id like '%$product_category_id%' and product_brand_id like '%$product_brand_id%' and product_sub_category_id like '%$product_sub_category_id%' and products_name LIKE '%" . $_GET['name'] . "%' AND product_status like '%" . $_GET['status'] . "%' ORDER BY products_id DESC";
                  } else {
                    $AllProductSQL = "SELECT * FROM products ORDER BY products_id DESC";
                  }
                  $AllProducts = SET_SQL($AllProductSQL . " limit $START, $LIMIT", true);
                  if ($AllProducts != null) {
                    $SerialNo = SERIAL_NO;
                    foreach ($AllProducts as $Records) {
                      $SerialNo++;
                      $categories_main_id = $Records->product_category_id;
                      $product_sub_category_id = $Records->product_sub_category_id;
                      $product_brand_id = $Records->product_brand_id;
                      $CategorySQL = "SELECT categories_name, categories_image FROM categories where categories_id='$categories_main_id'";
                      $SubCategorySQL = "SELECT * FROM categories_sub where categories_sub_id='$product_sub_category_id'";
                      $brandsSQL = "SELECT * FROM brands where brands_id='$product_brand_id'"; ?>
                      <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-20">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/products/<?php echo $Records->product_primary_image; ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo $Records->products_name; ?></span>
                          </span>
                        </div>
                        <div class="w-pr-10">
                          <span><?php echo $Records->product_serial_no; ?></span>
                        </div>
                        <div class="w-pr-20">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/categories/<?php echo FETCH($CategorySQL, "categories_image"); ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo FETCH($CategorySQL, "categories_name"); ?></span>
                          </span>
                        </div>
                        <div class="w-pr-20">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/subcategories/<?php echo FETCH($SubCategorySQL, "categories_sub_image"); ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo FETCH($SubCategorySQL, "categories_sub_name"); ?></span>
                          </span>
                        </div>
                        <div class="w-pr-15">
                          <span class="text-primary bold">
                            <span><img src="<?php echo STORAGE_URL; ?>/brands/<?php echo FETCH($brandsSQL, "brands_image"); ?>" class="img-fluid w-pr-5 icons"></span>
                            <span><?php echo FETCH($brandsSQL, "brands_name"); ?></span>
                          </span>
                        </div>
                        <div class="w-pr-10">
                          <span><?php echo $Records->product_measurement_unit; ?></span>
                        </div>
                        <div class="w-pr-10"><?php echo DATE_FORMATES("d M, Y", $Records->product_created_at); ?></div>
                        <div class="w-pr-5"><?php echo StatusViewWithText($Records->product_status); ?></div>
                        <div class="w-pr-10 text-right">
                          <a class="btn btn-xs btn-default" href="update/?Proid=<?php echo SECURE($Records->products_id, "e"); ?>"><i class="fa fa-edit"></i> Update</a>
                        </div>
                      </div>
                  <?php
                    }
                    echo PaginationFooter(TOTAL($AllProductSQL), "index.php");
                  } else {
                    echo NoData("No Products Record found!");
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