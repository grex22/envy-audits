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

  var datasets = [
  
    [[1, 30], [2, 42], [3, 34], [4, 63],[5, 80],[6, 68],[7, 90],[8, 95],[9, 95],[10, 92],[11, 30], [12, 42], [13, 34], [14, 63],[15, 80],[16, 68],[17, 90],[18, 95],[19, 95],[20, 92]],
    [[1, 55], [2, 38], [3, 65], [4, 68],[5, 76],[6, 64],[7, 55],[8, 65],[9, 70],[10, 64],[11, 61], [12, 48], [13, 55], [14, 59],[15, 65],[16, 68],[17, 73],[18, 80],[19, 82],[20, 86]],
    [[1, 15], [2, 28], [3, 35], [4, 40],[5, 32],[6, 18],[7, 25],[8, 55],[9, 60],[10, 64],[11, 36], [12, 55], [13, 85], [14, 65],[15, 53],[16, 68],[17, 73],[18, 40],[19, 82],[20, 82]],
    
  ];

  
  
  if($(".flotgraph").length){
      var dataset = $(".tab-pane.active .flotgraph").attr('data-dataset');
      var plot = $.plot($(".tab-pane.active .flotgraph"),
      [ { data: datasets[dataset], label: "# Small Transactions" }], flotDefaultsLines);
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
  $("[id^=widget0]").bind("plothover", function (event, pos, item) {
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
  
  
  $('a[data-toggle="tab"]').on('shown', function (e) {
    var targethash = $(e.target).attr('href');
    var dataset = $(targethash).find(".flotgraph").attr('data-dataset');

    var plot = $.plot($(targethash).find(".flotgraph"),
    [ { data: datasets[dataset], label: "# Small Transactions" }], flotDefaultsLines);
    plot.getData()[0].lines.lineWidth = 3;
    plot.draw();
    
    
  });
  
  $('.row_toggler').click(function(e){
    e.preventDefault();
    $(this).siblings('.span12').children('.flotgraph').slideToggle();
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
    
    $("#report_tabbed_nav_1 a[href='#employees']").tab('show');
    $("#employees").addClass('active');
    
    $('html,body').animate({
      scrollTop: $("#top_scroll").offset().top
    }, 700);
  
    var newscope = $(this).find("td:first-child").html();
    
    $(".tab-pane.active #tablestate_01").delay(700).removeClass('block_table').hide(0);
    $(".tab-pane.active #tablestate_02").show(0);
    $("#loading_overlay_full").show(0).delay(1000).hide(50,function(){});
    
    $(".tab-pane.active .data_table_header").children('span').first().wrap("<a href='#' data-targetstate='tablestate_01' class='tablestate_breadcrumb_link'></a>");
    $("#last_crumb").remove();
    $(".tab-pane.active .data_table_header i").last().remove();
    $(".tab-pane.active .data_table_header").append("<i class='icon-caret-right'></i><span id='last_crumb'>"+newscope+"</span>");
    $('.tab-pane.active .title_variable').html('Employee: '+newscope);
    
  });
  
  $(document).on('click','.tablestate_breadcrumb_link',function(e){
    e.preventDefault();
    $(".tab-pane.active #tablestate_02").delay(700).removeClass('block_table').hide(0);
    $("#loading_overlay_full").show(0).delay(1000).hide(50,function(){
      $(".tab-pane.active #tablestate_01").show(0);
    });
    
    var lastlinktext = $(".tab-pane.active .data_table_header > a").last().children('span').html();
    $(".tab-pane.active .data_table_header a").last().replaceWith("<span>"+lastlinktext+"</span>");
    $(".tab-pane.active .data_table_header i").last().remove();
    $("#last_crumb").remove();
    $('.tab-pane.active .title_variable').html('All Employees');
    
  });
  
  
  
  
  
  
  
  
});