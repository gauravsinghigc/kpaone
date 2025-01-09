<?php
$product_category_id = SECURE($_POST['product_category_id'], "d");
$product_brand_id = SECURE($_POST['product_brand_id'], "d");
$new_category_name = SECURE($_POST["new_category_name"], "d");
$product_sub_category_id = SECURE($_POST["product_sub_category_id"], "d");
$new_sub_category_name = SECURE($_POST["new_sub_category_name"], "d");
$new_brand_name = SECURE($_POST["new_brand_name"], "d");

//handle existing category or new category then return common category id
if ($product_category_id == "NEW") {
    $categories = [
        "categories_name" => $new_category_name,
        "categories_image" => "",
        "categories_status" => 1,
        "categories_created_at" => CURRENT_DATE_TIME,
        "categories_updated_at" => CURRENT_DATE_TIME,
        "categories_created_by" => LOGIN_UserId,
        "categories_updated_by" => LOGIN_UserId
    ];
    $Save = INSERT("categories", $categories);
    $product_category_id = FETCH("SELECT categories_id from categories ORDER BY categories_id DESC limit 1", "categories_id");
} else {
    $product_category_id = $product_category_id;
}

//handle existing sub-category or new sub-category then return common sub-category id
if ($product_sub_category_id == "NEW") {
    $categories_sub = [
        "categories_sub_name" => $new_sub_category_name,
        "categories_sub_status" => 1,
        "categories_main_id" => $product_category_id,
        "categories_sub_image" => "",
        "categories_sub_created_at" => CURRENT_DATE_TIME,
        "categories_sub_updated_at" => CURRENT_DATE_TIME,
        "categories_sub_created_by" => LOGIN_UserId,
        "categories_sub_updated_by" => LOGIN_UserId
    ];
    $Save = INSERT("categories_sub", $categories_sub);
    $product_sub_category_id = FETCH("SELECT categories_sub_id from categories_sub ORDER BY categories_sub_id DESC limit 1", "categories_sub_id");
} else {
    $product_sub_category_id = $product_sub_category_id;
}

//handle existing brand or new brand then return common brand id
if ($product_brand_id == "NEW") {
    $brands = [
        "brands_name" => $new_brand_name,
        "brands_status" => 1,
        "brands_created_at" => CURRENT_DATE_TIME,
        "brands_updated_at" => CURRENT_DATE_TIME,
        "brands_created_by" => LOGIN_UserId,
        "brands_updated_by" => LOGIN_UserId,
        "brands_image" => ""
    ];
    $Save = INSERT("brands", $brands);
    $product_brand_id = FETCH("SELECT brands_id from brands ORDER BY brands_id DESC limit 1", "brands_id");
} else {
    $product_brand_id = $product_brand_id;
}
