jQuery( document ).ready(function() {

    window.onscroll = function(e) {
        // log the length scrolled vertically
        callmybubble();
    }

    let eccent_desktop_menu = document.getElementById("eccent_desktop_menu");
    let sdigital_nav_button = document.getElementById("sdigital_nav_button");
    let sdigital_menuholder = document.getElementById("sdigital_menuholder");

    function callmybubble() {
        let sdigital_nav_button = document.getElementById("sdigital_nav_button");

        console.log(window.pageYOffset);
        if(window.pageYOffset >= window.innerHeight / 4) {
            if(sdigital_nav_button.classList.contains("stick") == false) {
                sdigital_nav_button.classList.add("stick");
                console.log("Above");

                setTimeout(function(){
                        if(sdigital_nav_button.classList.contains("showme") == false) {
                            sdigital_nav_button.classList.add("showme");
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

            }
        }

    }

    callmybubble();

    function inject_menus() {
        sdigital_nav_button.addEventListener("click", function(){
            if(sdigital_menuholder.classList.contains("show") == false) {
                sdigital_menuholder.classList.add("show");
            } else if(sdigital_menuholder.classList.contains("show") == true) {
                sdigital_menuholder.classList.remove("show");
            }
        });

        if(eccent_desktop_menu != null) {
            let eccent_desktop_menu_parent = eccent_desktop_menu.getElementsByClassName("menu-item-has-children");

            for(i = 0; i < eccent_desktop_menu_parent.length; i++) {
                eccent_desktop_menu_parent[i].addEventListener("mouseover", function(){
                    let thesubmenu = this.getElementsByClassName("sub-menu");

                    if(thesubmenu.length >= 1) {
                        let the_submenu_li = thesubmenu[0].getElementsByTagName("li");
                        let the_submenu_height = the_submenu_li.length * 40;

                        console.log("Height Target: " + the_submenu_height);
                        console.log("Current Height: " + thesubmenu[0].clientHeight);

                        if(thesubmenu[0].clientHeight == 0) {
                            thesubmenu[0].style.height = the_submenu_height + "px";
                            thesubmenu[0].style.opacity = "1";
                        }
                    }
                });
            }

            for(z = 0; z < eccent_desktop_menu_parent.length; z++) {
                eccent_desktop_menu_parent[z].addEventListener("mouseleave", function(){
                    let thesubmenu = this.getElementsByClassName("sub-menu");

                    if(thesubmenu.length >= 1) {
                        let the_submenu_li = thesubmenu[0].getElementsByTagName("li");

                        if(thesubmenu[0].clientHeight > 0) {
                            thesubmenu[0].style.height = "0px";
                            thesubmenu[0].style.opacity = "0";
                        }
                    }
                });
            }
        }
    }

    if(sdigital_menuholder != null && sdigital_nav_button != null) {
        inject_menus();
    }
    
});