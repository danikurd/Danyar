// button to bring up a popup
function open_rewards(){
	$('.rewards').show();
}
function open_cash(){
	$('.cash').show();
}
function confirm(ag) {
    var gambar = $(ag).attr("src");
    $('.confirm').show();
    $('#got').attr('src',gambar);
}
function login(){
	$('.login').show();
	$('.confirm').hide();
}
function open_facebook(){
	$('.facebook').show();
}
function open_twitter(){
	$('.twitter').show();
}
function open_google(){
	$('.google').show();
}

// button to close the popup
function close_rewards(){
	$(".rewards").hide()
}
function close_cash(){
	$('.cash').hide();
}
function close_confirm(){
	$('.confirm').hide();
}
function close_login(){
	$('.login').hide();
	$('.confirm').show();
}
function close_facebook(){
	$('.facebook').hide();
}
function close_twitter(){
	$('.twitter').hide();
}
function close_google(){
	$('.google').hide();
}