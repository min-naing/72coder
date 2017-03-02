/**
 * Created by Min Thet Naing on 3/2/2017.
 */


$(document).ready(function(){

    $(".panel-collapse").on("hide.bs.collapse", function(){
        $(this).prev().find('.plus').html('<i class="fa fa-plus"></i>');
    });

    $(".panel-collapse").on("show.bs.collapse", function(){
        $(this).prev().find('.plus').html('<i class="fa fa-minus"></i>');
        $('html,body').scrollTop($(this).parent().offset().top);
    });

    $(".panel-collapse").on("shown.bs.collapse", function(){
        $('html,body').scrollTop($(this).parent().offset().top);
    });

});