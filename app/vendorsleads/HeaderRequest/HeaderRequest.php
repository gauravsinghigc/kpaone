<?php

$CurrentActiveKey = ReturnSessionalValues("get_enquiry_modules", "CURRENT_ENQUIRY_MODULE", "enquiry_1");
$CurrentActiveName = ENQUIRY_MENUS[$CurrentActiveKey]['name'];
$CurrentActiveDir = ENQUIRY_MENUS[$CurrentActiveKey]['dir'];
$CurrentActiveIcon = ENQUIRY_MENUS[$CurrentActiveKey]['icon'];

$EnquiryStatusFilter = ReturnSessionalValues("status_view", "ENQUIRY_STATUS_FILTER", "");

if (isset($_GET['viewid'])) {
    $VendorID = SECURE($_GET['viewid'], "d");
    $_SESSION['VENDOR_ID'] = $VendorID;
} else {
    if (!isset($_SESSION['VENDOR_ID'])) {
        $VendorID = 0;
    } else {
        $VendorID = $_SESSION['VENDOR_ID'];
    }
}
$VendorSQL = "SELECT * FROM vendor where vendor_id='$VendorID'";
$VendorType = FETCH("SELECT vendor_type_name FROM config_vendor_types where vendor_type_id='" . FETCH($VendorSQL, "vendor_type_id") . "'", "vendor_type_name");
