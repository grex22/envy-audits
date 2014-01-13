$(function(){
  $("#filter_box_wrapper_toggle").click(function(e){
    e.preventDefault();
    $("#filter_box_wrapper").slideToggle();
  });

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
              ticks: [[1, "8/11"], [2, "8/12"], [3, "8/13"], [4,"8/14"], [5,"8/15"], [6,"8/16"], 
                     [7,"8/17"],[8,"8/18"],[9,"8/19"],[10,"8/20"],[11,"8/21"],[12,"8/22"],[13,"8/23"],[14,"8/24"],[15,"8/25"],[16,"8/26"],[17,"8/27"],[18,"8/28"],[19,"8/29"],[20,"8/30"]],
              font: {
                  size: 9,
                  family: "Open Sans, Arial",
                  variant: "small-caps",
                  color: "#9da3a9"
              }
          },
          yaxis: {
              ticks:1, 
              tickDecimals: 0,
              font: {size:11, color: "#9da3a9"},
              min:0,
              max:100
          },
          legend:{
              labelBoxBorderColor: "#fff",
              position:'sw',
              noColumns: 0,
              margin:[5,120]
          }
        };
// jQuery Flot Chart
  var dashboard1 = [[1, 30], [2, 42], [3, 34], [4, 63],[5, 80],[6, 68],[7, 90],[8, 95],[9, 95],[10, 92],[11, 30], [12, 42], [13, 34], [14, 63],[15, 80],[16, 68],[17, 90],[18, 95],[19, 95],[20, 92]];
  
  
  if($("#widget01").length){
  var plot = $.plot($("#widget01"),
      [ { data: dashboard1, label: "# Small Transactions" }], flotDefaultsLines);
      plot.getData()[0].lines.lineWidth = 3;
      plot.draw();
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
      }).appendTo("body").fadeIn(200);
  }
  
  var previousPoint = null;
  $("[id^=widget01]").bind("plothover", function (event, pos, item) {
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
  
  $('.row_toggler').click(function(e){
    e.preventDefault();
    $('#widget01').slideToggle();
    if($(this).find('span').html()=="hide graph"){
      $(this).find('span').html("show graph");
      $(this).find('i').removeClass('icon-minus-sign').addClass('icon-plus-sign');
    }else{
      $(this).find('span').html("hide graph");
      $(this).find('i').removeClass('icon-plus-sign').addClass('icon-minus-sign');
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
       'Last 7 Days': [moment().subtract('days', 6), new Date()],
       'Last 30 Days': [moment().subtract('days', 29), new Date()],
       'Prev Report Period': [moment().subtract('weeks',1).day('Wednesday'), moment().day('Tuesday')],
       'This Report Period': [moment().day('Wednesday'), new Date()],
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
  
  $('#report_daterange span').html(moment().subtract('days', 9).format('MMM D, YYYY') + ' - ' + moment().format('MMM D, YYYY'));
  
  //Live Table Reload for .live_drilldown tables
  $('.live_drilldown tbody tr').click(function(e){
    e.preventDefault();
  
    var newscope = $(this).find("td:first-child").html();
    var topwrap = $(this).closest('.live_drilldown');
    var tableid = "#" + $(topwrap).attr('id');
    var breadcrumbid = tableid+"_breadcrumbs";
    
    $(tableid).fadeTo('fast',0.3).delay(700).removeClass('block_table').hide(0);
    $("#tablestate_02").show(0).fadeTo('fast',1.0);
    $("#loading_overlay").show(0).delay(1000).hide(50,function(){});
    
    $(breadcrumbid).append("<i class='icon-caret-right'></i><span>"+newscope+"</span>").children('span').first().wrap("<a href='#' data-targetstate='tablestate_01' class='tablestate_breadcrumb_link'></a>");
  });
  
  $(document).on('click','.tablestate_breadcrumb_link',function(e){
    e.preventDefault();
    $("#tablestate_02").fadeTo('fast',0.3).delay(700).removeClass('block_table').hide(0);
    $("#loading_overlay").show(0).delay(1000).hide(50,function(){
      $("#tablestate_01").show(0).fadeTo('fast',1.0);
    });
    
    var lastlinktext = $("#tablestate_01_breadcrumbs a").last().html();
    $("#tablestate_01_breadcrumbs i").last().remove();
    $("#tablestate_01_breadcrumbs span").last().remove();
    $("#tablestate_01_breadcrumbs a").last().replaceWith("<span>"+lastlinktext+"</span>");
    
  });
  
  
});