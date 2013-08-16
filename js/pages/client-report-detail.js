$(function(){


/*
Morris.Bar({
  element: 'statsChartoverview1',
  data: [
    { d: '7/12', a: 100, b: 5 },
    { d: '7/13', a: 75,  b: 11 },
    { d: '7/14', a: 50,  b: 12 },
    { d: '7/15', a: 75,  b: 2 },
    { d: '7/16', a: 50,  b: 16 },
    { d: '7/17', a: 75,  b: 12 },
    { d: '7/18', a: 100, b: 7 }
  ],
  xLabels: 'day',
  xkey: 'd',
  ykeys: ['a', 'b'],
  barColors: ['rgba(48,160,235,.7)','rgba(255,150,0,.7)'],
  labels: ['Passes', 'Fails'],
  hideHover: 'auto',
  gridTextColor: '#bbb',
  gridTextSize: 11  
});
*/

/*Morris.Line({
  element: 'statsChartdetail1',
  data: [
    { d: '2013-7-12', a: 100, b: 5 },
    { d: '2013-7-13', a: 75,  b: 11 },
    { d: '2013-7-14', a: 50,  b: 12 },
    { d: '2013-7-15', a: 75,  b: 2 },
    { d: '2013-7-16', a: 50,  b: 16 },
    { d: '2013-7-17', a: 75,  b: 12 },
    { d: '2013-7-18', a: 100, b: 7 }
  ],
  xLabels: 'day',
  xkey: 'd',
  ykeys: ['a', 'b'],
  lineColors: ['rgba(48,160,235,.7)','rgba(255,150,0,.7)'],
  labels: ['Passes', 'Fails'],
  hideHover: 'auto',
  gridTextColor: '#bbb',
  gridTextSize: 11,
  xLabelFormat: function (x) { var t = new Date(x); return t.getMonth()+"-"+t.getDate()+"-"+t.getFullYear().toString(10).substring(2, 4); }  
});*/


var flotDefaultsBars = {
          series: {
              bars: { show: true,
                      barWidth: .6,
                      align: "center",
                      lineWidth: 1,
                      fill: true,
                      fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
                   },
              points: { show: true, 
                       lineWidth: 2,
                       radius: 3
                   },                   
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
          colors: ["orange", "#30a0eb", '#888888', "#e51d9b"],
          xaxis: {
              ticks: [[1, "5/19"], [2, "5/26"], [3, "6/3"], [4,"6/10"], [5,"6/17"], [6,"6/24"], 
                     [7,"7/1"],[8,"7/8"],[9,"7/15"],[10,"7/22"]],
              font: {
                  size: 11,
                  family: "Open Sans, Arial",
                  variant: "small-caps",
                  color: "#9da3a9"
              }
          },
          yaxis: {
              ticks:5, 
              tickDecimals: 0,
              font: {size:11, color: "#9da3a9"},
              min:0,
          }
        };

var flotDefaultsLines = {
          series: {
              lines: { show: true,
                      lineWidth: 1,
                      fill: true,
                      fillColor: { colors: [ { opacity: 0.03 }, { opacity: 0.03 } ] }
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
          colors: ["#30a0eb", "orange", '#888888', "#e51d9b"],
          xaxis: {
              ticks: [[1, "5/19"], [2, "5/26"], [3, "6/3"], [4,"6/10"], [5,"6/17"], [6,"6/24"], 
                     [7,"7/1"],[8,"7/8"],[9,"7/15"],[10,"7/22"]],
              font: {
                  size: 10,
                  family: "Open Sans, Arial",
                  variant: "small-caps",
                  color: "#9da3a9"
              }
          },
          yaxis: {
              ticks:5, 
              tickDecimals: 0,
              font: {size:11, color: "#9da3a9"},
              min:0,
              max:100
          },
          legend:{
              labelBoxBorderColor: "#fff",
              position:'sw',
              noColumns: 0,
              margin:[5,210]
          }
        };
// jQuery Flot Chart
  var dashboard1 = [[1, 30], [2, 42], [3, 34], [4, 63],[5, 80],[6, 68],[7, 90],[8, 95],[9, 95],[10, 92]];
  var dashboard2 = [[1, 20], [2, 40], [3, 50], [4, 43],[5, 68],[6, 80],[7, 49],[8, 53],[9, 76],[10, 82]];
  var dashboard3 = [[1, 30], [2, 38], [3, 45], [4, 53],[5, 66],[6, 50],[7, 77],[8, 93],[9, 94],[10, 91]];
  var dashboard4 = [[1, 42], [2, 22], [3, 64], [4, 43],[5, 45],[6, 75],[7, 85],[8, 87],[9, 91],[10, 98]];
  var dailyoverallpass = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61]];
  var dailyoverallfail = [[1, 80], [2, 75], [3, 15], [4, 3],[5, 13],[6, 11],[7, 6]];
  var dailyoverallmetric1 = [[1, 80], [2, 75], [3, 15], [4, 80],[5, 18],[6, 14],[7, 20]];
  var dailyoverallmetric2 = [[1, 70], [2, 65], [3, 25], [4, 77],[5, 13],[6, 11],[7, 6]];
  var dailyoverallmetric3 = [[1, 60], [2, 60], [3, 35], [4, 66],[5, 23],[6, 21],[7, 1]];
  
  var overall = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 50], [9, 40], [10, 45]];
  var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 25], [9, 50], [10, 23]];
  
  var lunch = [[1, 60], [2, 60], [3, 55], [4, 43],[5, 88],[6, 85],[7, 91],[8, 90], [9, 10], [10, 45]];
  var dinner = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 25], [9, 50], [10, 23]];

  var met1 = [[1, 60], [2, 60], [3, 55], [4, 43],[5, 88],[6, 85],[7, 91],[8, 90], [9, 10], [10, 45]];
  var met2 = [[1, 28], [2, 52], [3, 25], [4, 52],[5, 44],[6, 39],[7, 42],[8, 50], [9, 52], [10, 33]];
  
  
  var plot = $.plot($("#statsChartoverview1"),
      [ { data: dashboard1, label: "Overall" },{ data: dashboard2, label: "Cashier"},{ data: dashboard3, label: "Expeditor"},{ data: dashboard4, label: "QC"}], flotDefaultsLines);


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
      }).appendTo("body").fadeIn(200);
  }

  var previousPoint = null;
  $("[id^=statsChartdetail],[id^=statsChartoverview]").bind("plothover", function (event, pos, item) {
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
  
  
  //Samples Table expand
  $(".samples_table > tbody > tr:not('.detail_row')").click(function(e){
    $(this).toggleClass('open');
    $(this).next('.detail_row').find('.sample_wrapper').slideToggle();
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
    opens: 'right',
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
  
  
  //Sample tables filter links
  $('.filter_links a').click(function(e){
    e.preventDefault();
    $('.filter_links a').removeClass('active');
    $(this).addClass('active');
    var intent = $(this).attr('data-show');
    if(intent == 'all'){
      $('.samples_table > tbody > tr').show();
    }else{
      $('.samples_table > tbody > tr.'+intent).show();
      $('.samples_table > tbody > tr').not("."+intent).hide();
    }
  });
  
  
  
  //Enlarge Camera
  $('.enlarge_cam').click(function(e){
    e.preventDefault();
    if($(this).closest('div').hasClass('span4')){
      $(this).closest('div').removeClass('span4').addClass('span8');
      $(this).children('img').attr('src','img/custom/panera-cam-large.jpg');
    }else{
      $(this).closest('div').removeClass('span8').addClass('span4');
      $(this).children('img').attr('src','img/custom/panera-cam-condensed.jpg');
    }
  });  
  
});