    </div>
    </div>
    </div><!-- #page -->

    <footer class="border-t border-slate-100">
        <div class="container">
            <div class="flex-col bg-white px-6">
                <div id="footer-main" class="flex py-12 gap-6">
                    <div class="about flex-col basis-1/4">
                        <h4 class="text-base font-bold text-slate-800"><span class="text-primary">ایکس</span> وب دیزاین</h4>
                        <p class="text-sm text-slate-700 font-light">
                            من طراح وب هستم و بصورت آزادکار و تمام وقت مشغول انجام پروژه هستم.همیشه علاقه‌مند به انتشار محتوای آموزشی بودم و این وبلاگ فرصتی شد برای تولید محتوای آموزشی مفید برای مدیران وب سایت ها و شاید همکاران تازه کارم.
                            <br>
                            <strong class="font-medium"> حامد موثق پور</strong>
                        </p>
                    </div>

                    <nav class="list-none flex-col basis-1/4">
                        <h4 class="text-base font-bold text-slate-800">دسترسی سریع</h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer1',
                                'container' => false,
                                'menu_class' => 'menu flex-col items-start text-sm gap-4',
                                'menu_id' => 'footer1-menu',
                            )
                        );
                        ?>
                    </nav>

                    <nav class="list-none flex-col basis-1/4">
                        <h4 class="text-base font-bold text-slate-800">مطالب وبلاگ</h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer2',
                                'container' => false,
                                'menu_class' => 'menu flex-col items-start text-sm gap-4',
                                'menu_id' => 'footer2-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>



                <div id="footer-bottom" class="text-center py-4 text-slate-500 font-light text-xs">
                    تمامی حقوق متعلق به
                    <a href="https://movasaqpoor.ir">حامد موثق پور</a>
                    می باشد. انتشار محتوای این وب‌سایت به هر عنوان مجاز نمی‌باشد.
                </div>
            </div>
        </div>
    </footer>

</div><!-- site wrapper -->
<?php wp_footer(); ?>

</body>
</html>
