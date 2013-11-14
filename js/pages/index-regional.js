$(function(){


var flotDefaultsLines = {
          series: {
              lines: { show: true,
                      lineWidth: .5,
                      fill: true,
                      fillColor: { colors: [ { opacity: 0.025 }, { opacity: 0.025 } ] }
                   },
              points: { show: true, 
                       lineWidth: 2,
                       radius: 3
                   },
              shadowSize: 0,
              stack: false
          },
          grid: { hoverable: true, 
                 clickable: true, 
                 tickColor: "#f9f9f9",
                 borderWidth: 0
              }, 
          colors: ["#30a0eb", "orange", '#888888', "#e51d9b", "#7e91aa"],
          xaxis: {
              /*ticks: [[1, "8/11"], [2, "8/12"], [3, "8/13"], [4,"8/14"], [5,"8/15"], [6,"8/16"], 
                     [7,"8/17"],[8,"8/18"],[9,"8/19"],[10,"8/20"]],*/
							ticks: false,
							
              font: {
                  size: 10,
                  family: "Open Sans, Arial",
                  variant: "small-caps",
                  color: "#9da3a9",
              }
          },
          yaxis: {
              /*ticks:5,*/
							ticks: false,
              tickDecimals: 0,
              font: {size:11, color: "#9da3a9"},
              min:0,
              max:100
          },
          legend:{
              labelBoxBorderColor: "#fff",
              position:'sw',
              noColumns: 0,
              margin:[5,210],
							show: false
          }
        };
        
// jQuery Flot Chart
  var dashboard1 = [[1, 30], [2, 42], [3, 34], [4, 63],[5, 80],[6, 68],[7, 90],[8, 95],[9, 95],[10, 92]];
  var dashboard2 = [[1, 20], [2, 40], [3, 50], [4, 43],[5, 68],[6, 80],[7, 49],[8, 53],[9, 76],[10, 82]];
  var dashboard3 = [[1, 30], [2, 38], [3, 45], [4, 53],[5, 66],[6, 50],[7, 77],[8, 93],[9, 94],[10, 91]];
  var dashboard4 = [[1, 42], [2, 22], [3, 64], [4, 43],[5, 45],[6, 75],[7, 85],[8, 87],[9, 91],[10, 98]];
  var dashboard5 = [[1, 22], [2, 33], [3, 22], [4, 34],[5, 45],[6, 46],[7, 48],[8, 55],[9, 61],[10, 63]];

  
  if($("[id^='statsChartoverview']").length){
  $("[id^='statsChartoverview']").each(function(){
    var numgauges = $(this).attr('data-num-of-gauges');
    var constructionarray = new Array({ data: dashboard1, label: "Combined" },{ data: dashboard2, label: "Cashier"},{ data: dashboard3, label: "Expeditor"},{ data: dashboard4, label: "QC"},{ data: dashboard5, label: "Drive Thru"});
    var buildarray = new Array();
    buildarray = constructionarray.slice(0,numgauges);
    var plot = $.plot($(this),
        buildarray , flotDefaultsLines);
        
        plot.getData()[0].lines.lineWidth = 3;
        plot.draw();
  });
  }


  function showTooltip(x, y, contents) {
      $('<div id="tooltip">' + contents + '</div>').css( {
          position: 'absolute',
          display: 'none',
          top: y - 30,
          left: x - 50,
          color: "#fff",
          padding: '2px 5px',
          'border-radius': '3px',
          'background-color': '#000',
          opacity: 0.80
      }).appendTo("body").fadeIn(50);
  }

  var previousPoint = null;
  $("[id^='statsChartoverview']").bind("plothover", function (event, pos, item) {
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
  

  
  //Instantiate Date Range Picker
  $('#report_daterange').daterangepicker({
    ranges: {
       'Today': [new Date(), new Date()],
       'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
       'Last 7 Days': [moment().subtract('days', 6), new Date()],
       'Last 30 Days': [moment().subtract('days', 29), new Date()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
    },
    opens: 'left',
    separator: ' -- ',
    startDate: moment().subtract('days', 6),
    endDate: new Date(),
    maxDate: new Date(),
    buttonClasses: ['btn-flat btn-flat-small btn-info'],
    format: "MMM D, YYYY",
  },
  function(start, end) {
		$('#report_daterange span').html(moment(start).format('MMM D, YYYY') + ' - ' + moment(end).format('MMM D, YYYY'));
	});
  $('#report_daterange span').html(moment().subtract('days', 6).format('MMM D, YYYY') + ' -- ' + moment().format('MMM D, YYYY'));
  
  //Knob (gauges) click animation
  $('.knob-wrapper').click(function(e){
    e.preventDefault();
    if(!$(this).hasClass('active')){
      $('.knob-wrapper').removeClass('active');
      $(this).addClass('active');
    }
  });
  
});