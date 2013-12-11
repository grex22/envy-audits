$(function(){
  $("#audit_view_tabs a").click(function(e){
    e.preventDefault();
    $("#audit_view_tabs a").removeClass('active');
    $(".audit-left-table-link").removeClass('active');
    $(this).addClass('active');
    var target = $(this).attr('data-target');
    var result_title = "";
    if(target == "#datasets_view"){ result_title = "Dataset: Cashier Transactions"}
    if(target == "#dates_view"){ result_title = "Date: Nov 9,2013"}
    if(target == "#locations_view"){ result_title = "Location: Braintree"}
    $("#results .data_table_header_title").html(result_title);
    $(".audit_view_tab").hide();
    $(target).show(0);
    $("#results").hide(0);
    $("#empty_result").fadeTo('fast',1);
  });

  $(".audit-left-table-link").click(function(e){
    $(".audit-left-table-link").removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
    $("#results").hide(0);
    $("#empty_result").fadeTo('fast',0.3).delay(700).hide(0);
    $("#loading_overlay").show(0).delay(1000).hide(50,function(){
      $("#results").fadeIn(100);
    });
  });
  
  $('.filter_links a').click(function(e){
    e.preventDefault();
    $('.filter_links a').removeClass('active');
    $(this).addClass('active');
  });
  
  //Instantiate Date Range Picker
  $('#audit_dash_daterange').daterangepicker({
    ranges: {
       'Last 7 Days': [moment().subtract('days', 6), new Date()],
       'Prev Report Period': [moment().subtract('weeks',1).day('Wednesday'), moment().day('Tuesday')],
       'This Report Period': [moment().day('Wednesday'), new Date()],
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
    $('#audit_dash_daterange span').html(moment(start).format('MMM D, YYYY') + ' - ' + moment(end).format('MMM D, YYYY'));
  });
  $('#audit_dash_daterange span').html(moment().subtract('days', 9).format('MMM D, YYYY') + ' - ' + moment().format('MMM D, YYYY'));
  
  
  
  
  
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
          colors: ["#30a0eb", "orange", '#888888', "#e51d9b"],
          xaxis: {
              ticks: 0,
              /*ticks: [[1, "8/11"], [2, "8/12"], [3, "8/13"], [4,"8/14"], [5,"8/15"], [6,"8/16"], 
                     [7,"8/17"],[8,"8/18"],[9,"8/19"],[10,"8/20"]],*/
              font: {
                  size: 10,
                  family: "Open Sans, Arial",
                  variant: "small-caps",
                  color: "#9da3a9"
              }
          },
          yaxis: {
              ticks:0, 
              tickDecimals: 0,
              font: {size:11, color: "#9da3a9"},
              min:0,
              max:100
          },
          legend:{
              labelBoxBorderColor: "#fff",
              position:'sw',
              noColumns: 0,
              margin:[-5,120]
          }
        };
// jQuery Flot Chart
  var dashboard1 = [[1, 30], [2, 42], [3, 34], [4, 63],[5, 80],[6, 68],[7, 90],[8, 95],[9, 95],[10, 92]];
  var dashboard2 = [[1, 20], [2, 40], [3, 50], [4, 43],[5, 68],[6, 80],[7, 49],[8, 53],[9, 76],[10, 82]];
  var dashboard3 = [[1, 30], [2, 38], [3, 45], [4, 53],[5, 66],[6, 50],[7, 77],[8, 93],[9, 94],[10, 91]];
  
  
  var lunch = [[1, 60], [2, 60], [3, 55], [4, 43],[5, 88],[6, 85],[7, 91],[8, 90], [9, 10], [10, 45]];
  var dinner = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 25], [9, 50], [10, 23]];

  
  if($("#widget01").length){
  var plot = $.plot($("#widget01"),
      [ { data: dashboard1, label: "Combined" },{ data: dashboard2, label: "Cashier"},{ data: dashboard3, label: "Expeditor"}], flotDefaultsLines);
      plot.getData()[0].lines.lineWidth = 3;
      plot.draw();
  }
  if($("#widget02").length){
  var plot = $.plot($("#widget02"),
      [ { data: lunch, label: "Lunch" },{ data: dinner, label: "Dinner"}], flotDefaultsLines);
      plot.getData()[0].lines.lineWidth = 3;
      plot.draw();
  }
  
  
  
  
  
  
});