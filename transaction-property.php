<div class="tab-pane active" id="properties">



<?php if($transaction_type) {

  include 'transaction-property-form.php';

} else {

?>
  <div class="view-box">
    <div class="well">
      <h4>No Property found.</h4>
      <a href="#" data-toggle="tab" class="btn btn-primary btn-xs">Add Property</a>
    </div>
  </div>
  


<?php
}
?>
 
</div>