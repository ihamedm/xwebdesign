
/**
 * Drawer Mobile Menu
 * @constructor
 */
const Drawer = {
    drawerMenu(drawerToggleClass , drawerId){
        const DrawerToggle = document.querySelector(drawerToggleClass);
        const Drawer = document.querySelector(drawerId);
        const hasChild = Drawer.querySelectorAll('.menu-item-has-children');
        const closeBtn = document.querySelector('.drawer-close-btn');
        const closeSide = document.querySelector('.drawer-close-side');
        const body = document.querySelector('body');


        DrawerToggle.addEventListener('click', function(e) {
            if (Drawer.classList.contains('drawer-opened')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        if(hasChild !==null){
            hasChild.forEach(function(item) {
                const firstLink = item.querySelector('a:first-child');
                firstLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    item.classList.toggle('opened');
                });
            });
        }

        closeSide.addEventListener('click', function() { closeMenu() });
        // closeSide.addEventListener('touchstart', function() { closeMenu() });
        closeBtn.addEventListener('click',function() { closeMenu() });

        function openMenu() {
            Drawer.classList.add('drawer-opened',  'transform-none');
            closeSide.classList.add('!opacity-100', '!visible');
            // Add overflow-hidden class to body to prevent scrolling
            body.classList.add('overflow-hidden');
        }

        function closeMenu() {
            Drawer.classList.remove('drawer-opened',  'transform-none');
            closeSide.classList.remove('!opacity-100', '!visible');

            // Remove overflow-hidden class from body
            body.classList.remove('overflow-hidden');
        }

        body.addEventListener('change', function (){
            setTimeout(function(){
                closeMenu()
            } , 1000)

        })
    }
}

export default Drawer;


