$(function(){

  $('#test_change_view_button').click(function(e){
    e.preventDefault();
    if($('#change_view_panel').is(':visible')){
      $('#change_view_panel').slideToggle(200);
    }else{
      $('html body').animate({
           scrollTop: ($("#change_view_panel").offset().top) - 80
       }, 200, function(){
          $('#change_view_panel').slideToggle(200);
       }
      );
    }
  });
  
  $('#save_as_favorite').change(function () {
    if ($(this).is(':checked')){
        $('#favorite_name').fadeIn().css("display","inline-block");;
        return;
    }else{
      $('#favorite_name').fadeOut();
    }
  });
  
  $('input[name="video_mode"]').change(function(e){
    if($(this).val() == 'recorded'){
      $('.camera_thumbnail_list').addClass('recorded_thumbs');
      $('#recorded_parameters').slideDown();
      $('.change_view_submit').removeClass('live').addClass('recorded');
    }else if($(this).val() == 'live'){
      $('#recorded_parameters').slideUp();
      $('.change_view_submit').removeClass('recorded').addClass('live');
      $('.camera_thumbnail_list').removeClass('recorded_thumbs');
    }
  });
  
  $('.camera_thumbnail_list a.thumbnail').click(function(e){
    e.preventDefault();
    var $checkbox = $(this).siblings(':checkbox');
    $checkbox.prop('checked', !$checkbox[0].checked);
  });
  

  
  $('.select_all_cameras').click(function(e){
    e.preventDefault();
    var parentaccordion = $(this).parent('.accordion-heading').next('.accordion-body');
    if(parentaccordion.hasClass('in')){
      parentaccordion.find('.camera_select').prop('checked', true);
    }else{
      parentaccordion.collapse('show');
      parentaccordion.on('shown',function(){
        $(this).find('.camera_select').prop('checked', true);
      });
    }
  });
  
  var d = new Date();
  var curr_date = d.getDate();
  var curr_month = d.getMonth() + 1; //Months are zero based
  var curr_year = d.getFullYear();
  var dstring = (curr_month + "-" + curr_date + "-" + curr_year);
  $("#recorded_daterange").val(dstring);
  $("#recorded_receipt_daterange").val(dstring);
  
  //Instantiate TimePicker
  $('#timepicker1').timepicker({
    showSeconds: true,
    minuteStep: 1,
    secondStep: 1,
    defaultTime: '11:00 AM',
    disableFocus: true
  });
  
  //Instantiate Date Picker
  var startDateObj = new Date();
  startDateObj.setDate(startDateObj.getDate()-30);
  $('#recorded_daterange').datepicker({
    format: 'm-d-yyyy',
    autoclose: true,
    endDate: new Date(),
    startDate: startDateObj,
    startView: new Date(),
  });
  $('#recorded_receipt_daterange').datepicker({
    format: 'm-d-yyyy',
    autoclose: true,
    endDate: new Date(),
    startDate: startDateObj,
    startView: new Date(),
  });
  
  //Load Modal on default
  //$('#change_view_panel').modal('show');
  
  
  
  //Fixed positioning for active Receipt
  /*
  var $wrapper = $('#receiptaccordion')
    , $sticky = $('.accordion-heading.active .accordion-toggle')
    , $stickyWrapper = $('.accordion-heading.active')
    , stickyTop = parseInt($('.accordion-heading.active').offset().top)
    , wrapperTop = parseInt($wrapper.offset().top);
    
    $sticky.width($('#receiptaccordion .accordion-group:first').width()).css('box-sizing','border-box');
    $stickyWrapper.height($sticky.height()+16);

    processScroll();

    $wrapper.on('scroll', processScroll);
    $(document).on('scroll', processScroll);

    function processScroll() {
      var i, scrollTop = $wrapper.scrollTop();
      if (scrollTop >= stickyTop - wrapperTop) {
        $sticky.css({'position': 'absolute', 'top': scrollTop});
      } else if (scrollTop <= stickyTop - wrapperTop ) {
        $sticky.css({'position': 'static', 'top': 0});
      }
    }
    */

  
});