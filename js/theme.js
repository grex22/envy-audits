$(function () {

	// build all tooltips from data-attributes
	$("[data-toggle='tooltip']").each(function (index, el) {
		$(el).tooltip({
			placement: $(this).data("placement") || 'top'
		});
	});


  // custom uiDropdown element, example can be seen in user-list.html on the 'Filter users' button
	var uiDropdown = new function() {
  	var self;
  	self = this;
  	this.hideDialog = function($el) {
    		return $el.find(".dialog").hide().removeClass("is-visible");
  	};
  	this.showDialog = function($el) {
    		return $el.find(".dialog").show().addClass("is-visible");
  	};
		return this.initialize = function() {
  		$("html").click(function() {
    		$(".ui-dropdown .head").removeClass("active");
      		return self.hideDialog($(".ui-dropdown"));
    		});
    		$(".ui-dropdown .body").click(function(e) {
      		return e.stopPropagation();
    		});
    		return $(".ui-dropdown").each(function(index, el) {
      		return $(el).click(function(e) {
      			e.stopPropagation();
      			$(el).find(".head").toggleClass("active");
      			if ($(el).find(".head").hasClass("active")) {
        			return self.showDialog($(el));
      			} else {
        			return self.hideDialog($(el));
      			}
      		});
    		});
    	};
  	};

    // instantiate new uiDropdown from above to build the plugins
  	new uiDropdown();


  	// toggle all checkboxes from a table when header checkbox is clicked
  	$(".table th input:checkbox").click(function () {
  		$checks = $(this).closest(".table").find("tbody input:checkbox");
  		if ($(this).is(":checked")) {
  			$checks.prop("checked", true);
  		} else {
  			$checks.prop("checked", false);
  		}  		
  	});
  
  
  $(".close_notice").click(function(e){
    e.preventDefault();
    $(this).parent('div')
    .fadeOut(200)
    .hide(0, function(){
      $("body").removeClass("has_notice");
    });
  });
  
  $(".open_header_panel").click(function(e){
    e.preventDefault();
    $("#header_panel").fadeToggle(300);
  });
  
  timeoutID = window.setTimeout(function(){
    if($(".notice_static").length){ //if there's a notice in the HTML, animate it in
      $("body").addClass("has_notice");
      $(".notice_static").delay(500).fadeIn(350);
    }
  }, 2000);
  
  function setColor(knobvalue){
      knobvalue = parseFloat(knobvalue);
      switch(true){
      case (knobvalue <= 50):
        return 'red';
        break;
      case (knobvalue > 50 && knobvalue <= 79):
        return 'orange';
        break;
      case (knobvalue > 79):
        return '#36abff';
        break;
      default:
        return 'blue';
        break;
      }
  } 
  
  var myKnob = $(".knob").knob({
      'dynamicDraw': true,
      'tickColorizeValues': true,
  });
  
  $(".knob").each(function(){
    knobval = $(this).val();
    knobcolor = setColor(knobval);
    $(this).trigger('configure', {'inputColor':knobcolor,'fgColor':knobcolor})
  });
  
  $('a.has_submenu').click(function(e){
    e.preventDefault();
  });

  function UpdateTableHeaders() {
       $(".persist-area").each(function() {
       
           var el             = $(this),
               offset         = el.offset(),
               scrollTop      = $(window).scrollTop()+52,
               floatingHeader = $(".floatingHeader", this)
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
               floatingHeader.css({
                "visibility": "visible"
               });
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               });      
           };
       });
    }


       var clonedHeaderRow;

       $(".persist-area").each(function() {
           clonedHeaderRow = $(".persist-header", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             .css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
           
           var origWidths = new Array();
           $(this).find('.persist-header:first-child th').each(function(){
            origWidths.push($(this).width());
           });
           $.each(origWidths, function(index, value) {
            clonedHeaderRow.children("th:nth-child("+(index+1)+")").css("width",value);
           });
       });
       
       $(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
  
  
});
