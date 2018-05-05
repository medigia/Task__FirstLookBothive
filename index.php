<!DOCTYPE html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
       <div id="container" style="height: 100%"></div>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>


       <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};

option = {
    backgroundColor: new echarts.graphic.RadialGradient(0.3, 0.3, 0.8, [{
        offset: 0,
        color: '#f7f8fa'
    }, {
        offset: 1,
        color: '#cdd0d5'
    }]),
    title: {
        text: "Hvor kommer vi fra?",
        subtext: "En geografisk inddeling som BotHive ser det",
        top: "top",
        left: "center"
    },
    tooltip: {},
    legend: [{
        formatter: function(name) {
            return echarts.format.truncateText(name, 40, '14px Microsoft Yahei', '…');
        },
        tooltip: {
            show: true
        },
        selectedMode: 'false',
        bottom: 20,
        data: ['Midtjylland', 'Syddanmark', 'Sjælland', 'Nordjylland', 'Hovedstaden'],
        padding: [10, 10, 10, 10],
    }],
    toolbox: {
        show: true,
        feature: {
            dataView: {
                show: true,
                readOnly: true
            },
            restore: {
                show: true
            },
            saveAsImage: {
                show: true
            }
        }
    },
    animationDuration: 3000,
    animationEasingUpdate: 'quinticInOut',
    series: [{
        name: 'BotHive',
        type: 'graph',
        layout: 'force',

        force: {
            repulsion: 300
        },
        data: [{
            "name": "BotHive",
            // "x": 0,
            // y: 0,
            "symbolSize": 150,
            "draggable": "true",
            "value": 27,
            "symbol": 'image://images/BotHive.png'
        }, {
            "name": "Midtjylland",
            "value": 30,
            "symbolSize": 30,
            "category": "Midtjylland",
            "draggable": "true"
        }, {
            "name": "Julie Nielsen",
            "symbolSize": 50,
            "category": "Midtjylland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/JulieNielsen.png'
        }, {
            "name": "Sune Jensen",
            "symbolSize": 50,
            "category": "Midtjylland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/SuneJensen.png'
        }, {
            "name": "Albert Einstein",
            "symbolSize": 50,
            "category": "Midtjylland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/AlbertEinstein.png'
        }, {
            "name": "Syddanmark",
            "value": 30,
            "symbolSize": 30,
            "category": "Syddanmark",
            "draggable": "true"
        }, {
            "name": "Dennis Holmgreen",
            "symbolSize": 50,
            "category": "Syddanmark",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/DennisHolmgreen.png'
        }, {
            "name": "Jesper Holm",
            "symbolSize": 50,
            "category": "Syddanmark",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/JesperHolm.png'
        }, {
            "name": "Sjælland",
            "value": 130,
            "symbolSize": 30,
            "category": "Sjælland",
            "draggable": "true"
        }, {
            "name": "Stephen Hawking",
            "symbolSize": 50,
            "category": "Sjælland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/StephenHawking.png'
        }, {
            "name": "Steve Jobs",
            "symbolSize": 50,
            "category": "Sjælland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/SteveJobs.png'
        }, {
            "name": "Nordjylland",
            "value": 40,
            "symbolSize": 30,
            "category": "Nordjylland",
            "draggable": "true"
        }, {
            "name": "Bill Gates",
            "symbolSize": 50,
            "category": "Nordjylland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/BillGates.png'
        }, {
            "name": "Mr. Clips",
            "symbolSize": 50,
            "category": "Nordjylland",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/MrClips.png'
        }, {
            "name": "Hovedstaden",
            "value": 8,
            "symbolSize": 30,
            "category": "Hovedstaden",
            "draggable": "true"
        }, {
            "name": "Elon Musk",
            "symbolSize": 50,
            "category": "Hovedstaden",
            "draggable": "true",
            "value": 1,
            "symbol": 'image://images/ElonMusk.png'
        }],
        links: [{
            "source": "BotHive",
            "target": "Midtjylland"
        }, {
            "source": "Midtjylland",
            "target": "Julie Nielsen"
        }, {
            "source": "Midtjylland",
            "target": "Sune Jensen"
        }, {
            "source": "Midtjylland",
            "target": "Albert Einstein"
        }, {
            "source": "BotHive",
            "target": "Syddanmark"
        }, {
            "source": "Syddanmark",
            "target": "Dennis Holmgreen"
        }, {
            "source": "Syddanmark",
            "target": "Jesper Holm"
        }, {
            "source": "BotHive",
            "target": "Sjælland"
        }, {
            "source": "Sjælland",
            "target": "Stephen Hawking"
        }, {
            "source": "Sjælland",
            "target": "Steve Jobs"
        }, {
            "source": "BotHive",
            "target": "Nordjylland"
        }, {
            "source": "Nordjylland",
            "target": "Bill Gates"
        }, {
            "source": "Nordjylland",
            "target": "Mr. Clips"
        }, {
            "source": "BotHive",
            "target": "Hovedstaden"
        }, {
            "source": "Hovedstaden",
            "target": "Elon Musk"
        }, {
            "source": "BotHive",
            "target": "whatever"

        }],
        categories: [{
            'name': 'Midtjylland'
        }, {
            'name': 'Syddanmark'
        }, {
            'name': 'Sjælland'
        }, {
            'name': 'Nordjylland'
        }, {
            'name': 'Hovedstaden'
        }, {

        }],
        focusNodeAdjacency: true,
        roam: true,
        label: {
            normal: {

                show: true,
                position: 'top',

            }
        },
        lineStyle: {
            normal: {
                color: 'source',
                curveness: 0,
                type: "solid"
            }
        }
    }]
};



if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>

   </body>
</html>