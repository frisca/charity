    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/js/dataTables.bootstrap.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/tether.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/plugins/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/plugins/js/waves.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/plugins/js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/plugins/js/custom.min.js');?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <!--c3 JavaScript -->
    <script src="<?php echo base_url('assets/plugins/d3/d3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/c3-master/c3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    <!-- Chart JS -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            $('[data-toggle="tooltip"]').tooltip();
            $("#joinDate").datepicker({dateFormat: 'dd/mm/yy'});
            $("#birthDate").datepicker({dateFormat: 'dd/mm/yy'});
        });
    </script>
</body>

</html>