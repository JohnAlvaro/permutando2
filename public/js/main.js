var $ = jQuery;

$(document).ready(function () {
    
    showhideopt();
    
    $(document).on('click', '.to-show', function () {
        
        /* Checkbox único */
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        
        /* Mostrar-ocultar */
        showhideopt();
        
    });
    
    function showhideopt() {
        
        var a, relElem, elemChk, checkElem = [];
        
        $(".to-show").each(function () {
            relElem = $(this).attr("data-show");
            if (relElem !== undefined) {
                console.log(relElem);
                $("." + relElem).removeClass("toShow").addClass("toHide");
                $(this).parents('.title').removeClass('active');
                if ($(this).is(':checked')) {
                    checkElem.push($(this).attr("id")); 
                }
            }
        });
        
        for (a = 0; a < checkElem.length; a += 1) {
            elemChk = $("#" + checkElem[a]);
            relElem = $(elemChk).attr("data-show");
            $("." + relElem).removeClass("toHide").addClass("toShow");
            $(elemChk).parents('.title').addClass('active');
        }
        
        $(".toShow").slideDown();
        $(".toHide").slideUp();
        
    }
    
});