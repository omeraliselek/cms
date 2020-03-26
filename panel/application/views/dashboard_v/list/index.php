<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view("includes/head");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php $this->load->view("includes/navbar");?>

<?php $this->load->view("includes/aside");?>

<?php $this->load->view("includes/Header");?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <?php $this->load->view("{$ViewFolder}/{$subViewFolder}/content");?>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("includes/footer");?>

<?php $this->load->view("includes/include_script");?>
</body>
</html>
