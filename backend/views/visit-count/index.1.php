<!DOCTYPE html>
<html>
<head>
    <h2>访问量统计</h2>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    <script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
    <script type="text/javascript">
// 路径配置
require.config({
            paths: {
                echarts: 'http://echarts.baidu.com/build/dist'
            }
        });
        var t =  ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"];
        var k = [5, 20, 80, 10, 10, 20];
        // $t =  $this->params['data1'];
        // $k = $this->params['data2'];
        // var_dump($t);
        // exit(0);

        // 使用
        require(
            [
                'echarts',
                'echarts/chart/line' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 



                var option = {
                    tooltip: {
                        show: true
                    },
                    legend: {
                        data:['访问量']
                    },
                    xAxis : [
                        {
                            type : 'category',
                            data : t
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            "name":"访问量",
                            "type":"line",
                            "data":k
                        }
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>
</html>

