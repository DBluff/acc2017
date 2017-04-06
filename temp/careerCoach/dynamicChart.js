function drawChart() {
    var loopCount = jQuery("#myLoopValue").val() - 1;
    var onetcodes = jQuery("#myOnetCodes").val().split(",");

    for (var i = 0; i < onetcodes.length; i++) {
        var onet = onetcodes[i]

        var jsonData = jQuery.ajax({
            url: 'http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/sites/all/themes/acc2017/temp/careerCoach/data_' + onet + '.json',
            dataType: "json",
            async: false,
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);

        var options = {
            pointSize: '10',
            pointShape: 'star',
            dataOpacity: '1.0',
            curveType: 'function',
            chartArea: {
                width: '60%'
            },
            legend: {
                position: 'none'
            },
            hAxis: {
                minValue: '0',
                maxValue: '100',
                format: '#\'%\'',
                gridlines: {
                    color: 'transparent'
                },
            },
            annotations: {
                stemLength: 30,
                textStyle: {
                    fontSize: 10,
                }
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div' + i));
        chart.draw(data, options);
    }

}