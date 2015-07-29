<div class="tab-pane" id="documents">

<?php if($transaction_type=='Seller'||$transaction_type=='Buyer'||$transaction_type=='Tenant'||$transaction_type=='Landlord') {

  //echo ' this ia a seller';
  ?>

  <!-- document layout -->


    <div class="document-templates">

      <h4>Listing Documents</h4>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Template</th>
            <th colspan="2">Executed</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="document-type Word"></div>Listing Proposal</td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Executed 07-29-15 3:41 pm</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-upload"></span> Upload New</a></li>
                  <li><a href="#"><span class="fa fa-trash"></span> Remove File</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Listing Agreement</td>
            <td>
            <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td><button class="btn btn-default btn-xs">Upload </button> </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Excel"></div>Processing Form</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Sign Request</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Flyer Request</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          
        </tfoot>
      </table>

    <h4>Transactional Documents</h4>
    <table class="table">
        <thead>
          <tr>
            <th colspan="2">Template</th>
            <th colspan="2">Executed</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="document-type Word"></div>Proposal</td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Executed 07-29-15 3:41 pm</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-upload"></span> Upload New</a></li>
                  <li><a href="#"><span class="fa fa-trash"></span> Remove File</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Letter of Intent</td>
            <td>
            <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td><button class="btn btn-default btn-xs">Upload </button> </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Excel"></div>Commission Agreement</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type PDF"></div>Agency Disclosure</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Lease</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Excel"></div>Lease Process Form</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Lease Agreement</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          
        </tfoot>
      </table>
    <h4>Procedural Documents</h4>
    <table class="table">
        <thead>
          <tr>
            <th colspan="2">Template</th>
            <th colspan="2">Executed</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="document-type Word"></div>Listing Proposal</td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td>
              <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Executed 07-29-15 3:41 pm</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-upload"></span> Upload New</a></li>
                  <li><a href="#"><span class="fa fa-trash"></span> Remove File</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Listing Agreement</td>
            <td>
            <!-- downloaded button w/ toggle -->
              <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-cloud-download"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <button type="button" class="btn btn-xs btn-default">Downloaded 07-28-15 9:41 am</button>
                
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-cloud-download"></span> Generate New Version</a></li>
                </ul>
              </div>
              <!-- / downloaded button w/ toggle -->
            </td>
            <td><button class="btn btn-default btn-xs">Upload </button> </td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Excel"></div>Processing Form</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Sign Request</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Flyer Request</td>
            <td><button class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Download</button></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          
        </tfoot>
      </table>


        <ul class="hide">
          <li>
            Listing Documents
            <ul>
              <li>Listing Proposal</li>
              <li>Listing Agreement</li>
              <li>Processing Form</li>
              <li>Sign Request</li>
              <li>Flyer Request</li>
            </ul>
          </li>
          <li>
            Transactional Documents
            <ul>
              <li>Proposal</li>
              <li>Letter of Intent</li>
              <li>Commission Agreement</li>
              <li>Agency Disclosure</li>
              <li>Lease</li>
              <li>Lease Process Form</li>
              <li>Lease Amendment</li>
            </ul>
          </li>
          <li>
            Procedural Documents
            <ul>
              <li>Comp Database</li>
              <li>Lease Termination</li>
              <li>Lease Termination Processing</li>
            </ul>
          </li>

        </ul>
    </div>
    <div class="document-uploads">
      <h4>Other Uploads</h4>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">File</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="document-type Word"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
          <tr>
            <td><div class="document-type Excel"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
          <tr>
            <td><div class="document-type PDF"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
          <tr>
            <td><div class="document-type Word"></div>Document Name Here</td>
            <td><small class="muted">07-28-15 9:41 am</small></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"> <button class="btn btn-default btn-xs btn-block">Upload Files </button> </td>
          </tr>
        </tfoot>
      </table>

    </div>

    <div class="clearfix"></div>

  <!-- / document layout -->


  <?php

} else {

?>
  <div class="view-box">
    <div class="well">
      <h4>No Documents found.</h4>
    </div>
  </div>
  


<?php
}
?>



</div>
