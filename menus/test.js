// JavaScript Document

function timeFunction(){
			now = new Date(hour);
            if(now >= 03 && now <= 17) {
            lunchFunction();
			alert("lunch");
            }
			if(now > 17 && now <= 24 || now < 03) {
            dinnerFunction();
            alert("dinner");
            }
}
