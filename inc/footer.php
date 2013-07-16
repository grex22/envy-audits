    <div id="footer">
      <img src="img/custom/envysion.png" class="pull-right">
      Copyright 2013
    </div>

    <!-- scripts -->
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="js/jquery-1.9.0.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/theme.js"></script>
    <!-- morris charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
    
    <!-- Date Parser -->
    <script src="js/moment.min.js"></script>
    <!-- Date Range Picker -->
    <script src="js/daterangepicker.js"></script>
    
    <!-- page-specific scripts -->
    <?php if($_SERVER['PHP_SELF']=="/envysion/client-report-overview.php"): ?>
      <script src="js/pages/client-report-overview.js"></script>
    <?php endif; ?>
    <?php if($_SERVER['PHP_SELF']=="/envysion/index.php"): ?>
      <script src="js/pages/index.js"></script>
    <?php endif; ?>
    <?php if($_SERVER['PHP_SELF']=="/envysion/client-report-detail.php"): ?>
      <script src="js/pages/client-report-detail.js"></script>
    <?php endif; ?>
    <?php if($_SERVER['PHP_SELF']=="/envysion/client-report-detail-cashier.php"): ?>
      <script src="js/pages/client-report-detail-cashier.js"></script>
    <?php endif; ?>
    

    <script type="text/javascript">
        $(function () {
        
            //$(".auto_show_modal").modal({ dynamic: true });


            // jQuery Knobs
            $(".knob").knob();

            // jQuery UI Sliders
            $(".slider-sample1").slider({
                value: 100,
                min: 1,
                max: 500
            });
            $(".slider-sample2").slider({
                range: "min",
                value: 130,
                min: 1,
                max: 500
            });
            $(".slider-sample3").slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 40, 170 ],
            });

            

            // jQuery Flot Chart
            var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61]];
            var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47]];

            var plot = $.plot($("#statsChart"),
                [ { data: visits, label: "Fails"},
                 { data: visitors, label: "Passes" }], {
                    series: {
                        lines: { show: true,
                                lineWidth: 1,
                                fill: true, 
                                fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
                             },
                        points: { show: true, 
                                 lineWidth: 2,
                                 radius: 3
                             },
                        shadowSize: 0,
                        stack: true
                    },
                    grid: { hoverable: true, 
                           clickable: true, 
                           tickColor: "#f9f9f9",
                           borderWidth: 0
                        },
                    legend: {
                            // show: false
                            labelBoxBorderColor: "#fff"
                        },  
                    colors: ["red", "#30a0eb"],
                    xaxis: {
                        ticks: [[1, "SUN"], [2, "MON"], [3, "TUE"], [4,"WED"], [5,"THU"], [6,"FRI"], 
                               [7,"SAT"]],
                        font: {
                            size: 12,
                            family: "Open Sans, Arial",
                            variant: "small-caps",
                            color: "#9da3a9"
                        }
                    },
                    yaxis: {
                        ticks:3, 
                        tickDecimals: 0,
                        font: {size:12, color: "#9da3a9"}
                    }
                 });

            function showTooltip(x, y, contents) {
                $('<div id="tooltip">' + contents + '</div>').css( {
                    position: 'absolute',
                    display: 'none',
                    top: y - 30,
                    left: x - 50,
                    color: "#fff",
                    padding: '2px 5px',
                    'border-radius': '6px',
                    'background-color': '#000',
                    opacity: 0.80
                }).appendTo("body").fadeIn(200);
            }

            var previousPoint = null;
            $("#statsChart").bind("plothover", function (event, pos, item) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(0),
                            y = item.datapoint[1].toFixed(0);

                        var month = item.series.xaxis.ticks[item.dataIndex].label;

                        showTooltip(item.pageX, item.pageY,
                                    item.series.label + " of " + month + ": " + y);
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        });
    </script>
</body>
</html>