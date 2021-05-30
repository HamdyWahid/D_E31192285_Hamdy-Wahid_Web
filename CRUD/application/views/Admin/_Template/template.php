<! DOCTYPE html>
<html lang="en">
    <?php echo @$head; ?>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <?php echo @$sidebar; ?>
    <!-- end of sidebar -->

    <!-- content wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- main content -->
        <div id="content">

        <!-- Topbar -->
        <?php echo @$topbar; ?>
        <!-- end of topbar -->

        <!-- Begin Page Content -->
        <?php echo @$content; ?>

</div>

<!-- Footer -->
<?php echo @$footer; ?>

</div>

<!-- Scroll Top Button -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angel-up"></i>

    <!-- Logout -->
    <div class="modal fade" id="logoutmodel" tabindex="-1" role="dialog"
    aria-labelledby="examplemodallabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplemodallabel">Ready to leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">x<span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!--Bootsrtap -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js//sb-admin/sb-admin-2.min.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js//demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js//demo/chart-pie-demo.js') ?>"></script>
</body>

</html>