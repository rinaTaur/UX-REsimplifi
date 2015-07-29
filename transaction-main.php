
  <!-- property - details -->
  <div>
    <div id="tab" class="btn-group tab-nav" data-toggle="buttons-radio">
        <a href="#properties" class="btn btn-nav active" data-toggle="tab">Property</a>
        <a href="#details" class="btn btn-nav" data-toggle="tab">Transaction Details</a>
        <a href="#documents" class="btn btn-nav" data-toggle="tab">Documents</a>
        <a href="#notes" class="btn btn-nav" data-toggle="tab">Notes</a>
      </div>
    
       
      <div class="tab-content view-box-border">
        
      
        <?php include 'transaction-property.php'; ?>

        <?php include 'transaction-details.php'; ?>

        <?php include 'transaction-documents.php'; ?>

        <?php include 'transaction-notes.php'; ?>

      
        <div class="tab-pane" id="quickadd-property">
            
        
        </div>
        
      </div>
  </div>
  
  <!-- / property - details -->