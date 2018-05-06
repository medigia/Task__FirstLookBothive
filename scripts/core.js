(function( $ ) {
jQuery.fn.APICall = function(url, data, success, compvare) {
        jQuery.ajax({
            url: url,
            dataType: 'JSON',
            async: false,
            data: data,
            success: function(response) {
                success(response);
            },
            compvare: function() {
                compvare();
            },
            error: function(er1, er2, er3) {
                console.log(er1);
                console.log(er2);
                console.log(er3);
            }
        });
};
}( jQuery ));

jQuery('body').APICall('http://local.firsttask.dk/', {
    url: "members",
    fetch_all: true,
    apikey: "2222",
}, function(response) {
    var fetched_parts = [{
        "name": "BotHive",
        // "x": 0,
        // y: 0,
        "symbolSize": 150,
        "draggable": "true",
        "value": 27,
        "symbol": 'image://images/BotHive.png'
    }];
    var fetched_member = [];
    var i = 0;
    console.log(response);
    jQuery.each(response['parts'], function(key, item) {
        var stateValue;
        if(item.state == 0) {
            stateValue = 30;
        } else if(item.state == 1) {
            stateValue = 30;
        }
        fetched_parts[item.id] = {};
        fetched_parts[item.id].name = item.name;
        fetched_parts[item.id].value = 10;
        fetched_parts[item.id].symbolSize = stateValue;
        fetched_parts[item.id].category = item.name;
        fetched_parts[item.id].draggable = true;
        fetched_parts[item.id]['members'] = [];
        i++;
    })

    jQuery.each(response['members'], function(key, item) {
        var stateValue;

        if(item.state == 0) {
            stateValue = 50;
        } else if(item.state == 1) {
            stateValue = 30;
        }
        fetched_member = {};
        fetched_member.name = item.name;
        fetched_member.value = 10;
        fetched_member.symbolSize = 50;
        fetched_member.category = item.name;
        fetched_member.draggable = true;

        fetched_parts[item.partid]['members'][item.id] = fetched_member;
        i++;
    });

    runChart(fetched_parts);



}, function() {
    console.log('done');
});



function runChart(data) {
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    var FormattedData = [{
        "name": "BotHive",
        // "x": 0,
        // y: 0,
        "symbolSize": 150,
        "draggable": "true",
        "value": 27,
        "symbol": 'image://images/BotHive.png'
    }];

    console.log(data);
    var i = 1;
    jQuery.each(data, function(k, v) {
        var members = v.members;
        delete v.members;

        FormattedData[i] = v;
        var j = 1;
        jQuery.each(members, function(k, v) {
            if(v != undefined) {
                FormattedData[i+j] = v;
                j = j+1;
            }

        });


        i = i+j;
    });
    console.log(FormattedData);
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
            data: ['Midtjylland'],
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
            data: FormattedData,
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
}



