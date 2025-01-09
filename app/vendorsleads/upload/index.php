<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

$PageName = "Upload Vendor";

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
          <div class="col-md-6">
            <div class="shadow-sm p-2">
              <h5 class="app-sub-heading">Upload Records</h5>
              <div class="form-group">
                <label>Upload CSV file</label>
                <input type="file" required name="upload_csv" class="form-control">
              </div>
              <button class="btn btn-md btn-success mt-3">Upload Records <i class="fa fa-upload"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="shadow-sm p-2">
              <h5 class="app-sub-heading">CSV File Preparation</h5>
              <p>for csv upload primary header must be there in csv file, these headers are;</p>
              <ul>
                <li>VendorName</li>
                <li>BusinessName</li>
                <li>VendorEmail0</li>
                <li>VendorEmail1</li>
                <li>VendorPhone0</li>
                <li>VendorPhone1</li>
                <li>VendorWebsite</li>
                <li>VendorAddress</li>
                <li>VendorCity</li>
                <li>VendorState</li>
                <li>VendorZipcode</li>
                <li>VendorCountry</li>
                <li>VendorStatus</li>
                <li>GSTNo</li>
                <li>VendorType</li>
              </ul>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>