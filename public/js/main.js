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
    
    $('.title').on('click', 'input', function () {
        
        $('.title').removeClass('active');
        $('.fields').slideUp(400, function(){
            $(this).find('input').prop("checked", false);
            hide_res();
        });
        
        var title = $(this).parents('.title');
        
        if ($(this).is(":checked")) {
            title.addClass('active');
            title.next().slideDown();
        }
        
    });

    $('.estado').on('click', 'input', function () {
        var id = $(this).attr("show");
        hide_res('resultados-' + id);
        show_res('resultados-' + id);
    });

    function show_res(id) {
        id = id === undefined ? 'content .box' : id;
        $('.' + id).fadeIn();
    }
    
    function hide_res(id) {
        id = id === undefined ? 'content .box' : id;
        $('.' + id).fadeOut();
    }

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

});

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');

});
