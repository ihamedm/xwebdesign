<div id="drawer-menu"
     class="bg-white w-[75vw] h-screen shadow-md fixed top-0 right-0
     translate-x-full transition-transform duration-300 z-50 overflow-y-scroll flex flex-col justify-between p-4"
>

    <header class="drawer-header relative h-8 flex justify-end center-items">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="drawer-close-btn fill-slate-500 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

    </header>
    <main class="drawer-content grow">
        <form class="grow max-w-[200px] relative block" action="<?php bloginfo('url'); ?>">
                        <span class="stroke-primary-400 flex items-center absolute h-full top-0 right-0 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-slate-400">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>

            <input type="text" name="s"
                   class="w-full form-input pl-4 pr-10 py-3 rounded-lg bg-slate-50 border-0 focus:bg-white focus:shadow-md focus:ring-1 ring-slate-300 text-sm"
                   placeholder="جستجو در مقالات ..." >
        </form>

        <nav class="pt-4">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mobile',
                    'container' => false,
                    'menu_class' => 'menu flex-col items-center text-sm gap-4',
                    'menu_id' => 'primary-menu',
                )
            );
        ?>
        </nav>
    </main>

    <footer class="h-16 flex flex-col justify-between items-center gap-2">

        <nav class="">
            <ul class="flex gap-2">
<!--                <li><a>#</a></li>-->
<!--                <li><a>#</a></li>-->
            </ul>
        </nav>

        <strong class="brand font-black text-xs text-gray-300">xWebDesign.ir</strong>
    </footer>
</div>
<div class="drawer-close-side z-40 fixed top-0 right-0 w-screen h-screen backdrop-blur-sm bg-white/30 opacity-0 invisible transition-opacity duration-300"></div>