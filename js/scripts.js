$(function(){
    $('div.barm i').click(function(){
        var lista= $('div.navm');
        if(lista.is(':hidden')== true){
            var icone = $('div.barm i');
            icone.removeClass('fa-solid fa-bars');
            icone.addClass('fa-solid fa-xmark');
            lista.slideToggle();
        }
        else{
            var icone = $('div.barm i');
            icone.removeClass('fa-solid fa-xmark');
            icone.addClass('fa-solid fa-bars');
            lista.slideToggle();
        }

    })
})