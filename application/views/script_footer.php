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
    <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckfinder.js');?>"></script>
    <!-- Chart JS -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            $('[data-toggle="tooltip"]').tooltip();
            $("#joinDate").datepicker({dateFormat: 'dd/mm/yy'});
            $("#birthDate").datepicker({dateFormat: 'dd/mm/yy'});
            CKEDITOR.replace('edi');

            $.getJSON("<?php echo base_url();?>transaksi_masuk/notif", function(data){
                if(data.notif.length == 0){
                    $(' ul li#notif a div').css('display', 'none');
                    $('li#notif ul').prepend('<li>'+
                        '<p style="margin: 3px 10px 5px 12px;"> Anda tidak mempunyai notifikasi </p>' +
                    '</li>');
                    $('li#notif ul li:eq(1)').css('display', 'none');
                }else if(data.notif.length == 2){
                    $('li#notif ul').prepend('<li>'+
                        '<h5 class="font-medium py-3 px-4 border-bottom mb-0"> Anda mempunyai ' + data.notif.length + ' notifikasi </h5>' +
                    '</li>');

                    $.each(data.notif, function( i, val ) {
                        $('li#notif ul li div.message-center').append('<a href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>" class="border-bottom d-block text-decoration-none py-2 px-3">' +
                            '<div class="btn btn-primary btn-circle mr-2"><i class="fa fa-credit-card"></i>' +
                            '</div>' +
                            '<div class="mail-contnet d-inline-block align-middle">' +
                                '<h5 class="my-1">' + val.nama + '</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">' + val.description +
                                    '</span>' +
                            '</div>'+
                        '</a>');
                    });

                    $('li#notif ul').append('<li>'+
                        '<a class="nav-link text-center border-top pt-3" href="javascript:void(0);" style="margin-top:-127px;">' +
                            '<strong>Tidak ada detail ' +
                                'notifikasi</strong></a>' +
                    '</li>');
                }else if(data.notif.length == 1){
                    $('li#notif ul').prepend('<li>'+
                        '<h5 class="font-medium py-3 px-4 border-bottom mb-0"> Anda mempunyai ' + data.notif.length + ' notifikasi </h5>' +
                    '</li>');

                    $.each(data.notif, function( i, val ) {
                        $('li#notif ul li div.message-center').append('<a href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>" class="border-bottom d-block text-decoration-none py-2 px-3">' +
                            '<div class="btn btn-primary btn-circle mr-2"><i class="fa fa-credit-card"></i>' +
                            '</div>' +
                            '<div class="mail-contnet d-inline-block align-middle">' +
                                '<h5 class="my-1">' + val.nama + '</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">' + val.description +
                                    '</span>' +
                            '</div>'+
                        '</a>');
                    });

                    $('li#notif ul').append('<li>'+
                        '<a class="nav-link text-center border-top pt-3" href="javascript:void(0);" style="margin-top:-189px;">' +
                            '<strong>Tidak ada detail ' +
                                'notifikasi</strong></a>' +
                    '</li>');
                }else{
                    $('li#notif ul').prepend('<li>'+
                        '<h5 class="font-medium py-3 px-4 border-bottom mb-0"> Anda mempunyai ' + data.notif.length + ' notifikasi </h5>' +
                    '</li>');

                    $.each(data.notif, function( i, val ) {
                        $('li#notif ul li div.message-center').append('<a href="<?php echo base_url("transaksi_masuk/read/'+val.idTransaksiMasuk+'");?>" class="border-bottom d-block text-decoration-none py-2 px-3">' +
                            '<div class="btn btn-primary btn-circle mr-2"><i class="fa fa-credit-card"></i>' +
                            '</div>' +
                            '<div class="mail-contnet d-inline-block align-middle">' +
                                '<h5 class="my-1">' + val.nama + '</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">' + val.description +
                                    '</span>' +
                            '</div>'+
                        '</a>');
                    });

                    $('li#notif ul').append('<li>'+
                        '<a class="nav-link text-center border-top pt-3" href="<?php echo base_url("transaksi_masuk/allRead");?>" style="margin-top:-189px;">' +
                            '<strong>Lihat semua detail ' +
                                'notifikasi</strong></a>' +
                    '</li>');
                }
            });
        });

        // function transaksiProses(){

        //     $.getJSON("<?php echo base_url();?>transaksi_masuk/notif", function(data){
        //         console.log(data.notif);
        //             $.each(data.notif, function( i, val ) {
        //                 console.log(i);
        //                 $('li#notif ul li div.message-center').append('<a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">' +
        //                     '<div class="btn btn-danger btn-circle mr-2"><i class="fa fa-link"></i>' +
        //                     '</div>' +
        //                     '<div class="mail-contnet d-inline-block align-middle">' +
        //                         '<h5 class="my-1">Luanch Admin</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just' +
        //                             'see the my new' +
        //                             'admin!</span> <span class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:30' +
        //                             'AM</span>' +
        //                     '</div>'+
        //                 '</a>');
        //             });
        //     });
        // }

        // setInterval(function(){transaksiProses()}, 1000);


        $('li#notif ul li div.message-center').empty();
    </script>
</body>

</html>