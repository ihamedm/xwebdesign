(() => {
  // assets/js/drawer.js
  var Drawer = {
    drawerMenu(drawerToggleClass, drawerId) {
      const DrawerToggle = document.querySelector(drawerToggleClass);
      const Drawer2 = document.querySelector(drawerId);
      const hasChild = Drawer2.querySelectorAll(".menu-item-has-children");
      const closeBtn = document.querySelector(".drawer-close-btn");
      const closeSide = document.querySelector(".drawer-close-side");
      const body = document.querySelector("body");
      DrawerToggle.addEventListener("click", function(e) {
        if (Drawer2.classList.contains("drawer-opened")) {
          closeMenu();
        } else {
          openMenu();
        }
      });
      if (hasChild !== null) {
        hasChild.forEach(function(item) {
          const firstLink = item.querySelector("a:first-child");
          firstLink.addEventListener("click", function(event) {
            event.preventDefault();
            item.classList.toggle("opened");
          });
        });
      }
      closeSide.addEventListener("click", function() {
        closeMenu();
      });
      closeBtn.addEventListener("click", function() {
        closeMenu();
      });
      function openMenu() {
        Drawer2.classList.add("drawer-opened", "transform-none");
        closeSide.classList.add("!opacity-100", "!visible");
        body.classList.add("overflow-hidden");
      }
      function closeMenu() {
        Drawer2.classList.remove("drawer-opened", "transform-none");
        closeSide.classList.remove("!opacity-100", "!visible");
        body.classList.remove("overflow-hidden");
      }
      body.addEventListener("change", function() {
        setTimeout(function() {
          closeMenu();
        }, 1e3);
      });
    }
  };
  var drawer_default = Drawer;

  // assets/js/scripts.js
  var SpdMainObj = {
    initVars() {
      let body = document.getElementById("body");
    },
    init() {
      const drawerToggle = document.querySelector(".drawer-toggle");
      if (drawerToggle !== null) {
        drawer_default.drawerMenu(".drawer-toggle", "#drawer-menu");
      }
    }
  };
  var scripts_default = SpdMainObj;
  jQuery(document).ready(function($) {
    SpdMainObj.init();
  });
})();
