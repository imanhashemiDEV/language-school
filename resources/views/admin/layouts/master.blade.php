<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" dir="rtl"><!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="lGySnvnRREog5OmnfEcNX9WYK2csVwKZ9B7vW5y9">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="تیلوایس admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, تیلوایس Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{url('panel/css/vendors/litepicker.css')}}">
    <link rel="stylesheet" href="{{url('panel/css/vendors/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{url('panel/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{url('panel/css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{url('panel/css/themes/echo.css')}}">
    <link rel="stylesheet" href="{{url('panel/css/app.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body>

<div class="echo group bg-gradient-to-b from-slate-200/70 to-slate-50 background relative min-h-screen before:content-[''] before:h-[370px] before:w-screen before:bg-gradient-to-t before:from-theme-1/80 before:to-theme-2 [&.background--hidden]:before:opacity-0 before:transition-[opacity,height] before:ease-in-out before:duration-300 before:top-0 before:fixed after:content-[''] after:h-[370px] after:w-screen [&.background--hidden]:after:opacity-0 after:transition-[opacity,height] after:ease-in-out after:duration-300 after:top-0 after:fixed after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-13rem] after:bg-no-repeat">
    <div class="h-screen relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
        <div class="side-menu rtl:xl:mr-0 ltr:xl:ml-0 shadow-xl transition-[margin,padding] duration-300 xl:shadow-none fixed top-0 rtl:right-0 ltr:left-0 z-50 group inset-y-0 xl:py-3.5 rtl:xl:pr-3.5 ltr:xl:pl-3.5 after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed rtl:[&.side-menu--mobile-menu-open]:mr-0 ltr:[&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block rtl:-mr-[275px] ltr:-ml-[275px] after:hidden">
            <div class="close-mobile-menu fixed rtl:mr-[275px] ltr:ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                <a class="mt-5 rtl:mr-5 ltr:ml-5" href="">
                    <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                </a>
            </div>
            <!-- side menu -->

            @include('admin.layouts.sidebar')
            <div class="fixed inset-x-0 top-0 mt-3.5 h-[65px] transition-[margin] duration-100 rtl:xl:mr-[275px] ltr:xl:ml-[275px] rtl:group-[.side-menu--collapsed]:xl:mr-[90px] ltr:group-[.side-menu--collapsed]:xl:ml-[90px]">
                <div class="top-bar absolute rtl:right-0 ltr:left-0 rtl:xl:right-3.5 ltr:xl:left-3.5 rtl:left-0 ltr:right-0 h-full mx-5 group before:content-[''] before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
                    <div class="box group-[.top-bar--active]:box container flex h-full w-full items-center border-transparent bg-transparent shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-transparent rtl:group-[.top-bar--active]:bg-gradient-to-l ltr:group-[.top-bar--active]:bg-gradient-to-r group-[.top-bar--active]:from-theme-1 group-[.top-bar--active]:to-theme-2 group-[.top-bar--active]:px-5">
                        <div class="flex items-center gap-1 xl:hidden">
                            <a class="p-2 text-white rounded-full open-mobile-menu hover:bg-white/5" href="">
                                <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                            <a class="p-2 text-white rounded-full hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                        </div>

                        <!-- BEGIN: Breadcrumb -->
                        <nav aria-label="breadcrumb" class="flex flex-1 xl:block">
                            <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                                <li class="relative rtl:mr-5 ltr:ml-5 rtl:pr-0.5 ltr:pl-0.5 before:content-['']">
                                    <a href="{{route('admin.panel.index')}}">صفحه اصلی</a>
                                </li>
                                <li class="relative rtl:mr-5 ltr:ml-5 rtl:pr-0.5 ltr:pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform rtl:before:rotate-[90deg] ltr:before:rotate-[-90deg] before:bg-[length:100%] rtl:before:-mr-[1.125rem] ltr:before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                                    {{$breadcrumb ?? ""}}
                                </li>
                            </ol>
                        </nav>
                        <!-- END: Breadcrumb -->

                        <!-- BEGIN: Search -->
                        <div class="relative justify-center flex-1 hidden xl:flex" data-tw-toggle="modal" data-tw-target="#quick-search">
                            <div class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border border-transparent bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors duration-300 hover:bg-white/[0.15] hover:duration-100">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                                <div class="rtl:mr-2.5 ltr:ml-2.5 rtl:ml-auto ltr:mr-auto">جستجوی سریع...</div>
                                <div>⌘K</div>
                            </div>
                        </div>
                        <div id="quick-search" aria-hidden="true" tabindex="-1" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed rtl:right-0 ltr:left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                            <div class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                                <div class="relative">
                                    <div class="absolute inset-y-0 flex items-center justify-center w-12 rtl:right-0 ltr:left-0">
                                        <i data-tw-merge="" data-lucide="search" class="stroke-[1] w-5 h-5 rtl:-ml-1.5 ltr:-mr-1.5 text-slate-500"></i>
                                    </div>
                                    <input data-tw-merge="" type="text" placeholder="جستجوی سریع..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border rtl:file:ml-4 ltr:file:mr-4 file:py-2 file:px-4 rtl:file:rounded-r-md ltr:file:rounded-l-md file:border-0 rtl:file:border-l-[1px] ltr:file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none rtl:group-[.input-group]:[&:not(:first-child)]:border-r-transparent ltr:group-[.input-group]:[&:not(:first-child)]:border-l-transparent rtl:group-[.input-group]:first:rounded-r ltr:group-[.input-group]:first:rounded-l rtl:group-[.input-group]:last:rounded-l ltr:group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 rtl:pr-12 ltr:pl-12 rtl:pl-14 ltr:pr-14 text-base shadow-lg focus:ring-0">
                                    <div class="absolute inset-y-0 flex items-center rtl:left-0 ltr:right-0 w-14">
                                        <div class="rtl:ml-auto ltr:mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                                            ESC
                                        </div>
                                    </div>
                                </div>
                                <div class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                                    <div class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                                        <i data-tw-merge="" data-lucide="search-x" class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                                        <div class="mt-5 text-xl font-medium">
                                            هیچ نتیجه‌ای یافت نشد
                                        </div>
                                    </div>
                                    <div class="hidden group-[.global-search--show-result]:block">
                                        <div class="px-5 py-4 border-t border-dashed">
                                            <div class="flex items-center">
                                                <div class="text-xs uppercase text-slate-500">
                                                    کاربران
                                                </div>
                                                <a class="text-xs rtl:mr-auto ltr:ml-auto text-slate-500" href="">
                                                    مشاهده همه
                                                </a>
                                            </div>
                                            <div class="mt-3.5 flex flex-col gap-1">
                                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                    <div class="w-6 h-6 overflow-hidden border-2 rounded-full image-fit zoom-in box border-slate-200/70">
                                                        <img src="{{url('panel')}}/images/users/user6-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                                    </div>
                                                    <div class="font-medium truncate">
                                                        جنیفر لارنس
                                                    </div>
                                                    <div class="hidden text-slate-500 sm:block">
                                                        میامی، ایالات متحده
                                                    </div>
                                                </a>
                                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                    <div class="w-6 h-6 overflow-hidden border-2 rounded-full image-fit zoom-in box border-slate-200/70">
                                                        <img src="{{url('panel')}}/images/users/user2-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                                    </div>
                                                    <div class="font-medium truncate">
                                                        مریل استریپ
                                                    </div>
                                                    <div class="hidden text-slate-500 sm:block">
                                                        لس‌آنجلس، آمریکا
                                                    </div>
                                                </a>
                                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                    <div class="w-6 h-6 overflow-hidden border-2 rounded-full image-fit zoom-in box border-slate-200/70">
                                                        <img src="{{url('panel')}}/images/users/user8-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                                    </div>
                                                    <div class="font-medium truncate">
                                                        کیت بلانچت
                                                    </div>
                                                    <div class="hidden text-slate-500 sm:block">
                                                        هیوستون، ایالات متحده
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Search -->
                        <!-- BEGIN: اطلاعیه & کاربر منو -->
                        <div class="flex items-center flex-1">
                            <div class="flex items-center gap-1 rtl:mr-auto ltr:ml-auto">

                                <a class="p-2 text-white rounded-full request-full-screen hover:bg-white/5" href="">
                                    <i data-tw-merge="" data-lucide="expand" class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>

                            </div>
                            <div data-tw-merge="" data-tw-placement="bottom-start" class="relative dropdown rtl:mr-5 ltr:ml-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"><img src="{{url('panel')}}/images/users/user1-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                </button>
                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-56 mt-1">
                                        <a data-tw-toggle="modal" data-tw-target="#switch-account" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="toggle-left" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            تغییر حساب</a>
                                        <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                        </div>
                                        <a href="echo-settings-connected-services.html" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            خدمات متصل</a>
                                        <a href="echo-settings-email-settings.html" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            تنظیمات ایمیل</a>
                                        <a href="echo-settings-security.html" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="lock" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            بازنشانی رمز عبور</a>
                                        <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                        </div>
                                        <a href="echo-settings.html" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            اطلاعات پروفایل</a>
                                        <a href="echo-login.html" class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="power" class="stroke-[1] w-4 h-4 rtl:ml-2 ltr:mr-2"></i>
                                            خروج</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="switch-account" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed rtl:right-0 ltr:left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                            <div data-tw-merge="" class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                <div class="flex items-center justify-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 h-14">
                                    <h2 class="text-base font-medium">تغییر حساب</h2>
                                </div>
                                <div data-tw-merge="" class="p-5 px-2.5 pb-4 pt-3.5">
                                    <div class="flex flex-col gap-1.5">
                                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img src="{{url('panel')}}/images/users/user10-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                <div class="font-medium">جولیا رابرتز</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    julia.roberts@eltheme.ir
                                                </div>
                                            </div>
                                            <div class="relative rtl:mr-auto ltr:ml-auto h-7 w-7">
                                                <input data-tw-merge="" checked="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-0" value="switch-account">
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto text-white transition-all border rounded-full opacity-0 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto transition-all border rounded-full border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img src="{{url('panel')}}/images/users/user6-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                <div class="font-medium">جنیفر لارنس</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    jennifer.lawrence@eltheme.ir
                                                </div>
                                            </div>
                                            <div class="relative rtl:mr-auto ltr:ml-auto h-7 w-7">
                                                <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-1" value="switch-account">
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto text-white transition-all border rounded-full opacity-0 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto transition-all border rounded-full border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img src="{{url('panel')}}/images/users/user8-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                <div class="font-medium">کیت بلانچت</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    cate.blanchett@eltheme.ir
                                                </div>
                                            </div>
                                            <div class="relative rtl:mr-auto ltr:ml-auto h-7 w-7">
                                                <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-2" value="switch-account">
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto text-white transition-all border rounded-full opacity-0 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto transition-all border rounded-full border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img src="{{url('panel')}}/images/users/user7-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                <div class="font-medium">جانی دپ</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    johnny.depp@eltheme.ir
                                                </div>
                                            </div>
                                            <div class="relative rtl:mr-auto ltr:ml-auto h-7 w-7">
                                                <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-3" value="switch-account">
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto text-white transition-all border rounded-full opacity-0 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto transition-all border rounded-full border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img src="{{url('panel')}}/images/users/user1-50x50.jpg" alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                <div class="font-medium">تام هنکس</div>
                                                <div class="mt-0.5 text-xs text-slate-500">
                                                    tom.hanks@eltheme.ir
                                                </div>
                                            </div>
                                            <div class="relative rtl:mr-auto ltr:ml-auto h-7 w-7">
                                                <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-4" value="switch-account">
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto text-white transition-all border rounded-full opacity-0 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center w-6 h-6 m-auto transition-all border rounded-full border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center px-5 py-3 text-center border-t rtl:text-left ltr:text-right border-slate-200/60 dark:border-darkmode-400 h-14"><a class="block -mt-1 text-primary" href="">
                                        ورود به حساب کاربری موجود
                                    </a></div>
                            </div>
                        </div>
                        <!-- END: اطلاعیه & کاربر منو -->
                    </div>
                </div>
            </div>
        </div>
        {{$slot}}
    </div>
