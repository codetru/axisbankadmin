<!DOCTYPE html>
<html lang="en">
<?php require_once 'nav-header-page.php'; ?>
<body id="page-top">
<div id="wrapper">
  <!-- Sidebar -->
  <?php require_once 'nav-side-bar-menthion.php'; ?>
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <?php require_once 'nav-header-page-profile.php'; ?>
      <div class="container-fluid relative">
        <div class="form_heading" style="text-align: left;color: #213682;"><span style="margin-left: 10px;"> E Renewal access form </span></div>
        <div class="form_inputs"></div>
        <div class="pad30">
          <div class="form_row">
            <div class="form_heading" style="text-align: left !important;"> <label style="margin-left: 10px !important;color: #213682;">Underwriting</label></div>
            <div class="form_inputs">
              <div class="row">
               
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm1" checked="">
                      <label for="com_clm1">U1</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm2">
                      <label for="com_clm2">U2</label>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form_heading" style="text-align: left !important;"> <label style="margin-left: 10px !important;color: #213682;">Sales</label></div>
            <div class="form_inputs">
              <div class="row">
               
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm1" checked="">
                      <label for="com_clm1">S1</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm2">
                      <label for="com_clm2">S2</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm2">
                      <label for="com_clm2">S3</label>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form_heading" style="text-align: left !important;"> <label style="margin-left: 10px !important;color: #213682;">Corporate Operations</label></div>
            <div class="form_inputs">
              <div class="row">
               
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm1" checked="">
                      <label for="com_clm1">C1</label>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="form_heading" style="text-align: left !important;"> <label style="margin-left: 10px !important;color: #213682;">Information Technology</label></div>
            <div class="form_inputs">
              <div class="row">
               
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm1" checked="">
                      <label for="com_clm1">IT1</label>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          
          <div class="backmenu"><a href="dashboard.php">Back to main menu</a></div>
          
          <p class="notetext"><strong>Note:</strong> - If it is a cross functional roles please seek approval from Risk management Team.</p>
          <p class="notetext"> <span style="color: red;">-* Please provide full details, else the request would be rejected.</span></p>
          
		<?php require_once 'side-menu-items-scroll.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
$(".access_link a").click(function(){
  $(".accessmenu").show();
});
$(".closebtn").click(function(){
  $(".accessmenu").hide();
});
</script>
</body>
</html>
