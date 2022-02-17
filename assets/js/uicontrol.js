jQuery(document).ready(function($){
	console.log("Loaded!");
	let the_portvideo = document.getElementById("the_portvideo");
	
	if(the_portvideo != null) {
	   setTimeout(function(){
		   console.log(the_portvideo.innerHTML.includes("iframe"));
		   let theinner = the_portvideo.innerHTML;
		   console.log(theinner);
		   
			if(theinner.includes('iframe') != true) {
				console.log("No Iframes Detected...");
				if(the_portvideo.classList.contains("hideportvideo") == false) {
						the_portvideo.classList.add("hideportvideo");
				}
			}
	   }, 1000);
}

});