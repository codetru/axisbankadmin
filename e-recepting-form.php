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
        <div class="form_heading" style="text-align: left;color: #213682;"><span style="margin-left: 10px;"> E receipt access form </span></div>
        <div class="form_inputs"></div>
        <div class="pad30">
          <div class="form_row">
            <p class="notetext">E Receipting New Joiner /Modification Access Request Form</strong></p><p>(Please tick for access rights).</p>
            <div class="form_heading" style="text-align: left !important;"> <label style="margin-left: 10px !important;color: #213682;">User profiles</label></div>
            <div class="form_inputs">
              <div class="row">
               
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm1" checked="">
                      <label for="com_clm1">Sales</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm2">
                      <label for="com_clm2">Cashier</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm3">
                      <label for="com_clm3">Finance</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm4">
                      <label for="com_clm4">Other</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm5">
                      <label for="com_clm5">IT-Admin</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form_row">
            <div class="form_heading" style="text-align: left !important;"><label style="margin-left: 10px !important;color: #213682;">Modification Access</label></div>
            <div class="form_inputs">
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <tr>
                      <td><label for="com_ops1">Earlier Role Sanctioned:-</label></td>
                      <td><input type="text" id="com_ops1" class="form-control" checked=""></td>
                    </tr>
                    <tr>
                      <td><label for="com_ops1">New Role Desired:-</label></td>
                      <td><input type="text" id="com_ops1" class="form-control" checked=""></td>
                    </tr>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
          
          
          <div class="backmenu"><a href="dashboard.php">Back to main menu</a></div>
          
          <p class="notetext"><strong>Note:</strong> - If it is a cross functional roles please seek approval from Risk management Team.</p>
          
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
