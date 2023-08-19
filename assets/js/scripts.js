import Drawer from "./drawer";

const SpdMainObj = {

    initVars(){
        let body = document.getElementById('body')
    },

    init() {
        const drawerToggle = document.querySelector('.drawer-toggle');
        if (drawerToggle !== null) {
            Drawer.drawerMenu('.drawer-toggle', '#drawer-menu');
        }

    }
}


export default SpdMainObj;

jQuery(document).ready(function($){
    SpdMainObj.init()
})



