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
        <div class="form_heading" style="text-align: left;color: #213682;"><span style="margin-left: 10px;"> CMS access form </span></div>
        <div class="form_inputs"></div>
        <div class="pad30">
          <div class="form_row">
            <div class="form_inputs">
              <div class="row">
                <table class="table">
                  <tr><td><input type="text" id="com_ops1" class="form-control" placeholder="Line of Business" checked=""></td><td>
                    <div class="col-md-12" style="display: inline-flex;"><div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm2">
                      <label for="com_clm2">COM_CLM2</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm3">
                      <label for="com_clm3">COM_CLM3</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="customcheck">
                    <div class="form-group">
                      <input type="checkbox" id="com_clm3">
                      <label for="com_clm3">COM_CLM3</label>
                    </div>
                  </div>
                </div>
              </div>
                  </td></tr>
                </table>
                
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