</div>
<!-- BEGIN: Vendor JS Assets-->
<script src="{{url('panel/js/vendors/dom.js')}}"></script>
<script src="{{url('panel/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{url('panel/js/vendors/lucide.js')}}"></script>
<script src="{{url('panel/js/vendors/dayjs.js')}}"></script>
<script src="{{url('panel/js/vendors/litepicker.js')}}"></script>
<script src="{{url('panel/js/vendors/tiny-slider.js')}}"></script>
<script src="{{url('panel/js/vendors/popper.js')}}"></script>
<script src="{{url('panel/js/vendors/dropdown.js')}}"></script>
<script src="{{url('panel/js/vendors/tippy.js')}}"></script>
<script src="{{url('panel/js/vendors/simplebar.js')}}"></script>
<script src="{{url('panel/js/vendors/transition.js')}}"></script>
<script src="{{url('panel/js/vendors/chartjs.js')}}"></script>
<script src="{{url('panel/js/vendors/modal.js')}}"></script>
<script src="{{url('panel/js/components/base/theme-color.js')}}"></script>
<script src="{{url('panel/js/components/base/lucide.js')}}"></script>
<script src="{{url('panel/js/components/base/litepicker.js')}}"></script>
<script src="{{url('panel/js/components/base/tiny-slider.js')}}"></script>
<script src="{{url('panel/js/utils/colors.js')}}"></script>
<script src="{{url('panel/js/utils/helper.js')}}"></script>
<script src="{{url('panel/js/components/report-line-chart.js')}}"></script>
<script src="{{url('panel/js/components/report-donut-chart-3.js')}}"></script>
<script src="{{url('panel/js/components/base/tippy.js')}}"></script>
<script src="{{url('panel/js/themes/echo.js')}}"></script>
<script src="{{url('panel/js/components/quick-search.js')}}"></script>
<!-- END: Vendor JS Assets-->
<!-- BEGIN: Pages, layouts, components JS Assets-->
<!-- END: Pages, layouts, components JS Assets-->
</body>
</html>

