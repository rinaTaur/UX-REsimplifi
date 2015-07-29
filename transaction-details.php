<div class="tab-pane" id="details">

<?php if($transaction_type=='Tenant') {

  echo 'this is a tenant';

} elseif ($transaction_type=='Landlord') {

	echo ' this ia a landlord';

} elseif ($transaction_type=='Buyer') {

	echo ' this ia a buyer';

} elseif ($transaction_type=='Seller') {

	echo ' this ia a seller';

} else {

?>
  <div class="view-box">
    <div class="well">
      <h4>No Transaction data found.</h4>
      <a href="#" data-toggle="tab" class="btn btn-primary btn-xs">Add Transaction Details</a>
    </div>
  </div>
  


<?php
}
?>



</div>