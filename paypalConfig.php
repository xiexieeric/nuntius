<?php
    /*
        * Config for PayPal specific values
    */

    //Whether Sandbox environment is being used, Keep it true for testing
    define("SANDBOX_FLAG", true);

    //PayPal REST API endpoints
    define("SANDBOX_ENDPOINT", "https://api.sandbox.paypal.com");
    define("LIVE_ENDPOINT", "https://api.paypal.com");

    //Merchant ID
    define("MERCHANT_ID","S6CURD3RT9HFJ");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("SANDBOX_CLIENT_ID" , "AdIyW8kW44n7Zx1EW0aldVRl92k3k_f6ISit8C3B9RT1aJ3C8XR9eolFVwMRe3MwuNB4KBxZSZxhIsVi");
    define("SANDBOX_CLIENT_SECRET", "EInrGM8ufMsWSf0r0CWVP3QKD6wDVnaXiTeLv8oYDWuEoRORRQ6X8aRUN5RXsToZMoTxeu8BrGQ8RcbU");

    //Environments -Sandbox and Production/Live
    define("SANDBOX_ENV", "sandbox");
    define("LIVE_ENV", "production");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("LIVE_CLIENT_ID" , "live_Client_Id");
    define("LIVE_CLIENT_SECRET" , "live_Client_Secret");

    //ButtonSource Tracker Code
    define("SBN_CODE","PP-DemoPortal-EC-IC-php-REST");

?>