 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

     <script>
        $(document).ready(function() {
          // enabling popover
          $("[data-toggle=popover]").popover();    

          // another popover
          $("#popoverExampleTwo").popover({
              html : true, 
              content: function() {
                return $('#popoverExampleTwoHiddenContent').html();
              },
              title: function() {
                return $('#popoverExampleTwoHiddenTitle').html();
              }
          });      

          // fire panel
          //open the lateral panel
          $('.cd-btn').on('click', function(event){
            event.preventDefault();
            $('.cd-panel').addClass('is-visible');
          });
          //clode the lateral panel
          $('.cd-panel').on('click', function(event){
            if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
              $('.cd-panel').removeClass('is-visible');
              event.preventDefault();
            }
          });

          // current date
          var d = new Date();

          var month = d.getMonth()+1;
          var day = d.getDate();

          var output = 
              ((''+month).length<2 ? '0' : '') + month + '/' +
              ((''+day).length<2 ? '0' : '') + day + '/' + d.getFullYear() ;
          $('.currentDate').html(output);
        });
     </script>


  </body>
</html>