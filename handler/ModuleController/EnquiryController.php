<?php
if (isset($_POST['SavePrimaryDetailOfVendorsAsLeads'])) {

    //vendor details
    $vendor = [
        "vendor_name" => $_POST['vendor_name'],
        "vendor_type_id" => $_POST['vendor_type_id'],
        "vendor_biz_name" => $_POST['vendor_biz_name'],
        "vendor_phone" =>  $_POST['vendor_phone'],
        "vendor_phone_code" => $_POST['PhoneCode'],
        "vendor_email" => $_POST['vendor_email'],
        "vendor_created_at" => CURRENT_DATE_TIME,
        "vendor_created_by" => LOGIN_UserId,
        "vendor_updated_at" => CURRENT_DATE_TIME,
        "vendor_updated_by" => LOGIN_UserId,
        "vendor_status" => $_POST['vendor_status'],
        "vendor_logo" => "default.png",
        "vendor_conversion_status" => $_POST['vendor_conversion_status'],
        "vendor_enquiry_prority_level" => "NORMAL",
        "vendor_source" => $_POST['vendor_source'],
    ];

    //check phone number
    $CheckPhoneNumberExitsOrNot = CHECK("SELECT vendor_phone FROM vendor where vendor_phone='" . $_POST['vendor_phone'] . "'");
    if ($CheckPhoneNumberExitsOrNot == null) {

        //check email id
        $CheckEmailId = CHECK("SELECT vendor_email FROM vendor where vendor_email='" . $_POST['vendor_email'] . "'");
        if ($CheckEmailId == null) {

            //insert vendor details
            $Response = INSERT("vendor", $vendor);

            //check insert status
            if ($Response == true) {

                //VendorId
                $vendor_id = FETCH("SELECT vendor_id FROM vendor where vendor_email='" . $_POST['vendor_email'] . "' and vendor_phone='" . $_POST['vendor_phone'] . "'", "vendor_id");

                //vendor address
                $vendor_address = [
                    "vendor_main_id" => $vendor_id,
                    "vendor_address_gst_no" => $_POST['vendor_address_gst_no'],
                    "vendor_address_type" => $_POST['vendor_address_type'],
                    "vendor_address" => $_POST['vendor_address'],
                    "vendor_area_locality" => $_POST['vendor_area_locality'],
                    "vendor_city" => $_POST['vendor_city'],
                    "vendor_state" => $_POST['vendor_state'],
                    "vendor_country" => $_POST['vendor_country'],
                    "vendor_pincode" => $_POST['vendor_pincode'],
                    "vendor_address_created_by" => LOGIN_UserId,
                    "vendor_address_updated_by" => LOGIN_UserId,
                    "vendor_address_created_at" => CURRENT_DATE_TIME,
                    "vendor_address_updated_at" => CURRENT_DATE_TIME,
                    "vendor_address_status" => 1,
                ];
                //insert vendor address
                $Response = INSERT("vendor_address", $vendor_address);

                //save products info for vendors
                if (isset($_POST['product_ids'])) {
                    if (!empty($_POST['product_ids'])) {
                        foreach ($_POST['product_ids'] as $product_id) {
                            $vendor_products = [
                                "vendor_main_id" => $vendor_id,
                                "product_main_id" => $product_id
                            ];
                            //insert vendor products
                            $Response = INSERT("vendor_products", $vendor_products);
                        }
                    }
                }

                $Error = "Unable to Add other details at the moment!";
            } else {
                $Error = "Unable to save vendor";
            }
        } else {
            $Response = false;
            $Error = "Email-Id already exists";
        }
    } else {
        $Response = false;
        $Error = "Phone number already exists";
    }
    RequestHandler($Response, [
        "true" => "Vendor details as enquiry saved successfully!",
        "false" => $Error
    ]);

    //save enquiry feedback
} elseif (isset($_POST['SaveEnquiryFeedback'])) {
    $vendor_id = SECURE($_POST['vendor_id'], "d");
    $vendor_enquiry_feedbacks = [
        "vendor_main_id" => $vendor_id,
        "vendor_feedback_msg" => SECURE($_POST['vendor_feedback_msg'], "e"),
        "vendor_msg_created_at" => CURRENT_DATE_TIME,
        "vendor_feedack_have_reminder" => $_POST['vendor_feedack_have_reminder'],
        "vendor_feedback_reminding_time" => $_POST['vendor_feedback_reminding_time'],
        "vendor_feedback_reminding_date" => $_POST['vendor_feedback_reminding_date'],
        "vendor_feedback_created_by" => LOGIN_UserId
    ];
    $Response = INSERT("vendor_enquiry_feedbacks", $vendor_enquiry_feedbacks);
    RequestHandler($Response, [
        "true" => "Enquiry Feedback saved successfully!",
        "false" => "Unable to save Enquiry Feedback!"
    ]);
}
