<footer class="page-footer footer footer-static footer-dark content-wrapper-before gradient-45deg-indigo-blue">
    <div class="footer-copyright">
        <div class="container"><span>&copy; <?php echo date('Y'); ?> <a href="" target="_blank">Primkoppol Tri Sakti</a> All rights reserved.</span></div>
    </div>
</footer>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url('/public/admin'); ?>/js/vendors.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/data-tables/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/materialize-stepper/materialize-stepper.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url('/public/admin'); ?>/vendors/dropify/js/dropify.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/chartjs/chart.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/chartist-js/chartist.min.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?php echo base_url('/public/admin'); ?>/js/plugins.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/search.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/custom/custom-script.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/customizer.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->

<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/data-tables.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/form-wizard.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/form-file-uploads.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/app-contacts.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/form-elements.js"></script>
<script src="<?php echo base_url('/public/admin'); ?>/js/scripts/dashboard-modern.js"></script>
<script src="<?php echo base_url('/public/ckeditor'); ?>/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/pages/page-account-settings.css">
<!-- END PAGE LEVEL JS-->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->

<script>
    $(document).ready(function() {

        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        jQuery('#ref_kamar_id').change(function() {
            var id = $(this).val();
            var tokenHash = jQuery("input[name=csrf_token_name]").val();
            $('#no_kamar').prev().prev().remove();
            jQuery.ajax({
                url: '/getkamar/' + id,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    id: id,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', tokenHash);
                },
                type: 'GET',
                dataType: 'html',
                success: function(html) {
                    $('#no_kamar').empty();
                    $('#no_kamar').html(html);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);

                },
            });
        });
        $('input:checkbox').change(function() {
            var total = 0;
            $('input:checkbox:checked').each(function() { // iterate through each checked element.
                total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
            });
            $("#total").val(total);

        });

        $('.datepicker').datepicker({
            format: 'yy-mm-dd'
        });
        $('#kamarMTsPa').DataTable({
            "displayLength": 7,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });
        $('#kamarMTsPi').DataTable({
            "displayLength": 7,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });
        $('#kamarMAPa').DataTable({
            "displayLength": 7,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });
        $('#kamarMAPi').DataTable({
            "displayLength": 7,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });
    });
</script>