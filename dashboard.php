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
        <div class="pad30">
          <div class="employee_details">
            <div class="row">
              <div class="col-md-6">
                <div class="pad_r40">
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Employee Name <span>:</span> </div>
                    <div class="employee_info_r"> Abhishek Bhardwaj </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Employee ID <span>:</span> </div>
                    <div class="employee_info_r"> IN007115 </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Department <span>:</span> </div>
                    <div class="employee_info_r"> Retail Claims </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Office Location <span>:</span> </div>
                    <div class="employee_info_r"> Pitampura </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Contact Number <span>:</span> </div>
                    <div class="employee_info_r"> 9873913362 </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Employment Type<span>:</span> </div>
                    <div class="employee_info_r"> PERMANENT </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Date <span>:</span> </div>
                    <div class="employee_info_r"> 13-02-2019 </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pad_l40">
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Branch Name <span>:</span> </div>
                    <div class="employee_info_r"> Pitampura </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Branch Code <span>:</span> </div>
                    <div class="employee_info_r"> 12 </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> email ID <span>:</span> </div>
                    <div class="employee_info_r"> Abhishek.bhardwaj1@bhartiaxa.com </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> Grade <span>:</span> </div>
                    <div class="employee_info_r"> AVP - Retail Claims </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> N+1 Name <span>:</span> </div>
                    <div class="employee_info_r"> Amit Sharma </div>
                  </div>
                  <div class="employee_info_row">
                    <div class="employee_info_l"> N+1 email ID <span>:</span> </div>
                    <div class="employee_info_r"> amit.sharma1@bhartiaxa.com </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="user_type">
            <h5>USER TYPE</h5>
            <div class="user_type_bg">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="checkbox" id="newuser" checked>
                    <label for="newuser">New User</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="checkbox" id="modifications">
                    <label for="modifications">Modifications</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="checkbox" id="deletion">
                    <label for="deletion">Deletion</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="myrequest">
            <div class="req_hed"> <span>My Requests</span>
              <div class="reqicons"><a href="#"><img src="images/qaicon.png"></a> <a href="#"><img src="images/dotsicon.png"></a> <a href="#"><img src="images/cicon.png"></a> </div>
            </div>
            <div class="rqe_row">
              <div class="row-flex rowhed">
                <div class="coll-1">Request ID</div>
                <div class="coll-2">Requested for</div>
                <div class="coll-3">Subject</div>
                <div class="coll-4">Start Date</div>
                <div class="coll-5">End Date</div>
                <div class="coll-6">Progress</div>
              </div>
            </div>
            <div class="rqe_row font12"> Showing last 5 Records Use Expand icon for </div>
            <div class="rqe_row graybg">
              <div class="row-flex rowhed">
                <div class="coll-1"> <img src="images/complogo.png"></div>
                <div class="coll-2"> </div>
                <div class="coll-3">Request </div>
                <div class="coll-4"> </div>
                <div class="coll-5"> </div>
                <div class="coll-6">
                  <div class="status_row">
                    <div class="status_col first active"> <span></span>
                      <p>Submited</p>
                    </div>
                    <div class="status_col active"> <span></span>
                      <p>Manager Submitted</p>
                    </div>
                    <div class="status_col approvel"> <span></span>
                      <p>Over Approvel</p>
                    </div>
                    <div class="status_col"> <span></span>
                      <p>Processing</p>
                    </div>
                    <div class="status_col last"> <span></span>
                      <p>Completed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rqe_row">
              <div class="row-flex rowhed">
                <div class="coll-1"> <img src="images/complogo.png"></div>
                <div class="coll-2"> </div>
                <div class="coll-3">Request </div>
                <div class="coll-4"> </div>
                <div class="coll-5"> </div>
                <div class="coll-6">
                  <div class="status_row">
                    <div class="status_col first active"> <span></span>
                      <p>Submited</p>
                    </div>
                    <div class="status_col active"> <span></span>
                      <p>Manager Submitted</p>
                    </div>
                    <div class="status_col approvel"> <span></span>
                      <p>Over Approvel</p>
                    </div>
                    <div class="status_col"> <span></span>
                      <p>Processing</p>
                    </div>
                    <div class="status_col last"> <span></span>
                      <p>Completed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rqe_row graybg">
              <div class="row-flex rowhed">
                <div class="coll-1"> <img src="images/complogo.png"></div>
                <div class="coll-2"> </div>
                <div class="coll-3">Request </div>
                <div class="coll-4"> </div>
                <div class="coll-5"> </div>
                <div class="coll-6">
                  <div class="status_row">
                    <div class="status_col first active"> <span></span>
                      <p>Submited</p>
                    </div>
                    <div class="status_col active"> <span></span>
                      <p>Manager Submitted</p>
                    </div>
                    <div class="status_col approvel"> <span></span>
                      <p>Over Approvel</p>
                    </div>
                    <div class="status_col"> <span></span>
                      <p>Processing</p>
                    </div>
                    <div class="status_col last"> <span></span>
                      <p>Completed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rqe_row">
              <div class="row-flex rowhed">
                <div class="coll-1"> <img src="images/complogo.png"></div>
                <div class="coll-2"> </div>
                <div class="coll-3">Request </div>
                <div class="coll-4"> </div>
                <div class="coll-5"> </div>
                <div class="coll-6">
                  <div class="status_row">
                    <div class="status_col first active"> <span></span>
                      <p>Submited</p>
                    </div>
                    <div class="status_col active"> <span></span>
                      <p>Manager Submitted</p>
                    </div>
                    <div class="status_col approvel"> <span></span>
                      <p>Over Approvel</p>
                    </div>
                    <div class="status_col"> <span></span>
                      <p>Processing</p>
                    </div>
                    <div class="status_col last"> <span></span>
                      <p>Completed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
