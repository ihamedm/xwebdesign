<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>


<body <?php body_class('text-slate-700'); ?>>

<?php wp_body_open(); ?>


<div class="site-wrapper bg-slate-100 md:py-6 min-h-screen">

    <header>
        <div class="container">
            <div class="flex-col bg-white border-b border-slate-100 p-3 md:p-6 pb-3">
                <div class="flex justify-between max-md:items-center ">

                    <div class="drawer-toggle w-8 h-8 bg-slate-100 rounded-md flex flex-col gap-1 items-center justify-center md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>

                    <div class="flex-col justify-center md:justify-start items-center gap-4 max-md:w-[150px]">
                        <a href="<?php bloginfo('url');?>">
                            <svg class="max-w-full" width="183" height="36" viewBox="0 0 183 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M122.86 23.6H128.684L128.768 24.328L128.684 25H122.86V23.6ZM140.731 23.18C140.395 23.7587 139.891 24.2067 139.219 24.524C138.565 24.8413 137.884 25 137.175 25C136.465 25 135.775 24.8507 135.103 24.552C134.431 24.2347 133.927 23.7773 133.591 23.18C133.199 23.7773 132.667 24.2347 131.995 24.552C131.341 24.8507 130.595 25 129.755 25H127.851V23.6H129.755C130.819 23.6 131.621 23.3947 132.163 22.984C132.704 22.5547 132.975 21.8547 132.975 20.884V16.628H134.263V20.884C134.263 21.892 134.533 22.6013 135.075 23.012C135.616 23.404 136.316 23.6 137.175 23.6C138.015 23.6 138.715 23.3853 139.275 22.956C139.835 22.508 140.115 21.8173 140.115 20.884V16.628H141.403V20.884C141.403 21.892 141.683 22.6013 142.243 23.012C142.803 23.404 143.503 23.6 144.343 23.6C145.22 23.6 145.92 23.404 146.443 23.012C146.984 22.6013 147.255 21.892 147.255 20.884V16.628H148.543V20.884C148.543 21.8547 148.813 22.5547 149.355 22.984C149.915 23.3947 150.727 23.6 151.791 23.6H153.667L153.779 24.272L153.667 25H151.791C150.932 25 150.167 24.8507 149.495 24.552C148.841 24.2347 148.319 23.7773 147.927 23.18C147.591 23.7773 147.087 24.2347 146.415 24.552C145.743 24.8507 145.052 25 144.343 25C143.633 25 142.952 24.8507 142.299 24.552C141.645 24.2347 141.123 23.7773 140.731 23.18ZM166.214 6.912L156.33 11.252L160.866 17.16C161.743 18.2987 162.154 19.484 162.098 20.716C162.061 21.948 161.613 22.9747 160.754 23.796C159.914 24.5987 158.841 25 157.534 25H152.83V23.6H157.478C158.523 23.6 159.354 23.3293 159.97 22.788C160.605 22.228 160.922 21.5187 160.922 20.66C160.941 19.8013 160.623 18.952 159.97 18.112L154.986 11.84L155.378 10.16L165.71 5.624L166.214 6.912ZM168.706 24.328L168.622 25H168.258C167.306 25 166.438 24.7667 165.654 24.3C164.889 23.8333 164.133 23.18 163.386 22.34C162.658 21.5 161.669 20.2493 160.418 18.588L159.97 17.972L160.866 17.16L161.566 18.056C162.63 19.4933 163.498 20.5947 164.17 21.36C164.861 22.1067 165.523 22.6667 166.158 23.04C166.793 23.4133 167.493 23.6 168.258 23.6H168.622L168.706 24.328ZM167.774 23.6H171.554C172.711 23.6 173.523 23.348 173.99 22.844C174.456 22.3213 174.68 21.668 174.662 20.884C174.643 20.3427 174.55 19.6053 174.382 18.672C174.214 17.7387 174.008 16.7493 173.766 15.704L175.054 15.424C175.278 16.432 175.474 17.44 175.642 18.448C175.828 19.4373 175.931 20.2493 175.95 20.884C175.968 21.556 175.828 22.2093 175.53 22.844C175.25 23.46 174.774 23.9733 174.102 24.384C173.448 24.7947 172.599 25 171.554 25H167.774V23.6ZM166.934 28.78C167.27 28.78 167.522 28.78 167.69 28.78C167.839 28.78 168.082 28.78 168.418 28.78C168.642 28.78 168.875 28.78 169.118 28.78C169.118 29.0973 169.118 29.34 169.118 29.508C169.118 29.676 169.118 29.9187 169.118 30.236C169.118 30.4787 169.118 30.7213 169.118 30.964C168.614 30.964 168.24 30.964 167.998 30.964C167.774 30.964 167.419 30.964 166.934 30.964C166.934 30.46 166.934 30.0867 166.934 29.844C166.934 29.6013 166.934 29.2467 166.934 28.78ZM171.19 28.78C171.694 28.78 172.067 28.78 172.31 28.78C172.552 28.78 172.907 28.78 173.374 28.78C173.374 29.2653 173.374 29.6293 173.374 29.872C173.374 30.1147 173.374 30.4787 173.374 30.964C172.888 30.964 172.524 30.964 172.282 30.964C172.039 30.964 171.675 30.964 171.19 30.964C171.19 30.7213 171.19 30.4787 171.19 30.236C171.19 29.9 171.19 29.648 171.19 29.48C171.19 29.3307 171.19 29.0973 171.19 28.78ZM179.307 6.828H180.595V25H179.307V6.828Z" fill="#2C82C9"/>
                                <path d="M21.224 25C20.5147 25 19.88 24.804 19.32 24.412C18.7787 24.0013 18.3587 23.3947 18.06 22.592C17.7613 21.7893 17.612 20.7813 17.612 19.568H19.544C19.544 20.1093 19.684 20.4827 19.964 20.688C20.2627 20.8747 20.6827 20.968 21.224 20.968H21.812L22.064 23.068L21.812 25H21.224ZM6.356 18.028C5.88933 19.0173 5.52533 19.988 5.264 20.94C5.02133 21.8733 4.9 22.7787 4.9 23.656C4.9 24.6267 5.04 25.4293 5.32 26.064C5.61867 26.7173 6.08533 27.2027 6.72 27.52C7.37333 27.856 8.25067 28.024 9.352 28.024H11.76C12.9547 28.024 13.8507 27.9213 14.448 27.716C15.0453 27.5107 15.4467 27.156 15.652 26.652C15.876 26.148 15.988 25.4013 15.988 24.412V15.62H19.544V24.412C19.544 26.764 18.9093 28.6213 17.64 29.984C16.3893 31.3653 14.4293 32.056 11.76 32.056H9.352C7.672 32.056 6.23467 31.6827 5.04 30.936C3.84533 30.1893 2.94 29.172 2.324 27.884C1.708 26.6147 1.4 25.2053 1.4 23.656C1.4 22.5173 1.596 21.304 1.988 20.016C2.38 18.728 2.84667 17.5427 3.388 16.46L6.356 18.028ZM9.24 13.072C9.87467 13.072 10.5093 13.072 11.144 13.072C11.76 13.072 12.3667 13.072 12.964 13.072C12.964 13.8933 12.964 14.5093 12.964 14.92C12.964 15.312 12.964 15.9093 12.964 16.712C12.124 16.712 11.4987 16.712 11.088 16.712C10.6773 16.712 10.0613 16.712 9.24 16.712C9.24 15.872 9.24 15.256 9.24 14.864C9.24 14.4533 9.24 13.856 9.24 13.072ZM22.0196 20.968H25.1276C25.9676 20.968 26.5649 20.828 26.9196 20.548C27.2743 20.2493 27.4329 19.8293 27.3956 19.288C27.3583 18.7653 27.2649 18.0653 27.1156 17.188C26.9849 16.3107 26.8356 15.4613 26.6676 14.64L30.0276 13.8C30.2516 14.7333 30.4569 15.7507 30.6436 16.852C30.8489 17.9533 30.9516 18.8587 30.9516 19.568C30.9703 20.5013 30.7743 21.388 30.3636 22.228C29.9529 23.0493 29.3276 23.7213 28.4876 24.244C27.6663 24.748 26.6396 25 25.4076 25H22.0196V20.968ZM21.0116 25V20.968H22.2436L22.3836 23.012L22.2436 25H21.0116ZM21.5156 28.444C22.0196 28.444 22.3929 28.444 22.6356 28.444C22.8783 28.444 23.2516 28.444 23.7556 28.444C24.1289 28.444 24.4929 28.444 24.8476 28.444C24.8476 29.2093 24.8476 29.7693 24.8476 30.124C24.8476 30.4787 24.8476 31.0293 24.8476 31.776C24.0823 31.776 23.5223 31.776 23.1676 31.776C22.8129 31.776 22.2623 31.776 21.5156 31.776C21.5156 31.0107 21.5156 30.4413 21.5156 30.068C21.5156 29.7133 21.5156 29.172 21.5156 28.444ZM26.7516 28.444C27.5169 28.444 28.0863 28.444 28.4596 28.444C28.8329 28.444 29.3836 28.444 30.1116 28.444C30.1116 29.2093 30.1116 29.7693 30.1116 30.124C30.1116 30.4787 30.1116 31.0293 30.1116 31.776C29.3463 31.776 28.7769 31.776 28.4036 31.776C28.0489 31.776 27.4983 31.776 26.7516 31.776C26.7516 31.0107 26.7516 30.4413 26.7516 30.068C26.7516 29.7133 26.7516 29.172 26.7516 28.444ZM33.9859 6.296H37.5419V25H33.9859V6.296ZM46.3752 15.62V23.516C46.3752 25.2893 46.0579 26.82 45.4232 28.108C44.8072 29.396 43.8926 30.376 42.6792 31.048C41.4846 31.72 40.0192 32.056 38.2832 32.056H36.5192V28.024H38.2832C39.4592 28.024 40.3646 27.884 40.9992 27.604C41.6526 27.3427 42.1099 26.8853 42.3712 26.232C42.6512 25.5973 42.7912 24.692 42.7912 23.516V15.62H46.3752ZM46.3752 19.68C46.3752 20.1653 46.4966 20.5013 46.7392 20.688C47.0006 20.8747 47.4112 20.968 47.9712 20.968H48.5032L48.6712 23.012L48.5032 25H47.9712C47.4672 25 47.0006 24.8973 46.5712 24.692C46.1606 24.4867 45.8152 24.16 45.5352 23.712C45.2739 23.2453 45.1059 22.648 45.0312 21.92L46.3752 19.68ZM42.5952 8.648C43.2299 8.648 43.8646 8.648 44.4992 8.648C45.1152 8.648 45.7219 8.648 46.3192 8.648C46.3192 9.46933 46.3192 10.0853 46.3192 10.496C46.3192 10.888 46.3192 11.4853 46.3192 12.288C45.4792 12.288 44.8539 12.288 44.4432 12.288C44.0326 12.288 43.4166 12.288 42.5952 12.288C42.5952 11.448 42.5952 10.832 42.5952 10.44C42.5952 10.0293 42.5952 9.432 42.5952 8.648ZM48.6951 20.968H51.8031C52.6431 20.968 53.2404 20.828 53.5951 20.548C53.9497 20.2493 54.1084 19.8293 54.0711 19.288C54.0337 18.7653 53.9404 18.0653 53.7911 17.188C53.6604 16.3107 53.5111 15.4613 53.3431 14.64L56.7031 13.8C56.9271 14.7333 57.1324 15.7507 57.3191 16.852C57.5244 17.9533 57.6271 18.8587 57.6271 19.568C57.6457 20.5013 57.4497 21.388 57.0391 22.228C56.6284 23.0493 56.0031 23.7213 55.1631 24.244C54.3417 24.748 53.3151 25 52.0831 25H48.6951V20.968ZM47.6871 25V20.968H48.9191L49.0591 23.012L48.9191 25H47.6871ZM48.1911 28.444C48.6951 28.444 49.0684 28.444 49.3111 28.444C49.5537 28.444 49.9271 28.444 50.4311 28.444C50.8044 28.444 51.1684 28.444 51.5231 28.444C51.5231 29.2093 51.5231 29.7693 51.5231 30.124C51.5231 30.4787 51.5231 31.0293 51.5231 31.776C50.7577 31.776 50.1977 31.776 49.8431 31.776C49.4884 31.776 48.9377 31.776 48.1911 31.776C48.1911 31.0107 48.1911 30.4413 48.1911 30.068C48.1911 29.7133 48.1911 29.172 48.1911 28.444ZM53.4271 28.444C54.1924 28.444 54.7617 28.444 55.1351 28.444C55.5084 28.444 56.0591 28.444 56.7871 28.444C56.7871 29.2093 56.7871 29.7693 56.7871 30.124C56.7871 30.4787 56.7871 31.0293 56.7871 31.776C56.0217 31.776 55.4524 31.776 55.0791 31.776C54.7244 31.776 54.1737 31.776 53.4271 31.776C53.4271 31.0107 53.4271 30.4413 53.4271 30.068C53.4271 29.7133 53.4271 29.172 53.4271 28.444ZM68.2493 12.064C68.828 12.9413 69.332 13.7253 69.7613 14.416C70.2093 15.088 70.6947 15.844 71.2173 16.684C71.8893 17.7667 72.244 18.8587 72.2813 19.96C72.3187 21.0613 72.0667 22.004 71.5253 22.788C70.9653 23.5907 70.284 24.16 69.4813 24.496C68.6787 24.832 67.708 25 66.5693 25H65.0853C63.9093 25 62.8733 24.8133 61.9773 24.44C61.0813 24.048 60.3813 23.628 59.8773 23.18L61.5573 19.96L61.6413 20.044C62.0707 20.268 62.556 20.4827 63.0973 20.688C63.6573 20.8747 64.3293 20.968 65.1133 20.968H66.4853C67.1013 20.968 67.568 20.9213 67.8853 20.828C68.2213 20.7347 68.464 20.5853 68.6133 20.38C68.744 20.1747 68.7813 19.9507 68.7253 19.708C68.6693 19.4467 68.5107 19.1107 68.2493 18.7C66.7 16.348 65.272 14.22 63.9653 12.316L66.9613 10.076L68.2493 12.064ZM85.0878 25C83.7625 25 82.6332 24.6733 81.6998 24.02C80.7852 23.3667 80.1318 22.5173 79.7398 21.472C79.3478 20.408 79.2638 19.2973 79.4878 18.14C79.7492 16.7773 80.0198 15.5173 80.2998 14.36L83.5758 15.172L83.4078 15.928C83.0905 17.2533 82.9038 18.196 82.8478 18.756C82.7545 19.4093 82.9038 19.9413 83.2958 20.352C83.6878 20.7627 84.2852 20.968 85.0878 20.968H97.1278C97.8932 20.968 98.4532 20.8 98.8078 20.464C99.1812 20.128 99.3585 19.68 99.3398 19.12C99.3212 18.28 99.0785 16.7213 98.6118 14.444L101.972 13.604C102.588 16.2547 102.896 18.1867 102.896 19.4C102.896 20.3333 102.681 21.2293 102.252 22.088C101.841 22.9467 101.225 23.6467 100.404 24.188C99.5825 24.7293 98.5838 25 97.4078 25H85.0878ZM89.3998 28.416C90.0345 28.416 90.6692 28.416 91.3038 28.416C91.9198 28.416 92.5265 28.416 93.1238 28.416C93.1238 29.256 93.1238 29.872 93.1238 30.264C93.1238 30.6747 93.1238 31.272 93.1238 32.056C92.2838 32.056 91.6585 32.056 91.2478 32.056C90.8372 32.056 90.2212 32.056 89.3998 32.056C89.3998 31.2347 89.3998 30.6187 89.3998 30.208C89.3998 29.816 89.3998 29.2187 89.3998 28.416ZM109.039 28.024C110.252 28.024 111.157 27.912 111.755 27.688C112.371 27.464 112.781 27.1 112.987 26.596C113.211 26.092 113.323 25.3547 113.323 24.384V18.812C113.323 17.8973 113.127 17.188 112.735 16.684C112.361 16.1613 111.745 15.9 110.887 15.9C110.121 15.9 109.543 16.1613 109.151 16.684C108.759 17.2067 108.563 17.8787 108.563 18.7C108.563 19.4653 108.749 20.0347 109.123 20.408C109.496 20.7627 110.093 20.94 110.915 20.94H114.947V24.804H110.915C109.141 24.804 107.732 24.2907 106.687 23.264C105.66 22.2187 105.147 20.7627 105.147 18.896C105.147 17.5707 105.389 16.3947 105.875 15.368C106.36 14.3413 107.041 13.548 107.919 12.988C108.796 12.4093 109.785 12.12 110.887 12.12C112.081 12.12 113.127 12.4 114.023 12.96C114.937 13.5013 115.637 14.2947 116.123 15.34C116.627 16.3667 116.879 17.552 116.879 18.896V24.384C116.879 25.8773 116.608 27.1933 116.067 28.332C115.544 29.4893 114.704 30.3947 113.547 31.048C112.389 31.72 110.887 32.056 109.039 32.056H105.707V28.024H109.039Z" fill="#3D3D3D"/>
                            </svg>
                        </a>
                        <h1 class="screen-reader-text"><?php bloginfo('title');?></h1>
                        <h2 class="font-medium text-xs text-slate-600 max-md:text-center max-md:text-[10px]"><?php bloginfo('description');?></h2>
                    </div>

                    <form class="grow max-w-[200px] relative hidden md:block" action="<?php bloginfo('url'); ?>">
                        <span class="stroke-primary-400 flex items-center absolute h-full top-0 right-0 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-slate-400">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>

                        <input type="text" name="s"
                               class="w-full form-input pl-4 pr-10 py-3 rounded-lg bg-slate-50 border-0 focus:bg-white focus:shadow-md focus:ring-1 ring-slate-300 text-sm"
                               placeholder="جستجو در مقالات ..." >
                    </form>

                    <div class="w-6 h-6 md:hidden"></div>

                </div>

                <nav class="hidden md:flex justify-between items-center mt-4">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'menu flex items-center text-sm gap-4',
                            'menu_id' => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>

        <?php get_template_part('templates/header', 'drawer');?>
    </header>

    <div id="page" >
        <div class="container">
            <div class="flex max-md:flex-col bg-white p-4 md:p-6 gap-6">
