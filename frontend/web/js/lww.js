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
