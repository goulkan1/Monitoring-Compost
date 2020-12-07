


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


    <div id="container" style="width: 1000px; height: 330px; margin: 0 auto"></div>
<script>
        var chart; // global
                var json;
        /**
         * Request data from the server, add it to the graph and set a timeout to request again
         */
        function requestData() {
            $.ajax({
                url: 'http://localhost/skripsi/index.php/pemilik/grafik', 
                dataType: 'text',
                success: function(point) {
                    json = eval('(' + point +')');
                    $.each(json, function(i, item) {
                        x = json[i].x,
                        y = json[i].y,
                        z = json[i].y1

                    })  
                    var series = chart.series[0];
                    var series2 = chart.series[1];
                    series.addPoint([x, y]);                    
                    series2.addPoint([x, z]);                   
                    setTimeout(requestData, 1000);  
                },
                cache: false
            });
        }        
    
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    defaultSeriesType: 'spline',
                    events: {
                            load: requestData
                    }
                },
                title: {
                    text: 'Monitoring Kompos'
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20 * 1000
                },
                yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}°C',
                    style: {
                        color: Highcharts.getOptions().colors[4]
                    }
                },
                title: {
                    text: 'Suhu',
                    style: {
                        color: Highcharts.getOptions().colors[4]
                    }
                },
                opposite: true

            }, { // Secondary yAxis
                title: {
                    text: 'Kelembaban',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                labels: {
                    format: '{value} %',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }

            }],

                series: [{
                    name: 'Suhu',

                data: (function () {
                    var data = [];
                    var json = (function () {
                        var json = null;
                        $.ajax({
                            'async': false,
                            'global': false,
                            url: 'http://localhost/skripsi/index.php/pemilik/grafik',
                            'dataType': "text",
                            'success': function (data) {
                                json = data;
                            }
                        });
                        return json;
                    })(); 
                    output = eval('(' + json + ')');
                    //output = json;
                    $.each(output, function(i, item) {
                        data.push({
                            x: output[i].x,
                            y: output[i].y,
                        });
                    })  
                    return data;
                }())
                },{
                    name: 'Kelembaban',
                    yAxis: 1,
                data: (function () {
                    var data = [];
                    var json = (function () {
                        var json = null;
                        $.ajax({
                            'async': false,
                            'global': false,
                            url: 'http://localhost/skripsi/index.php/pemilik/grafik',
                            'dataType': "text",
                            'success': function (data) {
                                json = data;
                            }
                        });
                        return json;
                    })(); 
                    output = eval('(' + json + ')');
                    //output = json;
                    $.each(output, function(i, item) {
                        data.push({
                            x: output[i].x,
                            y: output[i].y1,
                        });
                    })  
                    return data;
                }())
                }




                ]
            });     
        });
        </script>

        

<div class="pull-left">
</div>
<br><br>
<table class="table table-striped table-bordered" id="data">
<thead>
    <tr>
        <th>Id</th>
        <th>waktu</th>
        <th>Kelembaban</th>
        <th>suhu</th>
    </tr>
</thead>
    <tbody>
    <?php foreach($monitoring as $p){ ?>
        <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo $p['waktu']; ?></td>
        <td><?php echo $p['kelembaban']; ?></td>
        <td><?php echo $p['suhu']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#data').DataTable();
    });
</script>