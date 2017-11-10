$(document).ready(function(){
    // console.log(1);
    var banner = document.getElementById('dragula_banner');

    var drake = dragula([banner],{
        moves: function(el, source, handle, sibling){
            // console.log($(handle).attr('id'));
            return $(handle).attr('id') == 'move-a' ? true : false;
        }
    });

    drake.on('drop', function(el, target, source, sibling){
        // console.log(el);
        var arr = Array();
        $('.banner_element').each(function(index){
            if ((parseInt(index) + 1) != $('.banner_element').length) {
                arr[index] = $('.banner_element').eq(index).attr('banner_id');
            }
        });
        // console.log(arr);
        $.ajaxSetup({//配合页面的<meta name="_token" content="{!! csrf_token() !!}"/>达到使用ajax的post方法
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        
        $.ajax({
            type: 'post',
            url: '/admin/index/updateBannersPosition',
            data: {data:arr},
            dataType: 'json',
            success: function(result){
                if (result.success) {
                    // location.reload();
                } else {
                    alert(result.msg);
                }
            }
        });
    });

    $('.btn_del_banner').click(function(){
        if (confirm($("input[name=del_banner_confirm]").val())) {//弹窗提示获取true执行一下步骤
            // console.log(1);
            var banner_id = $(this).attr('banner_id');
            $.ajaxSetup({//配合页面的<meta name="_token" content="{!! csrf_token() !!}"/>达到使用ajax的post方法
               headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
            console.log(banner_id);
            $.ajax({
                type: 'post',
                url: '/admin/index/delBanner',
                data: {banner_id: banner_id},
                dataType: 'json',
                success: function(result){
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.errors);
                    }
                }
            });
        }
    });
});