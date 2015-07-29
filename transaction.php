<?php

// Set variable to parameter status= in url
$transaction_status = $_GET['status'];

// Set variable to parameter type= in url
$transaction_type = $_GET['type'];

// Check type
switch ($transaction_type) {
    case 'Buyer':
        //include 'contents/about.php';
        $transaction_header = 'Jane Doe - Sale';
        $contact_primary = 'Jane Buyer Doe';
        $account_primary = '123 Main Street, Suite 4<br />Cityville, ST 12345';

        $transaction_type_opposite = 'Seller';
        $contact_opposite = 'Stephen Seller';
        $account_opposite = '456 Anywhere Street<br />Somewhere, ST 45678';

        $property_preferences = 'property-preferences.php';
        break;
    case 'Tenant':
        //include 'contents/contacts.php';
        $transaction_header = 'Jane Doe - Lease';
        $contact_primary = 'Jane Tenant Doe';
        $account_primary = '123 Main Street, Suite 4<br />Cityville, ST 12345';

        $transaction_type_opposite = 'Landlord';
        $contact_opposite = 'Larry Landlord';
        $account_opposite = '456 Anywhere Street<br />Somewhere, ST 45678';

        $property_preferences = 'property-preferences.php';
        break;
    case 'Landlord':
        //include 'contents/contacts.php';
        $transaction_header = 'John Smith - Lease';
        $contact_primary = 'Larry Landlord';
        $account_name = 'Business Developement Center';
        $account_primary = '100 Cherokee Blvd # 102 <br />Chattanooga, TN 37405';
        $account_address = '100 Cherokee Blvd # 102';
        $account_city = 'Chattanooga, TN 37405';

        $transaction_type_opposite = 'Tenant';
        $contact_opposite = 'John Smith Tenant';
        $account_opposite = '456 Anywhere Street<br />Somewhere, ST 45678'; 
        break;
    case 'Seller':
        //include 'contents/contacts.php';
        $transaction_header = 'John Smith - Sale';
        $contact_primary = 'John Seller Smith';
        $account_primary = '123 Main Street, Suite 4<br />Cityville, ST 12345';

        $transaction_type_opposite = 'Buyer';
        $contact_opposite = 'Billy Buyer';
        $account_opposite = '456 Anywhere Street<br />Somewhere, ST 45678';
        break;
    default:
        $transaction_header = '<em>New Transaction</em>';
        
}

?>

<?php include 'header.php'; ?>


<!-- //// BODY //// -->

<div class="container-fluid">
    <div class="row">
        <header class="greetings">
            <?php include 'transaction-header.php'; ?>
        </header>
    </div>
</div>

<div class="container">
    <div class="row">
          <?php include 'wizard.php'; ?>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="master col-sm-9"> <!-- MAIN LEFT COLUMN -->
            <?php include 'transaction-main.php'; ?>
      </div>
      <div class="sidebar col-sm-3"> <!-- SIDEBAR RIGHT COLUMN -->
            <?php include 'transaction-sidebar.php'; ?>
      </div>
    </div>
</div>

<!-- //// END BODY //// -->


<?php include 'footer.php'; ?>
   