$(function(){

  $('#change_view_button').click(function(e){
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
        $('#favorite_name').fadeIn();
        return;
    }else{
      $('#favorite_name').fadeOut();
    }
  });
  
  $('input[name="video_mode"]').change(function(e){
    if($(this).val() == 'recorded'){
      $('#recorded_parameters').slideDown();
      $('.change_view_submit').removeClass('live').addClass('recorded').val('Done! Watch Recorded Video');
    }else if($(this).val() == 'live'){
      $('#recorded_parameters').slideUp();
      $('.change_view_submit').removeClass('recorded').addClass('live').val('Done! Watch Live Video');
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

  
});