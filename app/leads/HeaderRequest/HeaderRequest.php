<?php

$CurrentActiveKey = ReturnSessionalValues("get_enquiry_modules", "CURRENT_ENQUIRY_MODULE", "enquiry_1");
$CurrentActiveName = ENQUIRY_MENUS[$CurrentActiveKey]['name'];
$CurrentActiveDir = ENQUIRY_MENUS[$CurrentActiveKey]['dir'];
$CurrentActiveIcon = ENQUIRY_MENUS[$CurrentActiveKey]['icon'];

$EnquiryStatusFilter = ReturnSessionalValues("status_view", "ENQUIRY_STATUS_FILTER", "");
$REQ_VendorId = 0;
