<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>


<!--  -->
<div class="main-wrapper">

    <header class="fixed left-0 right-0 top-0 bg-gradient-to-b from-[#000] to-[#0007]  dark:from-[#16191c] dark:to-[#16191c] h-[60px] flex items-center border-b border-transparent dark:border-[#2e3840] shadow-header z-[9999]">

        <div class="logo media-max-w-md:max-w-full max-w-[230px] w-full media-max-w-md:absolute px-5 transition-all ease-in-out duration-[0.2s]">
            <a href="index.html">
                <img src="images/logo.png" alt="logo" class="logo-white w-[40px] h-[40px] mx-auto">
                <img src="images/logo2.png" alt="logo" class="logo-color w-[40px] h-[40px] mx-auto">
            </a>
        </div>

        <a href="javascript:;" class="media-max-w-md:hidden flex px-[10px]" id="toggle_btn">
            <span class="bar-icon inline-block w-[21px]">
                <span class="w-[21px] h-[2px] bg-white dark:bg-swapText mb-[5px] block float-left"></span>
                <span class="w-[15px] h-[2px] bg-white dark:bg-swapText mb-[5px] block float-left"></span>
                <span class="w-[21px] h-[2px] bg-white dark:bg-swapText block float-left"></span>
            </span>
        </a>

        <div class="px-5 media-max-w-lg:hidden">
            <h3 class="text-[20px] font-normal text-white dark:text-swapText leading-[1.2]">Embrace Info-Tech</h3>
        </div>

        <a id="mobile_btn" class="media-min-w-md:hidden px-5 w-[60px] h-[60px] leading-[60px] absolute top-0 left-0 text-white dark:text-swapText text-2xl" href="#sidebar"><i class="fa fa-bars"></i></a>

        <div class="ml-auto">
            <ul class="top-nav hidden sm:flex items-center">

                <li>
                    <div class="relative" x-data="{mobSearch:false}">


                        <form action="javascript:;" class=" media-max-w-md:hidden flex items-center w-[350px] relative">
                            <input class="bg-searchbg !border-transparent focus:ring-0 w-full h-[40px] py-[10px] pl-[15px] pr-[50px] rounded-[50px] text-gray dark:text-swapText placeholder:text-whiteOpacity outline-none focus:outline-none" type="text" placeholder="Search here">
                            <button class="flex absolute right-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>

                            </button>
                        </form>


                    </div>
                </li>



                <li class="relative" x-data="{notify:false}" @click.away="notify=false" hover-click-drop-next>
                    <a href="javascript:;" class="sm:px-[10px] md:px-[15px] text-white dark:text-swapText flex items-center h-[60px] hover:bg-blackOpacity focus:bg-blackOpacity" @click="notify = ! notify">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>

                        <span class="bg-countBubble dark:bg-[#fc6075] w-5 h-5 flex items-center text-xs justify-center font-semibold text-white rounded-full absolute top-[6px] right-[3px]">3</span></a>

                    <div x-show="notify" class="hidden bg-white absolute right-0 border border-dropdownBorder shadow rounded-sm min-w-[10rem] z-50">
                        <div class="h-8 leading-8 px-3 flex items-center justify-between border-b border-dropdownBorderBtm">
                            <span class="text-sm block text-[#333333]">Notifications</span>
                            <a href="javascript:void(0)" class="text-[#f83f37] text-[11px] uppercase"> Clear All </a>
                        </div>
                        <div class="w-[350px] h-[290px] overflow-y-auto">
                            <ul>

                                <li>
                                    <a href="activities.html" class="block p-3 rounded-sm">
                                        <div class="flex">
                                            <span class="w-[38px] shrink-0 mr-[10px]">
                                                <img alt="" src="images/profiles/avatar-13.jpg" class="w-full rounded-full">
                                            </span>
                                            <div class="grow">
                                                <p class="text-notiDetails text-[13px]"><span class="text-notiTitle">Bernardo Galaviz</span> added new task <span class="text-notiTitle">Private chat module</span></p>
                                                <p class="text-notiTime text-xs"><span>2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="border border-dropdownBorderBtm h-8 leading-8 px-3 flex items-center justify-center">
                            <a href="activities.html" class="text-xs block text-[#333333]">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="relative" x-data="{notify:false}" @click.away="notify=false" hover-click-drop-next>
                    <a href="javascript:;" class="sm:px-[10px] md:px-[15px] text-white dark:text-swapText flex items-center h-[60px] hover:bg-blackOpacity focus:bg-blackOpacity" @click="notify = ! notify">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>



                        <span class="bg-countBubble dark:bg-[#fc6075] w-5 h-5 flex items-center text-xs justify-center font-semibold text-white rounded-full absolute top-[6px] right-[3px]">4</span></a>
                    <div x-show="message" class="hidden bg-white absolute right-0 border border-dropdownBorder shadow rounded-sm min-w-[10rem] z-50">
                        <div class="h-8 leading-8 px-3 flex items-center justify-between border-b border-dropdownBorderBtm">
                            <span class="text-sm block text-[#333333]">Messages</span>
                            <a href="javascript:void(0)" class="text-[#f83f37] text-[11px] uppercase"> Clear All </a>
                        </div>
                        <div class="w-[350px] h-[290px] overflow-y-auto">
                            <ul>

                                <li class="border-b border-dropdownBorderBtm">
                                    <a href="chat.html" class="block p-3 rounded-sm">
                                        <div class="relative">
                                            <div class="absolute w-[48px] h-[48px]">
                                                <span class="inline-block w-[38px] h-[38px] mr-[10px]">
                                                    <img alt="" src="images/profile/avatar-1.jpg" class="w-full rounded-full">
                                                </span>
                                            </div>
                                            <div class="pl-[50px] pr-0 py-0">
                                                <span class="text-[13px] text-[#333333] font-medium w-[175px] block float-left max-w-full overflow-hidden text-ellipsis whitespace-nowrap">Catherine Manseau </span>
                                                <span class="text-[#666666] text-[11px] float-right">27 Feb</span>
                                                <div class="clear-both"></div>
                                                <span class="text-[13px] text-[#333333] block max-w-full overflow-hidden text-ellipsis whitespace-nowrap">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="border border-dropdownBorderBtm h-8 leading-8 px-3 flex items-center justify-center">
                            <a href="chat.html" class="text-xs block text-[#333333] ">View all Messages</a>
                        </div>
                    </div>
                </li>

                <li class="relative" x-data="{profile:false}" @click.away="profile=false" hover-click-drop-next>


                    <a href="javascript:;" class="sm:px-[10px] md:px-[15px] text-white dark:text-swapText flex items-center h-[60px] hover:bg-blackOpacity focus:bg-blackOpacity after:media-max-w-md:hidden after:font-FontAwesome after:pl-[5px] after:text-[20px] after:transition-all after:ease-in-out after:duration-[0.2s] after:rotate-0" :class="{'after:rotate-180 after:pl-[0px] after:pr-[5px]':profile === true, 'after:rotate-0': profile === false}" @click="profile = ! profile">

                        <div class="inline-block relative leading-[60px] h-[60px] media-min-w-md:mr-2"><img src="images/profile/avatar-1.jpg" class="inline-block w-[30px] h-[30px] rounded-full" alt=""><span class="w-[10px] h-[10px] bg-statusOnline rounded-full border-2 border-white absolute right-0 bottom-3"></span></div>
                        <span class="sm:hidden md:block  text-[15px] leading-[60px]">{{Auth::user()->name}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 media-max-w-md:hidden text-[15px] leading-[60px]">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />

                        </svg>

                    </a>
                    <div x-show="profile" class="py-2 bg-white absolute hidden right-0 border border-dropdownBorder shadow rounded-sm min-w-[130px] w-full overflow-y-auto z-50">
                        <a href="/profile" class="px-3 py-1 flex items-center text-[13px] capitalize hover:text-dropdownColor hover:bg-dropdownhoverColor">my profile</a>
                        <a href="settings.html" class="px-3 py-1 flex items-center text-[13px] capitalize hover:text-dropdownColor hover:bg-dropdownhoverColor">settings</a>
                        <a href="/logout" class="px-3 py-1 flex items-center text-[13px] capitalize hover:text-dropdownColor hover:bg-dropdownhoverColor">logout</a>
                    </div>
                </li>
            </ul>




        </div>
    </header>


    <!--  -->


    <!-- sidebar start -->
    <div class="side-body">
        <div class="sidebar bg-sidebar dark:bg-swapBg media-max-w-md:-ml-[225px] media-max-w-md:w-[225px] transition-all ease-in-out duration-[0.2s] w-[230px] fixed top-[60px] bottom-0 left-0 py-[10px] z-[401]" id="sidebar">
            <div class="h-full pb-5 scrollbar-thin scrollbar-thumb-scrollbar scroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>


                        <li class="submenu relative list-parent">
                            <a href="javascript:;"><i class="la la-cube"></i> <span> Apps</span> <span class="absolute right-[10px] chev"><span class="material-icons text-lg menu-arrow transition-all ease-in-out duration-[0.2s]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>


                                    </span></span></a>
                            <!-- ====================== -->
                            <ul class="list-child">
                                <li><a href="chat.html">Chat</a></li>
                                <li class="submenu relative list-parent">

                                    <a href="javascript:;"><span> Calls</span>
                                        <span class="absolute right-[10px] chev"><span class="relative material-icons text-lg menu-arrow transition-all ease-in-out duration-[0.2s]">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </span></span></a>
                                    <ul>

                                        <!-- ====================== -->
                                        <li><a href="voice-call.html">Voice Call</a></li>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="outgoing-call.html">Outgoing Call</a></li>
                                        <li><a href="incoming-call.html">Incoming Call</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="inbox.html">Email</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <!-- sidebar end -->









        <div class="page-wrapper flex-1 relative left-0 pt-[60px] media-min-w-md:ml-[230px]" style="min-height: 301px;">
            <div class="p-[15px] sm:p-[30px]">


                <div class="page-header mb-[1.875rem]">

                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-pageTitle dark:text-swapText text-lg sm:text-2xl md:text-[26px] font-medium sm:mb-[5px] leading-[1.2]">Welcome Admin!</h3>
                            <ul class="hidden text-[14px] md:text-base font-medium sm:flex flex-wrap">
                                <li class="text-[#6c757d]">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-[30px]">

                    <div class="shadow-header border border-cardBorder dark:border-swapBorderPrimary relative flex flex-col bg-white dark:bg-swapBg rounded break-words">
                        <div class="p-4">
                            <span class="bg-dashboardIconOverlay rounded-full w-[60px] h-[60px] text-primary text-3xl float-left flex items-center justify-center">
                                <i class="fa fa-cubes"></i>
                            </span>
                            <div class="text-right">
                                <h3 class="font-semibold mb-2 text-3xl dark:text-swapText">112</h3>
                                <span class="text-base dark:text-swapText">Projects</span>
                            </div>
                        </div>
                    </div>


                    <div class="shadow-header border border-cardBorder dark:border-swapBorderPrimary relative flex flex-col bg-white dark:bg-swapBg rounded break-words">
                        <div class="p-4">
                            <span class="bg-dashboardIconOverlay rounded-full w-[60px] h-[60px] text-primary text-3xl float-left flex items-center justify-center">
                                <i class="fa fa-usd"></i>
                            </span>
                            <div class="text-right">
                                <h3 class="font-semibold mb-2 text-3xl dark:text-swapText">44</h3>
                                <span class="text-base dark:text-swapText">Clients</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!--  -->

        </div>

</html>