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
            format: 'dd/mm/yyyy',
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $("#birthDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            format: 'dd/mm/yyyy',
            showOtherMonths:true,
            selectOtherMonths: true
        }).focus(function(){
            $('.ui-datepicker-calendar').show();
        });
        $("#startDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            format: 'dd/mm/yyyy',
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
            format: 'dd/mm/yyyy',
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
            format: 'mm/yyyy',
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

        $(".comment").keypress(function(e){
            if(e.which == 13){
                if($(this).val() == ""){
                    alert("Tidak boleh kosong");
                }else{
                    // alert($(this).val());
                    var pengumuman = $(this).attr('pengumumanid');
                    $.post( "<?php echo base_url('home/insertComment');?>", { comment: $(this).val(), pengumuman : pengumuman }, function(data){
                        console.log('datas: ', data);
                        if(!data.image){
                            $('.comments').append('<div class="blog-comments__item d-flex p-3" style="width:1000px;">' +
                                '<div class="blog-comments__avatar mr-3">' +
                                    '<img src="<?php echo base_url('gambar/profile/default.png');?>" alt="user" class="img-circle">' + 
                                '</div>' +
                                '<div class="blog-comments__content">' +
                                    '<div class="blog-comments__meta text-muted">' + 
                                    '<a class="text-secondary" href="javascript:void(0)">'+data.nama+'</a>' +
                                    '</div>' + 
                                    '<p class="m-0 my-1 mb-2 text-muted">'+data.comment+'</p>' +
                                '</div>' +
                              '</div>');
                        }else{
                            $('.comments').append('<div class="blog-comments__item d-flex p-3" style="width:1000px;">' +
                                '<div class="blog-comments__avatar mr-3">' +
                                    '<img src="../gambar/profile/'+data.image+'" alt="user" class="img-circle">' + 
                                '</div>' +
                                '<div class="blog-comments__content">' +
                                    '<div class="blog-comments__meta text-muted">' + 
                                    '<a class="text-secondary" href="javascript:void(0)">'+data.nama+'</a>' +
                                    '</div>' + 
                                    '<p class="m-0 my-1 mb-2 text-muted">'+data.comment+'</p>' +
                                '</div>' + 
                              '</div>');
                        }
                    }, 'json');
                }
                $('.comment').val('');
            }
        });

        $.getJSON("<?php echo base_url();?>transaksi_masuk/notif", function(data){
            console.log('data: '  + data.notif);
            if(data.notif.length == 0){
                // $(' ul li#notif a div').css('display', 'none');
                // $('li#notif ul').prepend('<li>'+
                //     '<p style="margin: 3px 10px 5px 12px;"> Anda tidak mempunyai notifikasi </p>' +
                // '</li>');
                // $('li#notif ul li:eq(1)').css('display', 'none');
                $('.notifications a div').append('<span class="badge badge-pill badge-danger"></span>');
                $('.notifications div.dropdown-menu').append('<a class="dropdown-item notification__all text-center" href="javascript:void(0)"> Tidak ada notifikasi </a>');
            }else if(data.notif.length == 1){
                // $('li#notif ul').prepend('<li>'+
                //     '<h5 class="font-medium py-3 px-4 border-bottom mb-0"> Anda mempunyai ' + data.notif.length + ' notifikasi </h5>' +
                // '</li>');

                // $.each(data.notif, function( i, val ) {
                //     $('li#notif ul li div.message-center').append('<a href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>" class="border-bottom d-block text-decoration-none py-2 px-3">' +
                //         '<div class="btn btn-primary btn-circle mr-2"><i class="fa fa-credit-card"></i>' +
                //         '</div>' +
                //         '<div class="mail-contnet d-inline-block align-middle">' +
                //             '<h5 class="my-1">' + val.nama + '</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">' + val.description +
                //                 '</span>' +
                //         '</div>'+
                //     '</a>');
                // });

                // $('li#notif ul').append('<li>'+
                //     '<a class="nav-link text-center border-top pt-3" href="javascript:void(0);" style="margin-top:-127px;">' +
                //         '<strong>Tidak ada detail ' +
                //             'notifikasi</strong></a>' +
                // '</li>');
                // <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                $('.notifications a div').append('<span class="badge badge-pill badge-danger">1</span>');
                $.each(data.notif, function( i, val ) {
                    $('.notifications div.dropdown-menu').append('<a class="dropdown-item" href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>">' +
                        '<div class="notification__icon-wrapper">' +
                        '<div class="notification__icon">' + 
                            '<i class="material-icons">&#xE6E1;</i>' +
                        '</div>' +
                        '</div>' + 
                        '<div class="notification__content">' +
                        '<span class="notification__category">'+val.nama+'</span>' +
                        '<p>'+val.description+'</p>' +
                        '</div>' +
                    '</a>');
                });
            }else{
                $('.notifications a div').append('<span class="badge badge-pill badge-danger">'+data.notif.length+'</span>');
                $.each(data.notif, function( i, val ) {
                    $('.notifications div.dropdown-menu').append('<a class="dropdown-item" href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>">' +
                        '<div class="notification__icon-wrapper">' +
                        '<div class="notification__icon">' + 
                            '<i class="material-icons">&#xE6E1;</i>' +
                        '</div>' +
                        '</div>' + 
                        '<div class="notification__content">' +
                        '<span class="notification__category">'+val.nama+'</span>' +
                        '<p>'+val.description+'</p>' +
                        '</div>' +
                    '</a>');
                });
                $('.notifications div.dropdown-menu').append('<a class="dropdown-item notification__all text-center" href="<?php echo base_url("transaksi_masuk/allRead");?>"> View all Notifications </a>')
            }
        });
    </script>
  </body>
</html>