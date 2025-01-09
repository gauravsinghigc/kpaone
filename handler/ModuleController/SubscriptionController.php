<?php
if (isset($_POST['SaveSubscriptionPlanRecords'])) {
    $config_subscriptions = [
        "config_subscription_name" => $_POST['config_subscription_name'],
        "config_subscription_pay_period" => $_POST['config_subscription_pay_period'],
        "config_subscription_payable_amount" => $_POST['config_subscription_payable_amount'],
        "config_subscription_desc" => SECURE($_POST['config_subscription_desc'], "e"),
        "config_subs_status" => $_POST['config_subs_status'],
        "config_subs_created_at" => CURRENT_DATE,
        "config_subs_updated_at" => CURRENT_DATE,
        "config_subs_created_by" => LOGIN_UserId,
        "config_subs_updated_by" => LOGIN_UserId,
        "config_subscription_short_name" => $_POST['config_subscription_short_name'],
        "config_subscription_free_limits" => $_POST['config_subscription_free_limits'],
        "config_subscription_max_leads" => $_POST['config_subscription_max_leads'],
    ];
    $Response = INSERT("config_subscriptions", $config_subscriptions);
    RESPONSE($Response, "Subscription plan details are updated successfully!", "Unable to update subscription plan!");

    //update other configurations
} elseif (isset($_POST['UpdateSubscriptionPlanRecords'])) {
    $config_subs_id = SECURE($_POST['config_subs_id'], "d");
    $config_subscriptions = [
        "config_subscription_name" => $_POST['config_subscription_name'],
        "config_subscription_pay_period" => $_POST['config_subscription_pay_period'],
        "config_subscription_payable_amount" => $_POST['config_subscription_payable_amount'],
        "config_subscription_desc" => SECURE($_POST['config_subscription_desc'], "e"),
        "config_subs_status" => $_POST['config_subs_status'],
        "config_subs_updated_at" => CURRENT_DATE,
        "config_subs_updated_by" => LOGIN_UserId,
        "config_subscription_short_name" => $_POST['config_subscription_short_name'],
        "config_subscription_free_limits" => $_POST['config_subscription_free_limits'],
        "config_subscription_max_leads" => $_POST['config_subscription_max_leads']
    ];
    $Response = UPDATE("config_subscriptions", $config_subscriptions, "config_subs_id='$config_subs_id'");
    RESPONSE($Response, "Subscription plan details are updated successfully!", "Unable to update subscription plan!");

    //create subscription plan for vendors
} elseif (isset($_POST['CreateSubscriptionPlans'])) {
    $config_subs_id = $_POST['subscription_main_id'];
    $SubsSQL = "SELECT * FROM config_subscriptions where config_subs_id='$config_subs_id'";

    $vendor_subscriptions = [
        "subscription_main_id" => $_POST['subscription_main_id'],
        "vendor_main_id" => $_POST['vendor_main_id'],
        "vendor_subscription_name" => FETCH($SubsSQL, "config_subscription_name"),
        "vendor_subscription_start_date" => $_POST['vendor_subscription_start_date'],
        "vendor_subscription_renewal_date" => $_POST['vendor_subscription_renewal_date'],
        "vendor_subsciption_pay_period" => FETCH($SubsSQL, "config_subscription_pay_period"),
        "vendor_subscription_free_limits" => FETCH($SubsSQL, "config_subscription_free_limits"),
        "vendor_subscriptions_notes" => SECURE($_POST['vendor_subscriptions_notes'], "e"),
        "vendor_subscription_amount" => FETCH($SubsSQL, "config_subscription_payable_amount"),
        "vendor_subscription_status" => $_POST['vendor_subscription_status'],
        "vendor_subscription_created_at" => CURRENT_DATE_TIME,
        "vendor_subscription_updated_at" => CURRENT_DATE_TIME,
        "vendor_subscription_created_by" => LOGIN_UserId,
        "vendor_subscription_updated_by" => LOGIN_UserId,
        "vendor_subscription_max_limits" => FETCH($SubsSQL, "config_subscription_max_leads"),
    ];
    $Response = INSERT("vendor_subscriptions", $vendor_subscriptions);
    RESPONSE($Response, "Subscription plan assigned successfully!", "Unable to assign subscription plan!");
}
