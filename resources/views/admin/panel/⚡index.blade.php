<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('admin::layouts.master'), Title('پنل مدیریت')]
class extends Component {
    //
};
?>

<div
    class="content transition-[margin,width] duration-100 rtl:xl:pr-3.5 ltr:xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact rtl:xl:mr-[275px] ltr:xl:ml-[275px] mode--light rtl:[&.content--compact]:xl:mr-[91px] ltr:[&.content--compact]:xl:ml-[91px]">
    <div class="px-5 mt-16">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">

                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="font-medium text-white">بینش‌های عملکرد</div>

                    </div>
                    <div class="-mx-2.5 mt-3.5">
                        <div data-config="performance-insight-slider-config" class="tiny-slider">
                            <div class="px-2.5 pb-3">
                                <div class="relative p-5 box box--stacked">
                                    <div class="flex items-center">
                                        <div
                                            class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                            <i data-tw-merge="" data-lucide="database"
                                               class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="flex rtl:mr-auto ltr:ml-auto">
                                            <div class="w-8 h-8 image-fit zoom-in">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product8-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product3-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product3-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">برجسته‌های بازاریابی</div>
                                        <div class="mt-0.5 text-slate-500">
                                            کمپین‌های اخیر
                                        </div>
                                    </div>
                                    <a class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                       href="">
                                        کاوش در کمپین‌ها
                                        <i data-tw-merge="" data-lucide="arrow-right"
                                           class="stroke-[1] rtl:mr-1.5 ltr:ml-1.5 h-4 w-4 rtl:rotate-180"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3">
                                <div class="relative p-5 box box--stacked">
                                    <div class="flex items-center">
                                        <div
                                            class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="inbox"
                                               class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="flex rtl:mr-auto ltr:ml-auto">
                                            <div class="w-8 h-8 image-fit zoom-in">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product10-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product9-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product7-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">هشدارهای موجودی کم</div>
                                        <div class="mt-0.5 text-slate-500">
                                            اقلام در حال اتمام است
                                        </div>
                                    </div>
                                    <a class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                       href="">
                                        مشاهده موجودی
                                        <i data-tw-merge="" data-lucide="arrow-right"
                                           class="stroke-[1] rtl:mr-1.5 ltr:ml-1.5 h-4 w-4 rtl:rotate-180"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3">
                                <div class="relative p-5 box box--stacked">
                                    <div class="flex items-center">
                                        <div
                                            class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="laptop"
                                               class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="flex rtl:mr-auto ltr:ml-auto">
                                            <div class="w-8 h-8 image-fit zoom-in">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product10-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product7-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product3-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">بالا 5 دسته‌بندی‌ها</div>
                                        <div class="mt-0.5 text-slate-500">
                                            دسته‌های محبوب
                                        </div>
                                    </div>
                                    <a class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                       href="">
                                        مرور دسته‌بندی‌ها
                                        <i data-tw-merge="" data-lucide="arrow-right"
                                           class="stroke-[1] rtl:mr-1.5 ltr:ml-1.5 h-4 w-4 rtl:rotate-180"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3">
                                <div class="relative p-5 box box--stacked">
                                    <div class="flex items-center">
                                        <div
                                            class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                            <i data-tw-merge="" data-lucide="fingerprint"
                                               class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="flex rtl:mr-auto ltr:ml-auto">
                                            <div class="w-8 h-8 image-fit zoom-in">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product8-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product4-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product3-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">محبوبیت مشتریان</div>
                                        <div class="mt-0.5 text-slate-500">
                                            مشتری ماه
                                        </div>
                                    </div>
                                    <a class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                       href="">
                                        مرور محصولات
                                        <i data-tw-merge="" data-lucide="arrow-right"
                                           class="stroke-[1] rtl:mr-1.5 ltr:ml-1.5 h-4 w-4 rtl:rotate-180"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3">
                                <div class="relative p-5 box box--stacked">
                                    <div class="flex items-center">
                                        <div
                                            class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="zap"
                                               class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="flex rtl:mr-auto ltr:ml-auto">
                                            <div class="w-8 h-8 image-fit zoom-in">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product9-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product1-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                            <div class="w-8 h-8 image-fit zoom-in rtl:-mr-3 ltr:-ml-3">
                                                <img
                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                    src="dist/images/products/product3-400x400.jpg"
                                                    alt="تیل وایز - قالب داشبورد مدیریتی">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">بالا 10 محصولات</div>
                                        <div class="mt-0.5 text-slate-500">
                                            محصولات ویژه
                                        </div>
                                    </div>
                                    <a class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                       href="">
                                        مرور محصولات
                                        <i data-tw-merge="" data-lucide="arrow-right"
                                           class="stroke-[1] rtl:mr-1.5 ltr:ml-1.5 h-4 w-4 rtl:rotate-180"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">سفارش‌های اخیر</div>

                    </div>
                    <div class="mt-2 overflow-auto lg:overflow-visible">
                        <table data-tw-merge=""
                               class="w-full rtl:text-right ltr:text-left border-separate border-spacing-y-[10px]">
                            <tbody>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="laptop"
                                           class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="rtl:mr-3.5 ltr:ml-3.5">
                                            <a class="font-medium whitespace-nowrap" href="">
                                                IVR/20240301/II/II/8223863079
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                الکترونیک
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        نام مشتری
                                    </div>
                                    <a class="flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="external-link"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            آنجلینا جولی
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        اقلام سفارش داده
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <img data-placement="top" title="بلندگوی بلوتوث با تقویت بیس"
                                                 src="dist/images/products/product10-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="قوری قهوه‌ساز 8 فنجانی"
                                                 src="dist/images/products/product4-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="تلویزیون هوشمند 4K Ultra HD"
                                                 src="dist/images/products/product1-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        وضعیت
                                    </div>
                                    <div class="flex items-center text-primary">
                                        <i data-tw-merge="" data-lucide="arrow-left-square"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            برگشتی
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        تاریخ
                                    </div>
                                    <div class="whitespace-nowrap">سه‌شنبه آذر ۱۴۰۲0</div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-start"
                                             class="relative h-5 dropdown">
                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="w-5 h-5 cursor-pointer text-slate-500"><i data-tw-merge=""
                                                                                                     data-lucide="more-vertical"
                                                                                                     class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show"
                                                 data-enter="transition-all ease-linear duration-150"
                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave="transition-all ease-linear duration-150"
                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                     class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="wallet-cards"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        مشاهده جزئیات</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-signature"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        ویرایش سفارش</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="printer"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        چاپ فاکتور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="shirt"
                                           class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="rtl:mr-3.5 ltr:ml-3.5">
                                            <a class="font-medium whitespace-nowrap" href="">
                                                IVR/20240301/IV/IV/6550686717
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                لباس‌ها
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        نام مشتری
                                    </div>
                                    <a class="flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="external-link"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            جانی دپ
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        اقلام سفارش داده
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <img data-placement="top" title="بلندگوی بلوتوث با تقویت بیس"
                                                 src="dist/images/products/product1-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="تلویزیون هوشمند 4K Ultra HD"
                                                 src="dist/images/products/product4-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="قوری قهوه‌ساز 8 فنجانی"
                                                 src="dist/images/products/product6-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        وضعیت
                                    </div>
                                    <div class="flex items-center text-success">
                                        <i data-tw-merge="" data-lucide="package-check"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            تحویل شده
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        تاریخ
                                    </div>
                                    <div class="whitespace-nowrap">جمعه فروردین ۱۴۰۳</div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-start"
                                             class="relative h-5 dropdown">
                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="w-5 h-5 cursor-pointer text-slate-500"><i data-tw-merge=""
                                                                                                     data-lucide="more-vertical"
                                                                                                     class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show"
                                                 data-enter="transition-all ease-linear duration-150"
                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave="transition-all ease-linear duration-150"
                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                     class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="wallet-cards"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        مشاهده جزئیات</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-signature"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        ویرایش سفارش</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="printer"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        چاپ فاکتور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="shirt"
                                           class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="rtl:mr-3.5 ltr:ml-3.5">
                                            <a class="font-medium whitespace-nowrap" href="">
                                                IVR/20240301/VIII/IX/2482080398
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                لباس‌ها
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        نام مشتری
                                    </div>
                                    <a class="flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="external-link"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            جولیا رابرتز
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        اقلام سفارش داده
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <img data-placement="top" title="دوربین حرفه‌ای دیجیتال"
                                                 src="dist/images/products/product8-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="دوربین امنیتی خانه هوشمند"
                                                 src="dist/images/products/product10-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="پایه شارژر گوشی هوشمند"
                                                 src="dist/images/products/product3-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        وضعیت
                                    </div>
                                    <div class="flex items-center text-primary">
                                        <i data-tw-merge="" data-lucide="file-x2" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            ناموفق
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        تاریخ
                                    </div>
                                    <div class="whitespace-nowrap">یکشنبه، اردیبهشت ۱۴۰۳</div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-start"
                                             class="relative h-5 dropdown">
                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="w-5 h-5 cursor-pointer text-slate-500"><i data-tw-merge=""
                                                                                                     data-lucide="more-vertical"
                                                                                                     class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show"
                                                 data-enter="transition-all ease-linear duration-150"
                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave="transition-all ease-linear duration-150"
                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                     class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="wallet-cards"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        مشاهده جزئیات</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-signature"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        ویرایش سفارش</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="printer"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        چاپ فاکتور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="venetian-mask"
                                           class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="rtl:mr-3.5 ltr:ml-3.5">
                                            <a class="font-medium whitespace-nowrap" href="">
                                                IVR/20240301/VI/III/6818244538
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                زیبایی و مراقبت شخصی
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        نام مشتری
                                    </div>
                                    <a class="flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="external-link"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            تام هنکس
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        اقلام سفارش داده
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <img data-placement="top" title="هدفون بی‌سیم با میکروفون"
                                                 src="dist/images/products/product5-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="هدفون‌های بی‌سیم با قابلیت لغو نویز"
                                                 src="dist/images/products/product10-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="ماوس بازی بی‌سیم"
                                                 src="dist/images/products/product2-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        وضعیت
                                    </div>
                                    <div class="flex items-center text-primary">
                                        <i data-tw-merge="" data-lucide="clock4" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            در حال پردازش
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        تاریخ
                                    </div>
                                    <div class="whitespace-nowrap">شنبه فروردین ۱۴۰۳</div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-start"
                                             class="relative h-5 dropdown">
                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="w-5 h-5 cursor-pointer text-slate-500"><i data-tw-merge=""
                                                                                                     data-lucide="more-vertical"
                                                                                                     class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show"
                                                 data-enter="transition-all ease-linear duration-150"
                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave="transition-all ease-linear duration-150"
                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                     class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="wallet-cards"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        مشاهده جزئیات</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-signature"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        ویرایش سفارش</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="printer"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        چاپ فاکتور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="book"
                                           class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="rtl:mr-3.5 ltr:ml-3.5">
                                            <a class="font-medium whitespace-nowrap" href="">
                                                IVR/20240301/IV/IX/2130422739
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                کتاب‌ها
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        نام مشتری
                                    </div>
                                    <a class="flex items-center text-primary" href="">
                                        <i data-tw-merge="" data-lucide="external-link"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            لئوناردو دی‌کاپریو
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        اقلام سفارش داده
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <img data-placement="top" title="دوربین امنیتی خانه هوشمند"
                                                 src="dist/images/products/product7-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="بلندگوی بلوتوث با تقویت بیس"
                                                 src="dist/images/products/product9-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                        <div class="image-fit zoom-in rtl:-mr-1.5 ltr:-ml-1.5 h-5 w-5">
                                            <img data-placement="top" title="قوری قهوه‌ساز 8 فنجانی"
                                                 src="dist/images/products/product6-400x400.jpg"
                                                 alt="تیل وایز - قالب داشبورد مدیریتی"
                                                 class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        وضعیت
                                    </div>
                                    <div class="flex items-center text-success">
                                        <i data-tw-merge="" data-lucide="package-check"
                                           class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                            تحویل شده
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        تاریخ
                                    </div>
                                    <div class="whitespace-nowrap">یکشنبه فروردین ۱۴۰۳</div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] rtl:first:rounded-r-[0.6rem] ltr:first:rounded-l-[0.6rem] rtl:first:border-r ltr:first:border-l rtl:last:rounded-l-[0.6rem] ltr:last:rounded-r-[0.6rem] rtl:last:border-l ltr:last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-start"
                                             class="relative h-5 dropdown">
                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="w-5 h-5 cursor-pointer text-slate-500"><i data-tw-merge=""
                                                                                                     data-lucide="more-vertical"
                                                                                                     class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show"
                                                 data-enter="transition-all ease-linear duration-150"
                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave="transition-all ease-linear duration-150"
                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                 class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                     class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="wallet-cards"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        مشاهده جزئیات</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-signature"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        ویرایش سفارش</a>
                                                    <a class="flex items-center p-2 transition duration-300 ease-in-out rounded-md cursor-pointer hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="printer"
                                                            class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                        چاپ فاکتور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col-reverse flex-wrap items-center mt-3 flex-reverse gap-y-2 sm:flex-row">
                        <nav class="flex-1 w-full rtl:ml-auto ltr:mr-auto sm:w-auto">
                            <ul class="flex w-full rtl:ml-0 ltr:mr-0 rtl:sm:ml-auto ltr:sm:mr-auto sm:w-auto">
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                            data-tw-merge="" data-lucide="chevrons-left"
                                            class="stroke-[1] h-4 w-4 rtl:rotate-180"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                            data-tw-merge="" data-lucide="chevron-left"
                                            class="stroke-[1] h-4 w-4 rtl:rotate-180"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                            data-tw-merge="" data-lucide="chevron-right"
                                            class="stroke-[1] h-4 w-4 rtl:rotate-180"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge=""
                                       class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 rtl:sm:ml-2 ltr:sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                            data-tw-merge="" data-lucide="chevrons-right"
                                            class="stroke-[1] h-4 w-4 rtl:rotate-180"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <select data-tw-merge=""
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 rtl:pl-8 ltr:pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
