</div>
</div>
<!-- /page content -->
</div><!--main-content-->
</div><!--container body-->
<footer>
    <div class="pull-right">
        &copy; Copyright <?php echo date('Y'); ?> - <a href="/">Store Trang Sức</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/starrr/dist/starrr.js"></script>
<!-- validator -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/validator/validator.js"></script>
<!-- Dropzone.js -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!--checkeditor-->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/ckeditor/build-config.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/inputfile/fileinput.js" type="text/javascript"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo curPageURL(); ?>public/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<!-- Chart.js -->
<script src="<?php echo curPageURL(); ?>public/admin/vendors/Chart.js/dist/Chart.min.js"></script>
<script>
    var editor = CKEDITOR.replace('textarea');
    var editor1 = CKEDITOR.replace('textarea1');
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script>
    $('#myDatepicker').datetimepicker();
</script>
<script>
    $(document).on('ready', function () {
        $("#file-view").fileinput({
            showUpload: false,
            dropZoneEnabled: false,
            maxFileCount: 10,
            mainClass: "input-group-lg"
        });
    });
</script>
<!-- Custom Theme Scripts -->
<script src="<?php echo curPageURL(); ?>public/admin/build/js/custom.min.js"></script>

</body>
</html>