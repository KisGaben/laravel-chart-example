<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function buttonfn() {
                let id = $('#input-text').val();
                drawChart(id);
            }


            function drawChart(id = 1) {

                var chartdata;

                // $.ajaxSetup({async: false});
                $.get("/data/" + id,function(data){

                    let chartdata=data.data;

                    var data = google.visualization.arrayToDataTable(chartdata);

                    var options = {
                        title: 'Company Performance',
                        curveType: 'function',
                        legend: {position: 'bottom'}
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);

                });



            }
        </script>
    </head>
    <body>
        <form>
            <label for="input-text">Chart:</label>
            <input type="text" id="input-text">
            <input type="button" onclick="buttonfn()" value="Gomb">
        </form>
        <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </body>
</html>