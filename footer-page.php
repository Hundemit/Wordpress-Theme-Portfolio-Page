</main>
<footer class="h-[70vh] max-w-[1000px] mx-auto flex flex-col justify-center gap-12">
    <!-- Menu -->
    <div
        class="gap-5 flex flex-col sm:flex-row items-center justify-center py-5 w-full text-xl dark:bg-dark bg-light rounded-lg font-bold">
        <div class=" flex gap-5">
            <a class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText duration-500 transition-all text-center"
                href="<?php echo home_url(); ?>">Home. <div class="h-[4px] w-full dark:bg-color1 rounded-xl"></div>
            </a>
            <a class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText duration-500 transition-all text-center"
                href="<?php echo home_url(); ?>#Consulting">My Service. <div
                    class="h-[4px] w-full dark:bg-color2 rounded-xl">
                </div>
            </a>
        </div>
        <div class=" flex gap-5">
            <a class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText duration-500 transition-all text-center"
                href="<?php echo home_url(); ?>/myprojects">My Work. <div
                    class="h-[4px] w-full dark:bg-color3 rounded-xl"></div>
            </a>
            <a class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText duration-500 transition-all text-center"
                href="<?php echo home_url(); ?>#AboutMe">About Me. <div
                    class="h-[4px] w-full dark:bg-color4 rounded-xl"></div>
            </a>
        </div>
    </div>
    <!-- Social -->
    <div class="text-xl flex gap-4 dark:bg-dark bg-light w-full flex-col items-center p-2 sm:p-5 rounded-lg">
        <h1 class="text-[#7F7D79] font-bold">SAY HELLO!</h1>
        <div class="h-14 w-full  flex gap-2 sm:gap-5">
            <a href="https://www.instagram.com/hindemit.ui/"
                class=" h-14 w-full hover:bg-darkLight flex justify-center items-center duration-700 rounded-md">
                <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                    src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Instagram.svg" alt="" />
            </a>
            <a href="https://www.facebook.com/hindemitjan/"
                class="h-14 w-full hover:bg-darkLight flex justify-center items-center duration-700 rounded-md">
                <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                    src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Facebook.svg" alt="" />
            </a>
            <a href="https://discord.gg/ad5GhhdJ"
                class="h-14 w-full hover:bg-darkLight flex justify-center items-center duration-700 rounded-md">
                <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                    src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/discord-logo.svg" alt="" />
            </a>
            <a href="mailto:janxhindemit@web.de"
                class="h-14 w-full hover:bg-darkLight flex justify-center items-center duration-700 rounded-md">
                <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                    src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Mail.svg" alt="" />
            </a>
            <a href="https://twitter.com/hundemit"
                class="h-14 w-full hover:bg-darkLight flex justify-center items-center duration-700 rounded-md">
                <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                    src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Twitter.svg" alt="" />
            </a>
        </div>
    </div>
    <div class="mx-2 sm:mx-0">
        <!-- Balken -->
        <div class="dark:bg-darkText bg-lightText w-full h-1 rounded-xl mb-2"></div>
        <!-- Impressum -->
        <div class="flex justify-between  font-medium">
            <p class="text-xl dark:text-darkText">Made with ❤️️ by me.</p>
            <a href="https://janhindemit.de/impressum"
                class="text-xl dark:text-darkText text-lightText hover:underline">Impressum</a>
        </div>
    </div>
</footer>
<script src="./script.js"></script> <?php wp_footer(); ?> </body>

</html>