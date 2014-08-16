 window.fbAsyncInit = function() {

  FB.init({

    appId      : '601626939930471', // App ID

    channelUrl : 'http://www.nsit-moksha.com/vimukti/index.php', // Channel File

    status     : true, // check login status

    cookie     : true, // enable cookies to allow the server to access the session

    xfbml      : true  // parse XFBML

  },{scope: 'email,user_likes, user_education_history, publish_actions'});
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
       FB.login(function(response) {
 }, {scope: 'email,user_likes, user_education_history, publish_actions'});
    } else {
       FB.login(function(response) {
 }, {scope: 'email,user_likes, user_education_history, publish_actions'});

    }

  });

  };
  (function(d){

   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];

   if (d.getElementById(id)) {return;}

   js = d.createElement('script'); js.id = id; js.async = true;

   js.src = "//connect.facebook.net/en_US/all.js";

   ref.parentNode.insertBefore(js, ref);

  }(document));
function testAPI() {
  FB.api('/me', function(response) {
    $('#reName').val(response.name);
    $('#reEmail').val(response.email);   
    $('#loginEmail').val(response.email);
    var college;
    for(var i = 0;i < (a = response.education).length; i++) {
      if(a[i].type == 'College') {
        college = a[i].school.name;
      }
    }
    $('#reCollege').val(college);
    $('#reFBLink').val(response.id);
  },{scope: 'email,user_likes, user_education_history, publish_actions'});
}
function registerUser() {
  var reEmail = /^\S+@\S+\.\S+$/ ;
  var reName = /^[A-Z][a-zA-Z ]+$/ ;
  if($('#reName').val().length < 1 || $('#reEmail').val().length < 1 || $('#reCollege').val().length < 1 || $('#rePhone').val().length < 1) {
    $('.errorArea').html('<h3>Fill all details.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
 if(!reName.test($('#reName').val())) {
    $('.errorArea').html('<h3>Invalid Name.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
   if(!reName.test($('#reCollege').val())) {
    $('.errorArea').html('<h3>Invalid College Name.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
  if(!reEmail.test($('#reEmail').val())) {
    $('.errorArea').html('<h3>Invalid Email.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
  if($('#rePass').val().length < 7 || $('#rePass').val().length > 17) {
  $('.errorArea').html('<h3>Password must be 8 to 16 characters long.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
  FB.api(
      '/me/feed',
      'post',
      {link: 'http://nsit-moksha.com/vimukti/',caption: 'Vimukti , Moksha 2014',message : 'I just entered Vimukti , Moksha 2014 Treasure Hunt Competition!',picture:'http://nsit-moksha.com/vimukti/images/logomok.jpg',description :'Vimukti consists of various levels of varying difficulty. You are supposed to solve each level step by step and proceed to next level for which you need answer for the current level. The participant who finishes the game earliest or who reaches up to the highest level till the game is closed, will be declared as winner.'},
      function(data) { console.log(data); }
  );
  var m = {'type':0,'name':$('#reName').val(),'email':$('#reEmail').val(),'college':$('#reCollege').val(),'contact':$('#rePhone').val(),'pass':$('#rePass').val(),'fbID':$('#reFBLink').val(),'seccode':$('#ftCaptcha').val()};
  $.ajax({
    type: "POST",
    dataType :'json',
    url: "login.php",
    data: m,
    success: function(data) {    console.log(data.error);
      switch(data.error) {
        case 'INCOMPLETE_DETAILS' : $('.errorArea').html('<h3>Please fill all details.</h3>'); $('.errorArea').removeClass('hidden'); break;
		case 'UNAUTHORIZED' : $('.errorArea').html('<h3>Wrong Username/Password</h3>'); $('.errorArea').removeClass('hidden'); break;
		case 'CAPTCHA_ERROR' : $('.errorArea').html('<h3>Wrong Captcha entered.</h3>'); $('.errorArea').removeClass('hidden'); break;
        case 'DB_CONNECT_ERROR' : case 'DB_ERROR': $('.errorArea').html('<h3>Apologies! We are facing some issues at backend. Please be patient.</h3>'); $('.errorArea').removeClass('hidden');console.log(data.error_details);break;
        case 'EXISTS' : $('.errorArea').html('<h3>Email-id already in use.</h3>'); $('.errorArea').removeClass('hidden'); break;
        case 'NONE' :console.log('All Cool');  window.location.assign("level.php"); break;
      }
    },
    error: function(err) {
      console.log(err);
    }
  });
}
function loginUser() {
  var reEmail = /^\S+@\S+\.\S+$/ ;
  if($('#loginPass').val().length < 7 || $('#loginPass').val().length > 17) {
  $('.errorArea').html('<h3>Password must be 8 to 16 characters long.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }  
  if(!reEmail.test($('#loginEmail').val())) {
    $('.errorArea').html('<h3>Invalid Email.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }  var reEmail = /^\S+@\S+\.\S+$/ ;
  if($('#loginEmail').val().length < 1) {
    $('.errorArea').html('<h3>Fill all details.</h3>'); $('.errorArea').removeClass('hidden');
    return;
  }
  FB.api(
      '/me/feed',
      'post',
      {link: 'http://nsit-moksha.com/vimukti/',caption: 'Moksha , Innovision 2014',message : 'I just entered Vimukti ,Moksha 2014 Treasure Hunt Competition!',picture:'http://nsit-moksha.com/vimukti/images/logomok.jpg',description :'Vimukti consists of various levels of varying difficulty . You are supposed to solve each level step by step and proceed to next level for which you need answer for the current level. The participant who finishes the game earliest or who reaches up to the highest level till the game is closed, will be declared as winner.',privacy:{value:'SELF'}},
      function(data) { console.log(data); }
  );
  var m = {'type':1,'email':$('#loginEmail').val(),'pass':$('#loginPass').val(),'fbID':$('#reFBLink').val()};
  $.ajax({
    type: "POST",
    dataType :'json',
    url: "login.php",
    data: m,
    success: function(data) {
    console.log(data.error);
      switch(data.error) {
        case 'INCOMPLETE_DETAILS' : $('.errorArea').html('<h3>Please fill all details.</h3>'); $('.errorArea').removeClass('hidden'); break;
        case 'DB_CONNECT_ERROR' : case 'DB_ERROR': $('.errorArea').html('<h3>Apologies! We are facing some issues at backend. Please be patient.</h3>'); $('.errorArea').removeClass('hidden');break;
        case 'UNAUTHORIZED' : $('.errorArea').html('<h3>Invalid credentials entered.</h3>'); $('.errorArea').removeClass('hidden');break;
        case 'DOESNT_EXIST' : $('.errorArea').html('<h3>No such email-id exists.</h3>'); $('.errorArea').removeClass('hidden'); break;
        case 'NONE' : console.log('All Cool'); window.location.assign("level.php"); break;
      }
    },
    error: function(err) {
      console.log(err);
    }
  });
}
$(document).ready(function() {
  $('#loginButton').click(function(){ 
    $('#loginPopout').removeClass('hidden');
  });
  $('#loginDetails').click(function() {
    $('.errorArea').addClass('hidden');
    loginUser();
  });
  $('#submitDetails').click(function() {
    $('.errorArea').addClass('hidden');
    registerUser();
  });  
});