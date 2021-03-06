$(document).ready(function () {

	function success(position) {
	  var s = document.querySelector('#status');
	  
	  if (s.className == 'success') {
	    return;
	  }
	  
	  s.innerHTML = '<img class="pulse" src="img/shield-icon.png" />';
	  s.className = 'success';

	  document.getElementById("notif").innerHTML = "<p>"+position.coords.latitude +" / "+ position.coords.longitude + "</p>";

	  $('#pulse').addClass("ready"); 

	      $('#pulse').click(function(){
	  		$('#pulse').addClass("danger");
	  		$( ".pulse" ).effect( "scale", "slow" );
	  		document.querySelector('#status').innerHTML = '<img class="pulse" src="img/shield-help-icon.png" />';


	  		/* Création d'un report
	  		============================ */ 
	  		  var posLatitude = position.coords.latitude;
	  		  var posLongitude = position.coords.longitude;

	  		  $.ajax({
	  		    type: "POST",
	  		    url: "includes/functions.ajax.php",
	  		    data: {
	  		      "action":"addReport",
	  		      "longitude":posLongitude,
	  		      "latitude":posLatitude},
	  		    success: function(msg){
	  		      if (msg == "OK") {
	  		        $("#report-erreur").html('<div class="info-box width-100"><p>SOS Bien envoyé.</p> </div>');
	  		      } else {
	  		        $("#report-erreur").html('<div class="danger-box width-100"><p>'+msg+'</p> </div>');
	  		      }
	  		    }
	  		  });
	  	});

	}

	function error(msg) {
	  var s = document.querySelector('#status');
	  s.innerHTML = typeof msg == 'string' ? msg : "Echec";
	  s.className = 'fail';
	  
	  // console.log(arguments);
	}

	if (navigator.geolocation) {
	  navigator.geolocation.watchPosition(success, error);
	} else {
	  error('not supported');
	}


	function addCircle() {
        var $circle = $('<div class="circle"></div>');
        $circle.animate({
            'width': '300px',
            'height': '300px',
            'margin-top': '-150px',
            'margin-left': '-150px',
            'opacity': '0'
        }, 4000, 'easeOutCirc');
        $('.container-pulse').append($circle);
    
        setTimeout(function __remove() {
            $circle.remove();
        }, 4000);
    }
    addCircle();
    setInterval(addCircle, 1200);

});
