<div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3265.7290525443295!2d-85.3112017!3d35.0635126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88605e5ed7352e0d%3A0xad2c0d880bb91230!2sBusiness+Development+Center!5e0!3m2!1sen!2sus!4v1438063527752" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
    <!-- Property Info / field for Seller and Landlord -->
    <div class="client-property fields view-box ">
      <div class="col-sm-7">

      <!-- property field -->
          <div class="form-group">
            <label>Address</label>
            <input class="form-control" value="<?php print $account_address; ?>"/>
          </div>
           <div class="form-group">
            <label>City, ST, Zip</label>
            <input class="form-control" value="<?php print $account_city; ?>"/>
          </div>
          <hr />
          <!-- property field -->
          <div class="form-group">
            <label>Property Description</label>
            <textarea class="form-control"></textarea>
          </div>
          <!-- property field -->
          <div class="form-group">
            <label>Ownership Name (Legal Entity)</label>
            <input type="text" class="form-control" />
          </div>

          <h4>Property Specs</h4>
          <div class="col-sm-6">
            <!-- property field -->
            <div class="form-group">
              <label>Rentable Building Area</label>
              <input type="text" class="form-control" />
            </div>
            <!-- property field -->
            <div class="form-group">
              <label>Floors</label>
              <input type="text" class="form-control" />
            </div>
            <!-- property field picklist -->
            <div class="form-group">
              <label class="control-label" for="selectbasic">Property Type</label>
              <div class="">
                <select id="selectbasic" name="selectbasic" class="form-control">
                  <option value="1">Option one</option>
                  <option value="2">Option two</option>
                </select>
              </div>
            </div>
            <!-- property field picklist -->
              <div class="form-group">
                <label class="control-label" for="selectbasic">Market / Submarket</label>
                <div class="">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                  </select>
                </div>
              </div>

          </div>
         
          <div class="col-sm-6">
            
            <!-- property field -->
            <div class="form-group">
              <label>Tax ID Number</label>
              <input type="text" class="form-control" />
            </div>
            <!-- property field -->
            <div class="form-group">
              <label>Acreage</label>
              <input type="text" class="form-control" />
            </div>
            <!-- property field picklist -->
            <div class="form-group">
              <label class="control-label" for="selectbasic">Zoning</label>
              <div class="">
                <select id="selectbasic" name="selectbasic" class="form-control">
                  <option value="1">Option one</option>
                  <option value="2">Option two</option>
                </select>
              </div>
            </div>
             
          </div>
          <div class="clearfix"></div>

          
          <h4>Listing Agreement</h4>
          
            <!-- property field datepicker -->
            <div class="form-group col-sm-6">
              <label class="control-label" for="selectbasic">Commencement Date</label>
              <input type="date" class="form-control" />
            </div>
            <!-- property field datepicker -->
            <div class="form-group col-sm-6">
              <label class="control-label" for="selectbasic">Expiration Date</label>
              <input type="date" class="form-control" />
            </div>
          
          
         
      </div>
      <div class="col-sm-5">
         
          <div class="carousel slide article-slide" id="article-photo-carousel">
            <style>
              /* Main carousel style */
              .carousel {
                  width: 100%;
                  height: 250px;
                  overflow: hidden;
              }

              /* Indicators list style */
              .article-slide .carousel-indicators {
                  bottom: 0;
                  left: 0;
                  margin-left: 5px;
                  width: 100%;
              }
              /* Indicators list style */
              .article-slide .carousel-indicators li {
                  border: medium none;
                  border-radius: 0;
                  float: left;
                  height: 54px;
                  margin-bottom: 5px;
                  margin-left: 0;
                  margin-right: 5px !important;
                  margin-top: 0;
                  width: 100px;
              }
              /* Indicators images style */
              .article-slide .carousel-indicators img {
                  border: 2px solid #FFFFFF;
                  float: left;
                  height: 54px;
                  left: 0;
                  width: 100px;
              }
              /* Indicators active image style */
              .article-slide .carousel-indicators .active img {
                  border: 2px solid #428BCA;
                  opacity: 0.7;
              }
            </style>

            <!-- Wrapper for slides -->
            <div class="carousel-inner cont-slider">

              <div class="item active">
                          <div class="property-photo-primary" style="background-color: #ccc; display: block; height:400px; width: 100%; margin-bottom: 10px;">Primary Photo</div>

              </div>
              <div class="item">
                          <div class="property-photo-secondary" style="background-color: #ccc; display: block; height:400px; width: 100%; margin-bottom: 10px;">Secondary Photo</div>
              </div>
               <div class="item">
                          <div class="property-photo-misc" style="background-color: #ccc; display: block; height:400px; width: 100%; margin-bottom: 10px;">Floor plan</div>
              </div>
             
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
              </li>
              <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
              </li>
              <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                <img alt="" src="http://placehold.it/250x180">
              </li>

            </ol>
          </div>
          <a href="#" data-toggle="tab" class="btn btn-primary btn-xs btn-block">Add Image</a>

          
           
        </div>
    </div>
    <div class="clearfix"></div>