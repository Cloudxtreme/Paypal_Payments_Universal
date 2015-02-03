<?php
$lang['PaypalPaymentsUniversal.name'] = "الباي بال (PayPal Payments Standard)";

$lang['PaypalPaymentsUniversal.account_id'] = "PayPal Account Email";
$lang['PaypalPaymentsUniversal.page_style'] = "Page Style Name";
$lang['PaypalPaymentsUniversal.page_style_note'] = "The Page Style Name of the custom payment page theme you created in PayPal. Leave blank for the default page style.";
$lang['PaypalPaymentsUniversal.dev_mode'] = "Developer Mode";
$lang['PaypalPaymentsUniversal.dev_mode_note'] = "Enabling this option will post transactions to the PayPal Sandbox environment. Only enable this option if you are testing with a PayPal Sandbox account.";
$lang['PaypalPaymentsUniversal.api_username'] = "API Username";
$lang['PaypalPaymentsUniversal.api_username_note'] = "This, as well as API Password and API Signature, are required in order to process refunds through PayPal.";
$lang['PaypalPaymentsUniversal.api_password'] = "API Password";
$lang['PaypalPaymentsUniversal.api_signature'] = "API Signature";
$lang['PaypalPaymentsUniversal.pay_type'] = "Payment Options";
$lang['PaypalPaymentsUniversal.pay_type_onetime'] = "One time payments only";
$lang['PaypalPaymentsUniversal.pay_type_subscribe'] = "Subscription payments only";
$lang['PaypalPaymentsUniversal.pay_type_both'] = "One time and subscription payments when possible";
$lang['PaypalPaymentsUniversal.modify'] = "Allow users to modify current and create new subscriptions";

$lang['PaypalPaymentsUniversal.buildprocess.submit'] = "Pay with PayPal";

$lang['PaypalPaymentsUniversal.default_currency'] = "Default Currency";
$lang['PaypalPaymentsUniversal.default_currency_note'] = "this Is the currency that will be used if the client currency is not supported by paypal";

// Errors
$lang['PaypalPaymentsUniversal.!error.account_id.valid'] = "You must enter a valid email address.";
$lang['PaypalPaymentsUniversal.!error.dev_mode.valid'] = "Developer mode must be set to \"true\" if given.";
$lang['PaypalPaymentsUniversal.!error.default_currency.empty'] = "The default Currency Should not be empty , Please Select a Currency.";
?>