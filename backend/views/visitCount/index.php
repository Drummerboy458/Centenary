<?php
use Hisune\EchartsPHP\ECharts;
$this->title = '流量统计';
$chart = new ECharts();
$chart->tooltip->show = true;
$chart->legend->data[] = '访问量';
$t =  $this->params['data1'];
$chart->xAxis[] = array(
    'type' => 'created_time',
    'data' => $t
);
$chart->yAxis[] = array(
    'type' => 'nums'
);
$k = $this->params['data2'];
$chart->series[] = array(
    'name' => '访问',
    'type' => 'bar',
    'data' => $k
);
echo $chart->render('simple-custom-id');
?>
