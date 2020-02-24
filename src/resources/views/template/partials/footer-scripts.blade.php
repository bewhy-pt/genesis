<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

@yield('scripts-footer')

<script type="text/javascript">
    $(function () {
        {{-- Garante que o CSRF token segue com os ajax's --}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);

            return false;
        });

    });

    function setFooterMessage(type, msg){
        var str;
        if(type == "W"){
            str = '<div class="alert alert-warning alert-icon mb-0"><i class="fe fe-bell  mr-2" aria-hidden="true"></i><strong>Aviso!</strong>&nbsp;'+msg+' </div>';
        }
        else if(type == "I") {
            str =  '<div class="alert alert-info mb-0">' +
                        '<div class="spinner">\n' +
                            '<div class="dot1"></div>\n' +
                            '<div class="dot2"></div>\n' +
                        '</div>&nbsp;&nbsp;' +
                        '<strong class="ml-6">Em Processo!</strong>&nbsp;' + msg +
                    '</div>';
        }
        else if(type == "S") {
            str = '<div class="alert alert-success alert-icon mb-0 "><i class="fe fe-check  mr-2" aria-hidden="true"></i><strong>Sucesso!</strong>&nbsp;'+msg+' </div>';
        }
        else if(type == "E") {
            str = '<div class="alert alert-danger alert-icon mb-0"><i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i><strong>Erro!</strong>&nbsp;' + msg + ' </div>';
        }

        $("#footer-helper").html(str);
    }

</script>

@stack('scripts')

