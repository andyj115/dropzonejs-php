
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        
        <meta name='robots' content='noindex, nofollow'>
    
        <meta name='description' content=''>
        <meta name='author' content='andyj115'>

        <link rel='icon' href='favicon.ico'>
        <link rel='apple-touch-icon' href='favicon.png'>

        <title>PDF upload and store</title>

        <link rel='stylesheet' href='//unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css'>
        <link rel='stylesheet' href='//fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Ubuntu:300,400'>
        
        <style>
            * {
                font-family: 'Ubuntu', sans-serif;
                font-weight: 300;
            }        

            body {
                background-color: #f5f5f5;
            }        
        </style>

    </head>
    <body>

        <img src="images/logo.svg" height="64" style="position:absolute;left:32px;top:32px;z-index:99">
        <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>

        <ol class='carousel-indicators'>
            <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='3'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='4'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='5'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='6'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='7'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='8'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='9'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='10'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='11'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='12'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='13'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='14'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='15'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='16'></li>
        </ol>

        <div class='carousel-inner'>
            <div class='carousel-item'><img class='d-block w-100' src='images/00001.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00002.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00003.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00004.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00005.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00006.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00007.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00008.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00009.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00010.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00011.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00012.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00013.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00014.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00015.jpg'></div>
            <div class='carousel-item'><img class='d-block w-100' src='images/00016.jpg'></div>
        </div>

        <div class="modal fade bd-example-modal" id="formPDFLoad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Drag & drop PDF files</h5>
                    </div>

                    <div class="modal-body">
                        <form action="pdf-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src='//unpkg.com/jquery@3.4.1/dist/jquery.min.js'></script>
        <script src='//unpkg.com/popper.js@1.12.6/dist/umd/popper.min.js'></script>
        <script src='//unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.min.js'></script>

        <script src="dropzone.js"></script>
        <script>
            $(document).ready( () => {

                'use strict';

                // initialize theme (material-bootstrap - https://fezvrasta.github.io/bootstrap-material-design)
                $('body').bootstrapMaterialDesign();

                var $item = $('.carousel-item'); 
                var $wHeight = $(window).height();

                $item.eq(0).addClass('active');
                $item.height($wHeight); 
                $item.addClass('full-screen');

                $('.carousel img').each( () => {
                    var $src = $(this).attr('src');
                    var $color = $(this).attr('data-color');
                    $(this).parent().css({
                        'background-image' : 'url(' + $src + ')',
                        'background-color' : $color
                    });
                    $(this).remove();
                });

                $(window).on('resize', () => {
                    $wHeight = $(window).height();
                    $item.height($wHeight);
                });

                $('.carousel').carousel({
                    interval: 6000,
                    pause: 'false'
                });

                // reopen form if closed
                $('#formPDFLoad').modal('show');
                $('#formPDFLoad').on('hidden.bs.modal', (e) => {
                    $('#formPDFLoad').modal('show');
                });

                // ensure focus on field
            //  $('#formPDFLoad').on('shown.bs.modal', function() {
            //      if( $("#inputEmail").val() > '' ) {
            //          $("#inputPassword").focus();
            //      } else {
            //          $("#inputEmail").focus();
            //      }
            //  });
            });        
        </script>

    </body>
</html>