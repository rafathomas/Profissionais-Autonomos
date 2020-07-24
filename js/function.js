$(function() {
    var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');

    function next(elem) {
        atual_fs = $(elem).parent();
        next_fs = $(elem).parent().next();


        $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
        atual_fs.hide(800);
        next_fs.show(800);
    }

    $('.prev').click(function() {
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();


        $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
        atual_fs.hide(800);
        prev_fs.show(800);
    });

    $('input[name=next1]').click(function() {
        var array = formulario.serializeArray();
        if (array[0].value == '' || array[1].value == '' || array[2].value == '') {

            $('.resp').html('<div class="erros"><p>Preencha todos os campos corretamente!</p></div>');
        } else {
            $('.resp').html('');
            next($(this));
        }
    });

    $('input[name=next2]').click(function() {
        var array = formulario.serializeArray();
        if (array[3].value == '' || array[4].value == '' || array[5].value == '' || array[6].value == '') {

            $('.resp').html('<div class="erros"><p>Preencha todos os campos corretamente!</p></div>');
        } else {
            $('.resp').html('');
            next($(this));
        }
    });

    $('input[type=submit]').click(function(evento) {
        var array = formulario.serializeArray();

        if (array[7].value == '' || array[8].value == '' || array[9].value == '') {

            $('.resp').html('<div class="erros"><p>Preencha todos os campos corretamente para efetuarmos seu cadastro!</p></div>');
        } else {

            $.ajax({
                type: 'post',
                url: 'cadastrar.php',
                data: { cadastrar: 'sim', campos: array },
                dataType: 'json',
                beforeSend: function() {
                    $('.resp').html('<div class="erros"><p>Aguarde enquanto processamos seus dados...</p></div>');
                },
                success: function(valor) {

                    if (valor.erro == "sim") {
                        Swal.fire({
                            icon: 'error',
                            title: valor.getErro,
                            showConfirmButton: true,
                        })
                    } else {

                        Swal.fire({
                            icon: 'success',
                            title: valor.msg,
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = "index.php";
                            }
                        });


                    }



                }
            });


        }

        evento.preventDefault();
    });
});