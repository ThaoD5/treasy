$(document).ready(function(){
	setTimeout(function(){
		$("#section__loading_screen_logo").addClass("translateBack");
		$("#section__first_log_in").addClass("translate");
	}, 1000);


	$('#letsgo').addClass("button_before")
	setInterval(function(){
		if($('.date').val() == ""){
			$('#letsgo').addClass('button_before');
		}else{
			$('#letsgo').removeClass('button_before');
			$("#letsgo").click(function(){
				$("#section__first_log_in").addClass("translateBack");
				$("#section__recent_travel").addClass("translate");
			});
		}
	},50);

	$(".add_travel").click(function(){
		$("#section__recent_travel").addClass("translateBack");
		$("#section__configure_your_ticket").addClass("translate");
	});

	$(".add_ticket").click(function(){
		$("#section__configure_your_ticket").addClass("translateBack");
		$("#section__qrcode_generated").addClass("translate");
		setTimeout(function(){
			$("#section__qrcode_generated").addClass("translateBack");
			$("#section__qrcode_download").addClass("translate");
		}, 5000);
	});

	$("#section__qrcode_download .left_arrow").click(function(){
		$("#section__qrcode_generated").removeClass("translateBack");
		$("#section__qrcode_download").removeClass("translateBack");
		$("#section__qrcode_generated").removeClass("translate");
		$("#section__qrcode_download").removeClass("translate");
		$("#section__configure_your_ticket").removeClass("translateBack");
	});

	$("#section__configure_your_ticket .left_arrow").click(function(){
		$("#section__configure_your_ticket").removeClass("translate");
		$("#section__recent_travel").removeClass("translateBack");
	});

	$("#section__recent_travel .calendar").click(function(){
		$("#section__first_log_in").removeClass("translateBack");
		$("#section__recent_travel").removeClass("translate");
	});
	
	$('#date, #ticketInfo, #qrImg').submit(function () {
	 return false;
	});

	$("#section__first_log_in a").click(function() {
        $("#section__first_log_in a").removeClass("active");
        $(this).addClass("active");
    });

    $(".check_selected").click(function(){
    	$(this).toggleClass("check_selected_after")
    });

    

	// Links stay on desktop mode

	if(("standalone" in window.navigator) && window.navigator.standalone){

	    // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
	    var noddy, remotes = false;
	    
	    document.addEventListener('click', function(event) {
	        
	        noddy = event.target;
	        
	        // Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
	        while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
	            noddy = noddy.parentNode;
	        }
	        
	        if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
	        {
	            event.preventDefault();
	            document.location.href = noddy.href;
	        }
	    
	    },false);
	}

	document.addEventListener("touchmove", function(event){
       event.preventDefault();
   });

});

