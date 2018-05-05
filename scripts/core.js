(function( $ ) {
jQuery.fn.APICall = function(url, data, success, complete) {
        jQuery.ajax({
            url: url,
            dataType: 'JSON',
            async: true,
            data: data,
            success: function(response) {
                success(response);
            },
            complete: function() {
                complete();
            },
            error: function(er1, er2, er3) {
                console.log(er1);
                console.log(er2);
                console.log(er3);
            }
        });
};
}( jQuery ));

jQuery('body').APICall('http://local.bothive.com/Task__FirstLookBotHive/', {
    url: "members",
    fetch_all: true,
    apikey: "2222",
}, function(response) {
    let fetched_data = [];

    let i = 0;
    jQuery.each(response, function(item) {
        fetched_data[i] = {};
        fetched_data[i].name = 'Midjylland';
        fetched_data[i].value = 10;
        fetched_data[i].symbolSize = 30;
        fetched_data[i].category = 'Midjylland';
        fetched_data[i].draggable = true;
        i++;
    });

    runChart(fetched_data);

}, function() {
    console.log('done');
});

function runChart(data) {


}