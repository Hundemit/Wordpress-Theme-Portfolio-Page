<!DOCTYPE html>
<html lang="de" class="scroll-smooth dark">
  <!-- HEADER PAGE -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <?php wp_head(); ?>
</head>

<body id="body"
    <?php body_class($class = 'dark:bg-darkLight bg-lightLight rounded-2xl overflow-x-hidden p-1 sm:p-4 duration-200'); ?>>
    <?php  /* if ( !is_using_page_or_single_template() ) { get_template_part('template_parts/preLoaderAnimation');} */ ?>
    <div class="bg-noiose m-1 sm:m-4 rounded-xl"></div>
    <header id="header" class="dark:bg-darkLight bg-lightLight z-50 fixed ">
        <div
            class="dark:bg-dark  bg-light flex justify-between items-center rounded-t-xl p-6 sm:pr-6 shadow dark:shadow-dark shadow-light">
            <!-- LOGO -->
            <div class="flex justify-center items-center gap-4 z-50 sm:w-auto  duration-700">
                <a href="<?php echo home_url(); ?>" id="logoButton" class="duration-700">
                    <img class="h-[28px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url'); ?>/Assests/picture/logo/Logo.svg" alt="" />
                </a>
                <!-- TEXT -->
                <div class=" flex flex-col h-[28px] justify-between gap">
                    <p class="text-xs font-bold leading-[10px]"> Jan Hindemit</p> <?php if ( is_using_page_or_single_template() ) {
                    echo '<a href="https://janhindemit.de/#EmailMe"
                        class="text-xs font-bold flex  items-center gap-2 leading-[10px] hover:underline  duration-700">
                        <!-- PUNKT PING -->
                        <div class="w-[10px] h-[10px] rounded-full bg-[#58dd29] ">
                            <div class="w-[10px] h-[10px] rounded-full bg-[#58dd29] animate-ping"></div>
                        </div> <span>Buche mich!</span>
                        <img class="h-[15px] -rotate-90 duration-700 hover:rotate-12 hover:scale-110"
                            src="' . get_bloginfo('template_url') . '/Assests/picture/logo/hand-pointing.png"
                            alt="" />
                    </a>'; } 
                     else{
                        echo '<a href="#EmailMe"
                        class="text-xs font-bold flex  items-center gap-2 leading-[10px] hover:underline  duration-700">
                        <!-- PUNKT PING -->
                        <div class="w-[10px] h-[10px] rounded-full bg-[#58dd29] ">
                            <div class="w-[10px] h-[10px] rounded-full bg-[#58dd29] animate-ping"></div>
                        </div> <span>Buche mich!</span>
                        <img class="h-[15px] -rotate-90 duration-700 hover:rotate-12 hover:scale-110"
                            src="' . get_bloginfo('template_url') . '/Assests/picture/logo/hand-pointing.png"
                            alt="" />
                    </a>';

                    
                        }?>
                </div>
            </div>
            <!-- Menu Button -->
            <div id="menuOpenButton"
                class="menu-icon h-[25px] sm:h-[40px] w-[40px] relative scale-75 sm:scale-100 duration-200 z-50 cursor-pointer sm:z-0"
                onclick="switchMenu()">
                <input id="menu_checkbox" class="menu-icon__cheeckbox" type="checkbox" />
                <div>
                    <span class="dark:bg-darkText bg-lightText"></span>
                    <span class="dark:bg-darkText bg-lightText"></span>
                </div>
            </div>
            <!-- Menu -->
            <nav id="menu"
                class="fixed w-full h-full invisible opacity-0 flex flex-col items-end dark:bg-darkLight bg-lightLight box-border top-1 z-[49] right-0  gap-10 transform sm:translate-y-[100px] sm:absolute sm:z-10 sm:h-auto sm:w-96 sm:right-6 sm:top-[0.8rem] sm:rounded-xl shadow-xl duration-100 px-1 sm:px-10 sm:py-5">
                <div
                    class="w-full h-full px-5 sm:px-0 dark:bg-dark bg-light dark:sm:bg-darkLight sm:bg-lightLight rounded-t-xl sm:rounded-xl flex flex-col">
                    <div onclick="switchMenu()"
                        class="h-[40px] ml-auto aspect-square sm:flex justify-center items-center hidden duration-100">
                        <div class="w-[33px] aspect-square relative rotate-45">
                            <div
                                class="dark:bg-darkText bg-lightText w-[33px] h-[4px] rounded-xl absolute top-[14.25px]">
                            </div>
                            <div
                                class="dark:bg-darkText bg-lightText h-[33px] w-[4px] rounded-xl absolute left-[14.25px]">
                            </div>
                        </div>
                    </div>
                    <div
                        class="dark:bg-darkLight bg-lightLight h-full mb-5 p-5 mt-16 rounded-xl sm:gap-24 w-full box-border sm:p-0 sm:shadow-none sm:mt-0 duration-200 flex flex-col shadow-2xl justify-between">
                        <div class="gap-5 flex flex-col text-xl">
                            <a onclick="switchMenu()"
                                class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText decoration-red duration-500 transition-all font-bold"
                                href="<?php echo home_url(); ?>">Home.<div class="h-[4px] w-full bg-color1 rounded-xl">
                                </div>
                            </a>
                            <a onclick="switchMenu()"
                                class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText decoration-red duration-500 transition-all font-bold"
                                href="<?php echo home_url(); ?>/myprojects">My Work.<div
                                    class="h-[4px] w-full bg-color2 rounded-xl"></div>
                            </a>
                            <a onclick=" switchMenu()"
                                class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText decoration-red duration-500 transition-all font-bold"
                                href="<?php echo home_url(); ?>/#Consulting">My Service.<div
                                    class="h-[4px] w-full bg-color3 rounded-xl"></div>
                            </a>
                            <a onclick="switchMenu()"
                                class="menuContainerListLink w-[130px] hover:w-[150px] dark:text-darkText text-lightText decoration-red duration-500 transition-all font-bold"
                                href="<?php echo home_url(); ?>/#AboutMe">About Me.<div
                                    class="h-[4px] w-full bg-color4 rounded-xl"></div>
                            </a>
                        </div>
                        <div class="text-xl flex flex-col gap-2">
                            <h1 class="text-gray-400 font-bold">SAY HELLO</h1>
                            <div class="h-14 w-full  flex gap-2 ">
                                <a href="https://www.instagram.com/hindemit.ui/"
                                    class=" h-14 w-full bg-darkContainer hover:bg-dark flex justify-center items-center duration-700 rounded-md">
                                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Instagram.svg"
                                        alt="" />
                                </a>
                                <a href="https://www.facebook.com/hindemitjan/"
                                    class="h-14 w-full bg-darkContainer hover:bg-dark flex justify-center items-center duration-700 rounded-md">
                                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Facebook.svg"
                                        alt="" />
                                </a>
                                <a href="https://www.linkedin.com/in/jan-hindemit-637104250/"
                                    class="h-14 w-full bg-darkContainer hover:bg-dark flex justify-center items-center duration-700 rounded-md">
                                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/linkedin-logo.svg"
                                        alt="" />
                                </a>
                                <a href="https://dribbble.com/Hundemit" target="_blank"
                                    class="h-14 w-full bg-darkContainer hover:bg-dark flex justify-center items-center duration-700 rounded-md">
                                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/dribbble-logo.svg"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main id="main" class="dark:bg-dark bg-light rounded-2xl pb-40 px-5 sm:px-10">