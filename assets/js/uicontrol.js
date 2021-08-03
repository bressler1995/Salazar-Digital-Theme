jQuery( document ).ready(function() {

    window.onscroll = function(e) {
        // log the length scrolled vertically
        callmybubble();
    }

    let eccent_desktop_menu = document.getElementById("eccent_desktop_menu");
    let sdigital_nav_button = document.getElementById("sdigital_nav_button");
    let sdigital_menuholder = document.getElementById("sdigital_menuholder");
    let sdigital_menu_close = document.getElementById("sdigital_menu_close");
    let mobile_sub_menu = [-1, -1, -1];

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
        let sdigital_general_a = eccent_desktop_menu.getElementsByTagName("a");

        sdigital_nav_button.addEventListener("click", function(){
            show_the_menu();
        });

        sdigital_menu_close.addEventListener("click", function(){
            close_the_menu();
        });

        if(eccent_desktop_menu != null) {
            let eccent_desktop_menu_parent = eccent_desktop_menu.getElementsByClassName("menu-item-has-children");

            for(i = 0; i < eccent_desktop_menu_parent.length; i++) {
                eccent_desktop_menu_parent[i].addEventListener("click", function(event){
                    event.preventDefault();
                    if (window.matchMedia('(max-width: 1024px)').matches) {
                        let thesubmenu = this.getElementsByClassName("sub-menu");

                        if(thesubmenu.length >= 1) {
                            let the_submenu_li = thesubmenu[0].getElementsByTagName("li");
                            let the_submenu_height = the_submenu_li.length * 42;

                            console.log("Height Target: " + the_submenu_height);
                            console.log("Current Height: " + thesubmenu[0].clientHeight);

                            if(thesubmenu[0].clientHeight == 0) {
                                thesubmenu[0].style.height = the_submenu_height + "px";
                                thesubmenu[0].style.opacity = "1";
                            } else {
                                thesubmenu[0].style.height = "0px";
                                thesubmenu[0].style.opacity = "0";
                            }
                        }
                    }
                    
                    return false;
                });

                eccent_desktop_menu_parent[i].addEventListener("mouseover", function(){
                    if (window.matchMedia('(min-width: 1025px)').matches) {
                        let thesubmenu = this.getElementsByClassName("sub-menu");

                        if(thesubmenu.length >= 1) {
                            let the_submenu_li = thesubmenu[0].getElementsByTagName("li");
                            let the_submenu_height = the_submenu_li.length * 42;

                            console.log("Height Target: " + the_submenu_height);
                            console.log("Current Height: " + thesubmenu[0].clientHeight);

                            if(thesubmenu[0].clientHeight == 0) {
                                thesubmenu[0].style.height = the_submenu_height + "px";
                                thesubmenu[0].style.opacity = "1";
                            }
                        }
                    }
                    
                });
            }

            for(z = 0; z < eccent_desktop_menu_parent.length; z++) {
                eccent_desktop_menu_parent[z].addEventListener("mouseleave", function(){
                    if (window.matchMedia('(min-width: 1025px)').matches) {
                        let thesubmenu = this.getElementsByClassName("sub-menu");

                        if(thesubmenu.length >= 1) {
                            let the_submenu_li = thesubmenu[0].getElementsByTagName("li");

                            if(thesubmenu[0].clientHeight > 0) {
                                thesubmenu[0].style.height = "0px";
                                thesubmenu[0].style.opacity = "0";
                            }
                        }
                    }
                });
            }

            for(y = 0; y < sdigital_general_a.length; y++) {
                sdigital_general_a[y].addEventListener("click", function() {
                    if (window.matchMedia('(min-width: 1025px)').matches) {
                        console.log('Large viewport');
                        close_the_menu();
                    } else {
                        console.log('Small viewport');
                    }
                });
            }
        }

        
    }

    if(sdigital_menuholder != null && sdigital_nav_button != null) {
        inject_menus();
    }

    function show_the_menu() {
        if(sdigital_menuholder.classList.contains("show") == false) {
            sdigital_menuholder.classList.add("show");
        }
    }

    function close_the_menu() {
        if(sdigital_menuholder.classList.contains("show") == true) {
            sdigital_menuholder.classList.remove("show");
        }
    }
    
});