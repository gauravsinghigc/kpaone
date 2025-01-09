<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

if (isset($_GET['Proid'])) {
  $products_id = SECURE($_GET['Proid'], "d");
  $_SESSION['products_id'] = $products_id;
} else {
  $products_id = $_SESSION['products_id'];
}

$ProSQL = "SELECT * FROM products where products_id='$products_id'";
$CheckRecords = CHECK($ProSQL);
if ($CheckRecords == null) {
  header("location: ../index.php");
}

//pagevariables
$PageName = "Update Products";
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

            <div class="col-md-9 pb-4">
              <h5 class="app-sub-heading"><?php echo $PageName; ?></h5>
              <a href="../index.php" class="btn btn-md btn-default"><i class="fa fa-angle-left"></i> Back to All Products</a>

              <form action="" method="GET" class="row mt-2" id='SelectionForm'>
                <div class="col-md-4 form-group">
                  <label>Select Category</label>
                  <select name="product_category_id" onchange="CheckFormSelections()" id='CategoryId' class="form-control">
                    <option value="0">Select Category</option>
                    <?php
                    $AllCategories = SET_SQL("SELECT categories_id, categories_name FROM categories WHERE categories_status='1' ORDER BY categories_status ASC", true);
                    $AllCategories[] = (object)[
                      'categories_id' => 'NEW',
                      'categories_name' => "Create New Category"
                    ];
                    if ($AllCategories != null) {
                      foreach ($AllCategories as $Category) {
                        $Active = IfRequested("GET", "product_category_id", null, false);
                        if ($Category->categories_id == $Active) {
                          $selected = "selected";
                        } else {
                          if (FETCH($ProSQL, "product_category_id") == $Category->categories_id) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }
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
                <?php
                $ActiveNewCat = IfRequested("GET", "product_category_id", null, false);
                if ($ActiveNewCat == "NEW") {
                  $NewCatStatus = "";
                } else {
                  $NewCatStatus = "hidden";
                } ?>
                <div id='NewCategoryOption' class='<?php echo $NewCatStatus; ?> col-md-4'>
                  <div class="form-group">
                    <label>New Category Name</label>
                    <input type="text" name="new_category_name" onchange='form.submit()' value='<?php echo IfRequested("GET", "new_category_name", "", false); ?>' class="form-control">
                  </div>
                </div>
                <div class="col-md-4 form-group">
                  <label>Select Sub Category</label>
                  <select name="product_sub_category_id" onchange="CheckFormSelections()" id='SubCategoryId' class="form-control">
                    <option value="0">Select Sub Category</option>
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
                          if (FETCH($ProSQL, "product_sub_category_id") == $SubCategory->categories_sub_id) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }
                        }
                        echo "<option value='" . $SubCategory->categories_sub_id . "' $selected>" . $SubCategory->categories_sub_name . "</option>";
                      }
                    } else {
                      echo "<option value='0'>No Sub Category Found!</option>";
                    } ?>
                  </select>
                </div>
                <?php
                $ActiveNewSub = IfRequested("GET", "product_sub_category_id", null, false);
                if ($ActiveNewSub == "NEW") {
                  $NewSubStatus = "";
                } else {
                  $NewSubStatus = "hidden";
                } ?>
                <div id='NewSubCategoryOption' class='<?php echo $NewSubStatus; ?> col-md-4'>
                  <div class="form-group">
                    <label>New Sub Category Name</label>
                    <input type="text" name="new_sub_category_name" onchange='form.submit()' value='<?php echo IfRequested("GET", "new_sub_category_name", "", false); ?>' class="form-control">
                  </div>
                </div>
                <div class="col-md-4 form-group">
                  <label>Select Brand Name</label>
                  <select name="product_brand_id" class="form-control" onchange="CheckFormSelections()" id='BrandsId'>
                    <option value="0">Select Brand Name</option>
                    <?php
                    $AllBrands = SET_SQL("SELECT brands_id, brands_name FROM brands where brands_status='1' ORDER BY brands_name ASC", true);
                    $AllBrands[] = (object)[
                      'brands_id' => 'NEW',
                      'brands_name' => "Create New Brand"
                    ];
                    if ($AllBrands != null) {
                      foreach ($AllBrands as $Brands) {
                        $Active = IfRequested("GET", "product_brand_id", null, false);
                        if ($Brands->brands_id == $Active) {
                          $selected = "selected";
                        } else {
                          if (FETCH($ProSQL, "product_brand_id") == $Brands->brands_id) {
                            $selected = "selected";
                          } else {
                            $selected = "";
                          }
                        }
                        echo "<option value='" . $Brands->brands_id . "' $selected>" . $Brands->brands_name . "</option>";
                      }
                    } else {
                      echo "<option value='0'>No Sub Category Found!</option>";
                    } ?>
                  </select>
                </div>
                <?php
                $ActiveNewBrands = IfRequested("GET", "product_brand_id", null, false);
                if ($ActiveNewBrands == "NEW") {
                  $NewBrandStatus = "";
                } else {
                  $NewBrandStatus = "hidden";
                } ?>
                <div id='NewBrandsOption' class='<?php echo $NewBrandStatus; ?> col-md-4'>
                  <div class="form-group">
                    <label>New Brand Name</label>
                    <input type="text" name="new_brand_name" onchange='form.submit()' value='<?php echo IfRequested("GET", "new_brand_name", "", false); ?>' class="form-control">
                  </div>
                </div>
              </form>
              <form class="row" method="POST" action="<?php echo CONTROLLER; ?>" enctype="multipart/form-data">
                <?php echo FormPrimaryInputs(true, [
                  "product_category_id" => IfRequested("GET", "product_category_id", "", false),
                  "new_category_name" => IfRequested("GET", "new_category_name", "", false),
                  "product_sub_category_id" => IfRequested("GET", "product_sub_category_id", "", false),
                  "new_sub_category_name" => IfRequested("GET", "new_sub_category_name", "", false),
                  "product_brand_id" => IfRequested("GET", "product_brand_id", "", false),
                  "new_brand_name" => IfRequested("GET", "new_brand_name", "", false),
                  "product_primary_image" => FETCH($ProSQL, "product_primary_image"),
                  "products_id" => $products_id,
                ]); ?>
                <div class="col-md-8 form-group">
                  <label>Product name</label>
                  <input type="text" name="products_name" required="" value='<?php echo FETCH($ProSQL, "products_name"); ?>' class="form-control">
                </div>
                <div class="col-md-4 form-group">
                  <label>Serial no</label>
                  <input type="text" name="product_serial_no" required="" value='<?php echo FETCH($ProSQL, "product_serial_no"); ?>' class="form-control">
                </div>
                <div class="col-md-4 form-group">
                  <label>Measurement Type</label>
                  <select class="form-control" name="product_measurement_unit" required>
                    <?php echo InputOptionsWithKey(MEASUREMENT_UNITS, FETCH($ProSQL, "product_measurement_unit")); ?>
                  </select>
                </div>
                <div class="col-md-4 form-group">
                  <label>Select Status</label>
                  <select class="form-control" name="product_status" required>
                    <?php echo InputOptionsWithKey(COMMON_STATUS, FETCH($ProSQL, "product_status")); ?>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <label>Product Primary Image</label>
                  <input type="file" class="form-control" name="product_primary_image" accept="image/*">
                </div>
                <div class="col-md-12 form-group">
                  <label>Product Description</label>
                  <textarea name="product_more_details" class="form-control editor"><?php echo SECURE(FETCH($ProSQL, "product_more_details"), "d"); ?></textarea>
                </div>
                <div class="col-md-12 text-right">
                  <hr>
                  <?php
                  echo CONFIRM_DELETE_POPUP(
                    "remove_products",
                    [
                      "remove_product_records" => true,
                      "control_id" => $products_id
                    ],
                    "ModuleController",
                    "<i class='fa fa-trash'></i> Remove Permanently",
                    "btn btn-default btn-md text-danger pull-left"
                  ); ?>
                  <a href="../index.php" class="btn btn-md btn-default"><i class="fa fa-angle-double-left"></i> Back to All Products</a>
                  <button type="submit" name="UpdateProductDetails" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <script>
    function CheckFormSelections() {
      var CategoryId = document.getElementById("CategoryId");
      var SubCategoryId = document.getElementById("SubCategoryId");
      var NewCategoryOption = document.getElementById("NewCategoryOption");
      var NewSubCategoryOption = document.getElementById("NewSubCategoryOption");
      var SelectionForm = document.getElementById("SelectionForm");
      var BrandsId = document.getElementById("BrandsId");
      var NewBrandsOption = document.getElementById("NewBrandsOption");

      if (CategoryId.value == "NEW") {
        NewCategoryOption.style.display = "block";
      } else {
        if (CategoryId.value != 0 && CategoryId.value != "NEW") {
          SelectionForm.submit();
        } else {
          NewCategoryOption.style.display = "none";
        }
      }

      if (SubCategoryId.value == "NEW") {
        NewSubCategoryOption.style.display = "block";
      } else {
        if (SubCategoryId.value != 0 && SubCategoryId.value != "NEW") {
          SelectionForm.submit();
        } else {
          NewSubCategoryOption.style.display = "none";
        }
      }

      if (BrandsId.value == "NEW") {
        NewBrandsOption.style.display = "block";
      } else {
        NewBrandsOption.style.display = "none";
      }


    }
  </script>
  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>