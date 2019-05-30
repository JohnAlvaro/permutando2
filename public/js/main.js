var $ = jQuery;

$(document).ready(function () {
    
    // Checkbox único
    $(document).on('click', '.unique', function () {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
    
    $('.showto').on('click', 'input, select', function () {

        var id = $(this).attr("show");

        $('.content .box:not(.resultados-' + id +')').fadeOut( 300, function() {
            $('.resultados-' + id).hide().fadeIn();
        });

    });



    $('.title').on('click', 'input', function () {
        
        $('.title').removeClass('active');
        $('.fields').slideUp(400, function(){
            $(this).find('input').prop("checked", false);
        });
        
        var title = $(this).parents('.title');
        
        if ($(this).is(":checked")) {
            title.addClass('active');
            title.next().slideDown();
        }
        
    });
<<<<<<< HEAD

    $('.estado, .buscador').on('click', 'input', function () {
=======
/*
    $('.estado').on('click', 'input', function () {
>>>>>>> 3cf7d618731f935e06dcb9959e5ed9bd2d92a1c0
        var id = $(this).attr("show");
        hide_res('resultados-' + id);
        show_res('resultados-' + id);
    });*/
/*
    function show_res(id) {
        id = id === undefined ? 'content .box' : id;
        $('.' + id).fadeIn();
    }
    
    function hide_res(id) {
        id = id === undefined ? 'content .box' : id;
        $('.' + id).fadeOut();
    }*/

    $( '.image .inputfile' ).each( function() {
        var label = $(this).next('label');
        $(this).on( 'change', function( e ) {
            var fileName = '';
            if( e.target.value ) {
                fileName = e.target.value.split( '\\' ).pop();
                label.html(fileName);
            }
        });
    });

    $('.filter').on('click', 'input', function () {



        if ($(this).attr('id') == 'lista') {
            $(this).parent().parent().find('.list').slideDown();
        } else {
            $(this).parent().parent().find('.list').slideUp();
        }

    });

});
