jQuery( document ).ready(function() {

    window.onscroll = function(e) {
        // log the length scrolled vertically
        callmybubble();
    }

    function callmybubble() {
        let sdigital_nav_button = document.getElementById("sdigital_nav_button");
        let userwayAccessibilityIcon = document.getElementById("userwayAccessibilityIcon");


        console.log(window.pageYOffset);
        if(window.pageYOffset >= window.innerHeight / 4) {
            if(sdigital_nav_button.classList.contains("stick") == false) {
                sdigital_nav_button.classList.add("stick");
                console.log("Above");

                setTimeout(function(){
                        if(sdigital_nav_button.classList.contains("showme") == false) {
                            sdigital_nav_button.classList.add("showme");
                        }

                        if(userwayAccessibilityIcon.classList.contains("move") == false) {
                            userwayAccessibilityIcon.classList.add("move");
                        }
                }, 300);
            }
        } else {
            if(sdigital_nav_button.classList.contains("stick") == true) {
                sdigital_nav_button.classList.remove("stick");
                console.log("Below");

                if(sdigital_nav_button.classList.contains("showme") == true) {
                    sdigital_nav_button.classList.remove("showme");
                }

                if(userwayAccessibilityIcon.classList.contains("move") == true) {
                    userwayAccessibilityIcon.classList.remove("move");
                }
            }
        }

    }

    callmybubble();
});