<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is visit-count of backend web
 */
use Hisune\EchartsPHP\ECharts;
$this->title = '访问量统计';
$chart = new ECharts();
$chart->tooltip->show = true;
$chart->legend->data[] = '访问量';
$t =  $this->params['data1'];
$chart->xAxis[] = array(
    'type' => 'category',
    'data' => $t
);
$chart->yAxis[] = array(
    'type' => 'value'
);
$k = $this->params['data2'];
$chart->series[] = array(
    'name' => '访问量',
    'type' => 'line',
    'data' => $k
);
echo $chart->render('simple-custom-id');
?>