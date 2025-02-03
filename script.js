    // Add a function to toggle the navigation menu
    function toggleNav() {
        var nav = document.getElementById("navbarNav");
        if (nav.className === "navbar-nav") {
          nav.className += " responsive";
        } else {
          nav.className = "navbar-nav";
        }
      }
      
      // Add an event listener to the menu icon
      var menuIcon = document.getElementById("menuIcon");
      menuIcon.addEventListener("click", toggleNav);