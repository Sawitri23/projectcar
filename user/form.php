<?php session_start();
include('../condb.php');
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if($level!='user'){
Header("Location: ../logout.php");
}
?>
<?php include('css.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/tds.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><h6>สวัสดี คุณ<?php echo $name; ?></h6></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php include('menu_l.php');?>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                    $p=$_GET['p'];
                    if($p=='addborrow'){
                    include('form_addborrow.php');
                    }else if($p=='editborrow'){
                    include('form_editborrow.php');
                  }else if($p=='fromreturn'){
                    include('fromreturn.php');
                  }else if($p=='editborrow3'){
                     include('form_editborrow3.php');
                  }else if($p=='delborrow'){
                    include('form_delborrow.php');
                  }else if($p=='reportborrow'){
                    include('from_reportborrow.php');
                  }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>