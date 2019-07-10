 function filter(){
                var filter = '#container .item'; //找到所有活动
                var filter_b = $('#filters .date-active').first().data('filter'); //对指定日期的活动进行筛选
                if(filter_b != '*'){
                        filter = filter +'.'+filter_b ;  //确定目标
                }                
                $('#container .item').css('display','none'); //不展示
                $('#container .item').css('opacity',0);
                
                $(filter).css('display','block'); //筛选结果展示
                $(filter).css('display');
                $(filter).css('opacity',1);

            }
            $('#filters .date').on('click tap',function(){  //事件控制，date-active
                $this=$(this);
                $('#filters .date:not(.date-1017)').removeClass('date-active');
                $this.addClass('date-active');
                $('#container .item').css('display','none');
                filter();
            });

            $(document).ready(function () {
                filter();
});             

$(function(){

    $('.emotion').qqFace({

        id : 'facebox', 

        assign:'saytext', 

        path:'/images/arclist/' //表情存放的路径

    });

    var count =  $("div.vcontent.bubble.bubble-left").length; //近期评论数量
    for (var i = 0; i < count; i++) {
       $("div.vcontent.bubble.bubble-left")[i].innerHTML = replace_em($("div.vcontent.bubble.bubble-left")[i].innerHTML);
    }

    $(".sub_btn").click(function(){

        var str = $("#saytext").val();

        $("#show").css('border','2px dashed purple');
        $("#show").html(replace_em(str));
    });
});

//查看结果

function replace_em(str){

    str = str.replace(/\</g,'&lt;');

    str = str.replace(/\>/g,'&gt;');

    //str = str.replace(/\n/g,'<br/>');

    str = str.replace(/\[em_([0-9]*)\]/g,'<img src="/images/arclist/$1.gif" border="0" />');

    return str;
}