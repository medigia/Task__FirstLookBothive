<!DOCTYPE html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
       <div id="main" style="height: 100%"></div>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
       <script src="echarts-wordcloud.min.js"></script>
       <script type="text/javascript">
var chart = echarts.init(document.getElementById('main'));
var app = {};
    option = {
    title:{
        text:"词云图",
        link:'https://github.com/ecomfe/echarts-wordcloud',
        subtext: 'data-visual.cn',
        sublink:'http://data-visual.cn',
    },
    tooltip: {},
    series: [{
        type: 'wordCloud',
        gridSize: 20,
        sizeRange: [12, 50],
        rotationRange: [0, 0],
        shape: 'circle',
        textStyle: {
            normal: {
                color: function() {
                    return 'rgb(' + [
                        Math.round(Math.random() * 160),
                        Math.round(Math.random() * 160),
                        Math.round(Math.random() * 160)
                    ].join(',') + ')';
                }
            },
            emphasis: {
                shadowBlur: 10,
                shadowColor: '#333'
            }
        },
        data: [{
            name: 'Sam S Club',
            value: 10000,
            textStyle: {
                normal: {
                    color: 'black'
                },
                emphasis: {
                    color: 'red'
                }
            }
        }, {
            name: 'Macys',
            value: 8181
        }, {
            name: 'Amy Schumer',
            value: 4386
        }, {
            name: 'Jurassic World',
            value: 4055
        }, {
            name: 'Charter Communications',
            value: 2467
        }, {
            name: 'Chick Fil A',
            value: 2244
        }, {
            name: 'Planet Fitness',
            value: 1898
        }, {
            name: 'Pitch Perfect',
            value: 1484
        }, {
            name: 'Express',
            value: 1112
        }, {
            name: 'Home',
            value: 965
        }, {
            name: 'Johnny Depp',
            value: 847
        }, {
            name: 'Lena Dunham',
            value: 582
        }, {
            name: 'Lewis Hamilton',
            value: 555
        }, {
            name: 'KXAN',
            value: 550
        }, {
            name: 'Mary Ellen Mark',
            value: 462
        }, {
            name: 'Farrah Abraham',
            value: 366
        }, {
            name: 'Rita Ora',
            value: 360
        }, {
            name: 'Serena Williams',
            value: 282
        }, {
            name: 'NCAA baseball tournament',
            value: 273
        }, {
            name: 'Point Break',
            value: 265
        }]
    }]
};


if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>

   </body>
</html>