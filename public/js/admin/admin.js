$(document).ready(function(){
    $('.panel-heading').find('.btn_to_form').click(function(){
        if ($(this).find('.first').hasClass('hidden')) {
            $(this).find('.first').removeClass('hidden');
            $(this).find('.fa-check').addClass('hidden');
            $(this).parent().parent().find('.panel_show').css('display', 'block');
            $(this).parent().parent().find('.panel_form').css('display', 'none');
        } else {
            $(this).find('.first').addClass('hidden');
            $(this).find('.fa-check').removeClass('hidden');
            $(this).parent().parent().find('.panel_show').css('display', 'none');
            $(this).parent().parent().find('.panel_form').css('display', 'block');
        }
    });
    $('.form-radio').click(function(){
        radio = $(this);
        if ($(this).find('input[type=radio]').attr("checked")) {
            radio_style(1, radio);
            $(this).find('input[type=radio]').removeAttr("checked");
        } else {
            radio_style(0, radio);
            $(this).parent().find('input[type=radio]').removeAttr("checked");
            $(this).find('input[type=radio]').attr("checked","checked");
        }
    });


    $('.file_image').find('input[type=file]').change(function(){
        console.log($(this));
        var file_image = $(this).files;
        $(this).parent().find('span').text(file_image[0].name);
    });
    $(".a-upload").on("change","input[type='file']",function(){
    var filePath=$(this).val();
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
        $(".fileerrorTip").html("").hide();
        var arr=filePath.split('\\');
        var fileName=arr[arr.length-1];
        $(".showFileName").html(fileName);
    }else{
        $(".showFileName").html("");
        $(".fileerrorTip").html("您未上传文件，或者您上传文件类型有误！").show();
        return false 
    }
})
});

function radio_style(check, radio){
    // console.log(radio.hasClass('radio-number'));
    if (check) {
        if (radio.hasClass('radio-number')) {
            radio.find('span').css('background-color', '#B1BBBE');
        }
    } else {
        if (radio.hasClass('radio-number')) {
            radio.parent().find('span').css('background-color', '#B1BBBE');
            radio.find('span').css('background-color', '#637176');
        }
    }
}