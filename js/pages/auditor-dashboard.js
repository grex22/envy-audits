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
});