$(document).ready(function(){
    $('.panel-heading').find('.btn_to_form').click(function(){
        if ($(this).find('.first').hasClass('hidden')) {
            $(this).find('.first').removeClass('hidden');
            $(this).find('.fa-check').addClass('hidden');
            $(this).parent().parent().find('.panel-show').css('display', 'block');
            $(this).parent().parent().find('.panel-form').css('display', 'none');
        } else {
            $(this).find('.first').addClass('hidden');
            $(this).find('.fa-check').removeClass('hidden');
            $(this).parent().parent().find('.panel-show').css('display', 'none');
            $(this).parent().parent().find('.panel-form').css('display', 'block');
        }
    });
});