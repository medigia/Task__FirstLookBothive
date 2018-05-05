<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- including ECharts file -->
    <script src="echarts.min.js"></script>

</head>
<body>
    <!-- prepare a DOM container with width and height -->
    <div id="main" style="width: 1000px;height:1000px;"></div>
    <div id="openness"></div>

       
       <script type="text/javascript">
           // based on prepared DOM, initialize echarts instance
           var myChart = echarts.init(document.getElementById('openness'));
   
           // specify chart configuration item and data
   
      option = {
          backgroundColor: '<?php echo $background_color ?>',
          tooltip: {
              trigger: 'item',
              formatter: "{a} <br/>{b}"
              //formatter: "{a} <br/>{b} : {c}千万元"
          },
          legend: {
              x: 'center',
              y: '15%',
              data: [
               '<?php echo $openness_adventurousness_title ?>', 
              '<?php echo $openness_artisticInterests_title ?>', 
              '<?php echo $openness_emotionality_title ?>', 
              '<?php echo $openness_imagination_title ?>', 
              '<?php echo $openness_intellect_title ?>', 
              '<?php echo $openness_AuthorityChallenging_title ?>'
               ],
              icon: 'circle',
              textStyle: {
                  color: '#fff',
              }
          },
          calculable: true,
          series: [{
              name: '<?php echo $openness_title ?>',
              type: 'pie',
   
              startAngle: 180,
   
              radius: [41, 153.75],
   
              center: ['50%', '75%'],
   
              // 'radius'
              //  'area' 
              roseType: 'area',
   
              avoidLabelOverlap: false,
              label: {
                  normal: {
                      show: true,
                      formatter: '{c}%',
                      color: '#ccc'
                  },
                  emphasis: {
                      show: true
                  }
              },
              labelLine: {
                  normal: {
                      show: true,
                      length2: 1,
                  },
                  emphasis: {
                      show: true
                  }
              },
              data: [
                  {
                      value: <?php echo $openness_adventurousness_percent ?>,
                      name: '<?php echo $openness_adventurousness_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $first_bar ?>'
                          }
                      }
                  },
                  {
                      value: <?php echo $openness_artisticInterests_percent ?>,
                      name: '<?php echo $openness_artisticInterests_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $second_bar ?>'
                          }
                      }
                  },
                  {
                      value: <?php echo $openness_emotionality_percent ?>,
                      name: '<?php echo $openness_emotionality_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $third_bar ?>'
                          }
                      }
                  },
                  {
                      value: <?php echo $openness_imagination_percent ?>,
                      name: '<?php echo $openness_imagination_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $fourth_bar ?>'
                          }
                      }
                  },
                  {
                      value: <?php echo $openness_intellect_percent ?>,
                      name: '<?php echo $openness_intellect_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $fifth_bar ?>'
                          }
                      }
                  },
                  {
                      value: <?php echo $openness_AuthorityChallenging_percent ?>,
                      name: '<?php echo $openness_AuthorityChallenging_title ?>',
                      itemStyle: {
                          normal: {
                              color: '<?php echo $sixth_bar ?>'
                          }
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  },
                  {
                      value: 0,
                      name: "",
                      label: {
                          show: false
                      },
                      labelLine: {
                          show: false
                      }
                  }
              ]
          }]
      };
   
           // use configuration item and data specified to show chart
           myChart.setOption(option);
   
   
    </script>
</body>
</html>