    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/extras.1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/app/app-blog-overview.1.1.0.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckfinder.js');?>"></script>
    <script>
        $('#example').DataTable();
        CKEDITOR.replace('edi');
        $('[data-toggle="tooltip"]').tooltip();
        $("#joinDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'dd/mm/yy',
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $("#birthDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'dd/mm/yy',
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $("#startDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'dd/mm/yy',
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $('#jenisDonatur').change(function(){
            jenisDonatur = $('#jenisDonatur option:selected').val();
            if(jenisDonatur == '1'){
                $('#month_year').css('display', 'block');
            }
            if(jenisDonatur == '2'){
                $('#month_year').css('display', 'none');
            }
            if(jenisDonatur == '3'){
                $('#month_year').css('display', 'none');
            }
        });
        jenisDonatur = $('#jenisDonatur option:selected').val();
        console.log('jenisDonatur:',jenisDonatur);
        if(jenisDonatur == '1'){
            $('#month_year').css('display', 'block');
        }
        if(jenisDonatur == '2'){
            $('#month_year').css('display', 'none');
        }
        if(jenisDonatur == '3'){
            $('#month_year').css('display', 'none');
        }
        $("#endDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'dd/mm/yy',
            prevText:"click for previous months",
            nextText:"click for next months",
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $('#datepicker1').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'mm/yy',
            onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
        $('.search').click(function(){
            if($("#startDate").val() > $("#endDate").val()){
                alert('Dari bulan tidak boleh besar dari Sampai bulan');
                return false;
            }

            if($("#startDate").val() == "" && $("#endDate").val() == ""){
                alert('Dari bulan tidak boleh kosong dari Sampai bulan');
                return false;
            }
        });
    </script>
  </body>
</html>