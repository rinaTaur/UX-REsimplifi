<?php if ($transaction_type) {
?>

<h2><?php print $transaction_type; ?> Account</h2>
<div class="client-logo" style="background-color: #ccc; display: block; height:70px; width: 70px; float: left; margin-right: 10px;">Logo</div>
<ul class="client-account">
  <li><?php print $account_name; ?></li>
  <li><?php print $account_primary; ?></li>
  <li>USA </li>
  <li>Parent Account <small  class="annotation"><em>(?)</em></small></li>
</ul>
<a href="#" data-toggle="tab" class="btn btn-primary btn-xs btn-block">Edit Account</a>

<!-- /// CONTACTS /// -->
<h4><?php print $transaction_type; ?> Contacts</h4>
<!-- Split button -->
  <div class="btn-group">
    <button type="button" class="btn btn-xs"><small class="contact-primary" title="Primary"><i class="fa fa-file text-primary"></i> </small><?php print $contact_primary; ?></button>
    <button type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li>
        <div class="btn-group">
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Edit</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Delete</a>

        </div>
        
      </li>
      <li role="separator" class="divider"></li>
      <li>
        <ul>
          <li>Department: Procurement</li>
          <li>Email: rose@edge.com</li>
          <li>Fax: (512) 757-9999</li>
          <li>FirstName: Rose</li>
          <li>LastName: Gonzalez</li>
          <li>Title: SVP, Procurement</li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- Split button -->
  <div class="btn-group">
    <button type="button" class="btn btn-xs">Another Contact </button>
    <button type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li>
        <div class="btn-group">
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Edit</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Delete</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Make Primary</a>
        </div>
        
      </li>
      <li role="separator" class="divider"></li>
      <li>
        <ul>
          <li>Department: Procurement</li>
          <li>Email: rose@edge.com</li>
          <li>Fax: (512) 757-9999</li>
          <li>FirstName: Rose</li>
          <li>LastName: Gonzalez</li>
          <li>Title: SVP, Procurement</li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- / primary account and contact -->

  <!-- conditional property preferences -->
  	<?php include $property_preferences; ?>
  <!-- / conditional -->

  <!-- opposite account and contact -->
  <h2><?php print $transaction_type_opposite; ?> Account</h2>
<div class="client-logo" style="background-color: #ccc; display: block; height:70px; width: 70px; float: left; margin-right: 10px;">Logo</div>
<ul class="client-account">
  <li>Account Name</li>
  <li><?php print $account_opposite; ?></li>
  <li>USA </li>
  <li>Parent Account <small  class="annotation"><em>(?)</em></small></li>
</ul>
<a href="#" data-toggle="tab" class="btn btn-primary btn-xs btn-block">Edit Account</a>

<!-- /// CONTACTS /// -->
<h4><?php print $transaction_type_opposite; ?> Contacts</h4>
<!-- Split button -->
  <div class="btn-group">
    <button type="button" class="btn btn-xs"><small class="contact-primary" title="Primary"><i class="fa fa-file text-primary"></i> </small><?php print $contact_opposite; ?></button>
    <button type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li>
        <div class="btn-group">
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Edit</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Delete</a>

        </div>
        
      </li>
      <li role="separator" class="divider"></li>
      <li>
        <ul>
          <li>Department: Procurement</li>
          <li>Email: rose@edge.com</li>
          <li>Fax: (512) 757-9999</li>
          <li>FirstName: Rose</li>
          <li>LastName: Gonzalez</li>
          <li>Title: SVP, Procurement</li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- Split button -->
  <div class="btn-group">
    <button type="button" class="btn btn-xs">Another Contact </button>
    <button type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li>
        <div class="btn-group">
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Edit</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Delete</a>
          <a href="#" data-toggle="tab" class="btn btn-xs btn-default">Make Primary</a>
        </div>
        
      </li>
      <li role="separator" class="divider"></li>
      <li>
        <ul>
          <li>Department: Procurement</li>
          <li>Email: rose@edge.com</li>
          <li>Fax: (512) 757-9999</li>
          <li>FirstName: Rose</li>
          <li>LastName: Gonzalez</li>
          <li>Title: SVP, Procurement</li>
        </ul>
      </li>
    </ul>
  </div>

<?php 
    } else {

?>
  <div class="well">
    <a href="#" data-toggle="tab" class="btn btn-primary btn-xs btn-block">Add Account</a>
  </div>
  <div class="well">
    <a href="#" data-toggle="tab" class="btn btn-primary btn-xs btn-block">Add Contacts</a>
  </div>

<?php

    } ?>