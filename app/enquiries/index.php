<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';
require $Dir . "/app/enquiries/HeaderRequest/HeaderRequest.php";


//pagevariables
$PageName = "All Enquiries";
$PageDescription = "Manage all customers";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?php echo $PageName; ?> | <?php echo APP_NAME; ?></title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Enquiries").classList.add("active");
      document.getElementById("<?php echo $CurrentActiveKey; ?>").classList.add("active");
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
        <div class="mt-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="shadow-sm p-2 b-r-1">
                  <h6 class="app-sub-heading">
                    <i class="fa fa-info-circle"></i> <?php echo $PageName; ?>
                  </h6>
                  <div class='app-setting-menus'>
                    <?php foreach (ENQUIRY_MENUS as $Key => $Values) { ?>
                      <a href='?get_enquiry_modules=<?php echo $Key; ?>' id='<?php echo $Key; ?>'>
                        <?php echo RandomColorText("<i class='fa fa-" . $Values['icon'] . "'></i>"); ?> <?php echo $Values['name']; ?> <i class="fa fa-angle-right"></i>
                      </a>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-md-9">
                <?php include __DIR__ . "/views/$CurrentActiveDir"; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
<?php
include $Dir . "/include/common/Footer.php";
include $Dir . "/assets/FooterFiles.php"; ?>

</html>