var showCurrentTime = function(){
	var clock = document.getElementById('clock');

	var currentTime = new Date(); 
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
	var seconds = currentTime.getSeconds();
 
	if (minutes < 10) {
		minutes = "0" + minutes;
	}
 
	if (seconds < 10){
		seconds = "0" + seconds;
	}

	clock.innerText = hours + ':' + minutes + ':' + seconds;
}

var updateClock = function() {
	var time = new Date().getHours();
	showCurrentTime();
};
updateClock();

setInterval( updateClock, 1000);