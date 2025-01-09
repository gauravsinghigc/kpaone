<?php

//save new brand
if (isset($_POST['SaveBrands'])) {
    $brands = [
        "brands_name" => $_POST['brands_name'],
        "brands_status" => $_POST['brands_status'],
        "brands_created_at" => CURRENT_DATE_TIME,
        "brands_updated_at" => CURRENT_DATE_TIME,
        "brands_created_by" => LOGIN_UserId,
        "brands_updated_by" => LOGIN_UserId,
        "brands_image" => UPLOAD_FILES("../storage/brands", false, $_POST['brands_name'] . "_brand", "brands_image"),
    ];
    $CheckBrandNameExits = CHECK("SELECT * FROM brands where brands_name = '" . $_POST['brands_name'] . "'");
    if ($CheckBrandNameExits == null) {
        $Response = INSERT("brands", $brands);
    } else {
        $Response = false;
    }
    RESPONSE($Response, "<b>" . $_POST['brands_name'] . "</b> brand details are saved!", "Unable to save brand details!");

    //update brand details
} elseif (isset($_POST['UpdateBrands'])) {
    $brands_id = SECURE($_POST['brands_id'], "d");
    $brands_image = SECURE($_POST['brands_image'], "d");

    if (CheckFileUploadStatus("brands_image") == null) {
        $brands_image = $brands_image;
    } else {
        $brands_image = UPLOAD_FILES("../storage/brands", false, $_POST['brands_name'] . "_brand", "brands_image");
    }
    $brands = [
        "brands_name" => $_POST['brands_name'],
        "brands_status" => $_POST['brands_status'],
        "brands_updated_at" => CURRENT_DATE_TIME,
        "brands_updated_by" => LOGIN_UserId,
        "brands_image" => $brands_image,
    ];
    $Response = UPDATE("brands", $brands, "brands_id='$brands_id'");
    RESPONSE($Response, "<b>" . $_POST['brands_name'] . "</b> brand details are updated successfully!", "Unable to update brand details!");

    //save category details
} elseif (isset($_POST['SaveCategoryRecords'])) {
    $categories = [
        "categories_name" => $_POST['categories_name'],
        "categories_image" => UPLOAD_FILES("../storage/categories", false, $_POST['categories_name'], "categories_image"),
        "categories_status" => $_POST['categories_status'],
        "categories_created_at" => CURRENT_DATE_TIME,
        "categories_updated_at" => CURRENT_DATE_TIME,
        "categories_created_by" => LOGIN_UserId,
        "categories_updated_by" => LOGIN_UserId
    ];
    $CheckSameCategory = CHECK("SELECT categories_name FROM categories WHERE categories_name='" . $_POST['categories_name'] . "'");
    if ($CheckSameCategory == null) {
        $Response = INSERT("categories", $categories);
    } else {
        $Response = false;
    }
    RESPONSE($Response, "<b>" . $_POST['categories_name'] . "</b> category details are saved!", "Unable to save category details!");

    //update category details
} elseif (isset($_POST['UpdateCategoryRecords'])) {
    $categories_id = SECURE($_POST['categories_id'], "d");
    $categories_image = SECURE($_POST['categories_image'], "d");

    if (CheckFileUploadStatus("categories_image") == null) {
        $categories_image = $categories_image;
    } else {
        $categories_image = UPLOAD_FILES("../storage/categories", false, $_POST['categories_name'] . "categories", "categories_image");
    }

    $categories = [
        "categories_name" => $_POST['categories_name'],
        "categories_image" => $categories_image,
        "categories_status" => $_POST['categories_status'],
        "categories_updated_at" => CURRENT_DATE_TIME,
        "categories_updated_by" => LOGIN_UserId
    ];

    $Response = UPDATE("categories", $categories, "categories_id='$categories_id'");
    RESPONSE($Response, "<b>" . $_POST['categories_name'] . "</b> category details are updated successfully!", "Unable to update category details!");

    //add sub-category details
} elseif (isset($_POST['SaveSubCategoryRecords'])) {
    $categories_sub = [
        "categories_sub_name" => $_POST['categories_sub_name'],
        "categories_sub_status" => $_POST['categories_sub_status'],
        "categories_main_id" => $_POST['categories_main_id'],
        "categories_sub_image" => UPLOAD_FILES("../storage/subcategories", false, $_POST['categories_sub_name'], "categories_sub_image"),
        "categories_sub_created_at" => CURRENT_DATE_TIME,
        "categories_sub_updated_at" => CURRENT_DATE_TIME,
        "categories_sub_created_by" => LOGIN_UserId,
        "categories_sub_updated_by" => LOGIN_UserId
    ];
    $Response = INSERT("categories_sub", $categories_sub);
    RESPONSE($Response, "Sub Categories details are added successfully!", "Unable to add sub categories!");

    //update sub-category details
} elseif (isset($_POST['UpdateSubCategoryRecords'])) {
    $categories_sub_id = SECURE($_POST['categories_sub_id'], "d");
    $categories_sub_image = SECURE($_POST['categories_sub_image'], "d");

    if (CheckFileUploadStatus("categories_sub_image") == null) {
        $categories_sub_image = $categories_sub_image;
    } else {
        $categories_sub_image = UPLOAD_FILES("../storage/subcategories", false, $_POST['categories_sub_name'], "categories_sub_image");
    }

    $categories_sub = [
        "categories_sub_name" => $_POST['categories_sub_name'],
        "categories_sub_status" => $_POST['categories_sub_status'],
        "categories_sub_image" => $categories_sub_image,
        "categories_sub_updated_at" => CURRENT_DATE_TIME,
        "categories_sub_updated_by" => LOGIN_UserId,
        "categories_main_id" => $_POST['categories_main_id']
    ];
    $Response = UPDATE('categories_sub', $categories_sub, "categories_sub_id='$categories_sub_id'");
    RESPONSE($Response, "Sub category details are saved successfully!", "Unable to save sub-category details at the moment!");

    //save product details
} elseif (isset($_POST['AddProducts'])) {

    //form data handler
    include __DIR__ . "/formhandler/ProductRecordHandler.php";

    //save products details
    $products = [
        "products_name" => $_POST['products_name'],
        "product_primary_image" => UPLOAD_FILES("../storage/products", false, $_POST['products_name'], "product_primary_image"),
        "product_category_id" => $product_category_id,
        "product_sub_category_id" => $product_sub_category_id,
        "product_brand_id" => $product_brand_id,
        "product_measurement_unit" => $_POST['product_measurement_unit'],
        "product_more_details" => SECURE($_POST['product_more_details'], "e"),
        "product_created_at" => CURRENT_DATE_TIME,
        "product_updated_at" => CURRENT_DATE_TIME,
        "product_created_by" => LOGIN_UserId,
        "product_updated_by" => LOGIN_UserId,
        "product_serial_no" => $_POST['product_serial_no'],
        "product_status" => $_POST['product_status']
    ];

    $Response = INSERT("products", $products);
    RESPONSE($Response, "Product details are saved successfully!", "Unable to save product details at the moment!");

    //update product details
} elseif (isset($_POST['UpdateProductDetails'])) {
    $products_id = SECURE($_POST['products_id'], "d");

    //form data handler
    include __DIR__ . "/formhandler/ProductRecordHandler.php";

    //handle provious image
    $product_primary_image = SECURE($_POST['product_primary_image'], "d");

    if (CheckFileUploadStatus("product_primary_image") == null) {
        $product_primary_image = $product_primary_image;
    } else {
        $product_primary_image = UPLOAD_FILES("../storage/products", false, $_POST['products_name'], "product_primary_image");
    }

    //update products details
    $products = [
        "products_name" => $_POST['products_name'],
        "product_primary_image" => $product_primary_image,
        "product_category_id" => $product_category_id,
        "product_sub_category_id" => $product_sub_category_id,
        "product_brand_id" => $product_brand_id,
        "product_measurement_unit" => $_POST['product_measurement_unit'],
        "product_more_details" => SECURE($_POST['product_more_details'], "e"),
        "product_updated_at" => CURRENT_DATE_TIME,
        "product_updated_by" => LOGIN_UserId,
        "product_serial_no" => $_POST['product_serial_no'],
        "product_status" => $_POST['product_status'],
    ];

    $Response = UPDATE("products", $products, "products_id='$products_id'");
    RESPONSE($Response, "Product details are updated successfully!", "Unable to update product details at the moment!");

    //remove products records
} elseif (isset($_GET['remove_product_records'])) {
    DeleteReqHandler(
        "remove_product_records",
        [
            "products" => "products_id='" . SECURE($_GET['control_id'], "d") . "'",
        ],
        [
            true => "Product Record Removed Successfully!",
            false => "Unable to remove product at the moment!"
        ]
    );

    //remove brands 
} elseif (isset($_GET['remove_brands_records'])) {
    DeleteReqHandler(
        "remove_brands_records",
        [
            "brands" => "brands_id='" . SECURE($_GET['brands_id'], "d") . "'",
        ],
        [
            true => "Brand Record Removed Successfully!",
            false => "Unable to remove brand at the moment!"
        ]
    );

    //remove categories
} elseif (isset($_GET['remove_categories_records'])) {
    DeleteReqHandler(
        "remove_categories_records",
        [
            "categories" => "categories_id='" . SECURE($_GET['categories_id'], "d") . "'",
        ],
        [
            true => "Category Record Removed Successfully!",
            false => "Unable to remove category at the moment!"
        ]
    );

    //remove sub categories records
} elseif (isset($_GET['remove_sub_categories_records'])) {
    DeleteReqHandler(
        "remove_sub_categories_records",
        [
            "categories_sub" => "categories_sub_id='" . SECURE($_GET['categories_sub_id'], "d") . "'",
        ],
        [
            true => "Sub Category Record Removed Successfully!",
            false => "Unable to remove sub category records!"
        ]
    );
}
