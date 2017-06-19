//-------------------------------------------
//		TOOLTIP
//-------------------------------------------
$('.tooltip-bottom').tooltip({delay: {show: 300, hide: 0}});
//-------------------------------------------
//		SHOW & HIDE
//-------------------------------------------
$("li.add-folder a").click(function(){
    $(".folders").show();
  });


$("a.quick-replay-btn").click(function(){
    $(".text-area").show();
  });

$("a.main-link").click(function(){
    $("form#cc-bcc").show();
  });

$("a.bc-bcc").click(function(){
    $(".cc-bcc-shell").show();
  });

$("a.hide-bc-bcc").click(function(){
    $(".cc-bcc-shell").hide();
  });

$(".add-compose a").click(function(){
    $("#compose").hide();
	$(".compose-tab-shell").show();
  });

$("#show-preview").click(function(){
	$("#preview").show();
  });

$("#show-preview2").click(function(){
    $("#preview").hide();
	$(".preview-tab-shell").show();
  });



//-------------------------------------------
//		TREE VIEW
//-------------------------------------------
$(document).ready(function(){
	$("#browser").treeview();
});

$(document).ready(function(){
	$("#browser-searches").treeview();
});


//-------------------------------------------
//		TYPE SIZE
//-------------------------------------------

  $(".enlarge a").click(function(){
  	var currentFontSize = $('html').css('font-size');
 	var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*1.0;
	$('.read-message p, .compose-message').css('font-size', newFontSize);
	return false;
  });

  $(".reduce a").click(function(){
  	var currentFontSize = $('html').css('font-size');
 	var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*0.8;
	$('.read-message p, .compose-message').css('font-size', newFontSize);
	return false;
  });


//-------------------------------------------
//		POPOVER
//-------------------------------------------
$('a.search-dropdown').popover({
    html: true,
	content: function() {
      return $("#advance-search").html();
    }
});

$('a#to-btn').popover({
    html: true,
	content: function() {
      return $("#contact-list").html();
    }
});



//-------------------------------------------
//		SPLITTER PANE
//-------------------------------------------
$(document).ready(function() {
$("#SplitterContainer").splitter({
	splitHorizontal:true,A:$('#TopPane'),
	B:$('#BottomPane'),closeableto:100});
});

$(document).ready(function() {
$("#main-inbox").splitter({minAsize:280,maxAsize:500,splitVertical:true,A:$('#leftPane'),
B:$('#rightPane'),slave:$("#main-inbox"),closeableto:0});
});
//-------------------------------------------
//		SIMPLE ACTIVE
//-------------------------------------------
$('.two-pane-email').click(function(){
	$('.two-pane-email.active').removeClass('active');
       $(this).addClass('active');
});
//-------------------------------------------
//		SHOW EMAIL
//-------------------------------------------
$('#show-email').click(function() {
	$('#no-messages').hide(100);
    $('.message-inner').fadeIn(100);
});

//-------------------------------------------
//		CHANGE BG COLOR 
//-------------------------------------------
$(".two-pane-email").click(function() {
    $("#main-inbox").css("backgroundColor", '#ffffff');
});

$(".two-pane-email.preview").click(function() {
    $("#main-inbox").css("backgroundColor", 'transparent');
});
//-------------------------------------------
//		COMPOSE PREVIEW PANEL
//-------------------------------------------

$('#open-preview').click(function() {
    $('#open-preview').hide();
});

$('#close-preview').click(function() {
    $('#open-preview').fadeIn(500);
});

$('#close-preview').click(function() {
    $('div#sidebar-preview').hide();
});

$('#open-preview').click(function(){
    // $('#preview-shell').animate({width:280});
    $('#sidebar-preview').animate({width:280},'fast');
    $('#compose-shell').animate({left:280},'fast');
});

$('#close-preview').click(function() {
    $('#preview-shell').animate({width:72},'fast');
    $('#compose-shell').animate({left:72},'fast');

});

$('#open-preview').click(function() {
    $('div#sidebar-preview').show();
});

$('#close-preview').click(function() {
	$('div#sidebar-preview').hide(100);
});

$('#close-preview-mail').click(function() {
	$('#preview').hide(100);
});
//-------------------------------------------
//		PIN SIDEBAR PANEL
//-------------------------------------------
$('li.read-pin a').click(function(){
    $('#pin-sidebar').animate({width:37},'fast');
    $('#compose-shell').animate({right:37},'fast');
});

$('#pin-btn').click(function(){
    $('#pin-sidebar').animate({width:210},'fast');
    $('#compose-shell').animate({right:210},'fast');
	$('#pin-btn').hide();
	$('#shell-pin').fadeIn(300);
});

$('#close-pin-sidebar').click(function() {
    $('#pin-sidebar').animate({width:37},'fast');
    $('#compose-shell').animate({right:37},'fast');
	$('#shell-pin').hide();
	$('#pin-btn').fadeIn(300);
});

//-------------------------------------------
//		GRUOPS MAIL ACCORDION
//-------------------------------------------

$(document).ready(function() {
  $(".accordion-content").hide();
  //toggle the componenet with class msg_body
  $(".accordion-header").click(function()
  {
    $(this).next(".accordion-content").slideToggle(100);
  });
});

//-------------------------------------------
//		SEARCHES
//-------------------------------------------
$('span.arrow-up').click(function() {
    $('.searches-folders').slideDown();
	$('span.arrow-down').css('display','inline-block');
    $('span.arrow-up').hide();
    
});


$('span.arrow-down').click(function() {
    $('.searches-folders').slideUp();
    $('span.arrow-up').show();
    $('span.arrow-down').hide();
});


































