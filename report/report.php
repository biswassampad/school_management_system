<?php include('../header.php');
	if(isset($_SESSION['login_type']) && $_SESSION['login_type'] != 'admin'){
	header("Location: logout.php");
	die();
}
?>

<link type="text/css" href="<?php echo WEB_URL; ?>css/bootstrap.css" rel="stylesheet" />
  <div class="content">
    <div class="header_text">Welcome To Report Dashboard</div>
    <div class="top_common_bar">
        <div class="obj_right" style="padding-right:10px !important;">
        	<a class="btn btn_add_new btn-success" href="<?php echo WEB_URL; ?>dashboard.php"><i class="fa"></i>Dashboard</a></div>
        </div>
    <div style="clear:both;"></div>
    <div align="center" style="width:88%;margin:0 auto;padding:0;">
    <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/student_report.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/student.png"></a></div>
        <div class="link_box_text">Student Report</div>
      </div>
      <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/teacher_report.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/teacher.png"></a></div>
        <div class="link_box_text">Teacher Details</div>
      </div>
      <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/mark_report.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/mark.png"></a></div>
        <div class="link_box_text">Mark Report</div>
      </div>
	  <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/teacher_salary_details.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/t_salary.png"></a></div>
        <div class="link_box_text">Teacher Salary</div>
      </div>
	  <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/employee_salary_details.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/e_salary.png"></a></div>
        <div class="link_box_text">Employee Salary</div>
      </div>
	  <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/transport_fee_list.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/tpfee.png"></a></div>
        <div class="link_box_text">Transport Report</div>
      </div>
	  <div class="link_box">
        <div class="link_box_img dashboard_image"><a href="<?php echo WEB_URL; ?>report/hostel_fee_list.php"><img height="80" width="80" src="<?php echo WEB_URL; ?>img/hostel.png"></a></div>
        <div class="link_box_text">Hostel Report</div>
      </div>
      <div style="clear:both"></div>
    </div>
    <br/><br/>
  </div>
  <br/>
  <?php include('../copyright.php');?>
  <?php include('../footer.php');?>
