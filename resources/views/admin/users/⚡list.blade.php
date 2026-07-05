<?php

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('admin::layouts.master', ['breadcrumb' => 'لیست کاربران']), Title('لیست کاربران')]
class extends Component {

    use WithPagination;

    public $total_users;

    public function mount(): void
    {
        $this->total_users = User::query()->get();
    }

    #[Computed()]
    public function users(): Paginator
    {
        return User::query()->latest()->take(20)->paginate(10);
    }
};
?>

<div
    class="content transition-[margin,width] duration-100 rtl:xl:pr-3.5 ltr:xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact rtl:xl:mr-[275px] ltr:xl:ml-[275px] mode--light rtl:[&.content--compact]:xl:mr-[91px] ltr:[&.content--compact]:xl:ml-[91px]">
    <div class="px-5 mt-16">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            کاربران
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row rtl:md:mr-auto ltr:md:ml-auto">
                            <a href="{{route('admin.users.create')}}" data-tw-merge=""
                               class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
                                <i data-tw-merge="" data-lucide="pen-line"
                                   class="rtl:ml-2 ltr:mr-2 h-4 w-4 stroke-[1.3]"></i>
                                افزودن کاربری جدید
                            </a>
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-8">
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="grid grid-cols-4 gap-5">
                                <div
                                    class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">کل کاربران</div>
                                    <div class="mt-1.5 text-2xl font-medium">{{$total_users->count()}}</div>
                                    <div
                                        class="absolute inset-y-0 rtl:left-0 ltr:right-0 rtl:ml-5 ltr:mr-5 flex flex-col justify-center">
                                    </div>
                                </div>
                                <div
                                    class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">کاربران فعال</div>
                                    <div
                                        class="mt-1.5 text-2xl font-medium">{{$total_users->where('is_active', true)->count()}}</div>
                                    <div
                                        class="absolute inset-y-0 rtl:left-0 ltr:right-0 rtl:ml-5 ltr:mr-5 flex flex-col justify-center">
                                    </div>
                                </div>
                                <div
                                    class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">دانشجو</div>
                                    <div class="font-mediumm mt-1.5 text-2xl">489,223</div>
                                    <div
                                        class="absolute inset-y-0 rtl:left-0 ltr:right-0 rtl:ml-5 ltr:mr-5 flex flex-col justify-center">
                                    </div>
                                </div>
                                <div
                                    class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">استاد</div>
                                    <div class="font-mediumm mt-1.5 text-2xl">411,259</div>
                                    <div
                                        class="absolute inset-y-0 rtl:left-0 ltr:right-0 rtl:ml-5 ltr:mr-5 flex flex-col justify-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <i data-tw-merge="" data-lucide="search"
                                           class="absolute inset-y-0 rtl:right-0 ltr:left-0 z-10 my-auto rtl:mr-3 ltr:ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                        <input data-tw-merge="" type="text" placeholder="جستجوی کاربران..."
                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border rtl:file:ml-4 ltr:file:mr-4 file:py-2 file:px-4 rtl:file:rounded-r-md ltr:file:rounded-l-md file:border-0 rtl:file:border-l-[1px] ltr:file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none rtl:group-[.input-group]:[&:not(:first-child)]:border-r-transparent ltr:group-[.input-group]:[&:not(:first-child)]:border-l-transparent rtl:group-[.input-group]:first:rounded-r ltr:group-[.input-group]:first:rounded-l rtl:group-[.input-group]:last:rounded-l ltr:group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] rtl:pr-9 ltr:pl-9 sm:w-64">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 rtl:sm:mr-auto ltr:sm:ml-auto sm:flex-row">
                                    <div data-tw-merge="" data-tw-placement="bottom-start" class="dropdown relative">
                                        <button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto">
                                            <i data-tw-merge="" data-lucide="download"
                                               class="rtl:ml-2 ltr:mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            صادر کردن
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                               class="rtl:mr-2 ltr:ml-2 h-4 w-4 stroke-[1.3]"></i></button>
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
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="file-bar-chart"
                                                        class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                    پی‌دی‌اف</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="file-bar-chart"
                                                        class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                    سی‌اس‌وی</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-tw-merge="" data-tw-placement="bottom-start"
                                         class="dropdown relative inline-block">
                                        <button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto">
                                            <i data-tw-merge="" data-lucide="arrow-down-wide-narrow"
                                               class="rtl:ml-2 ltr:mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            فیلتر
                                            <span
                                                class="rtl:mr-2 ltr:ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                                            3
                                                        </span></button>
                                        <div data-transition="" data-selector=".show"
                                             data-enter="transition-all ease-linear duration-150"
                                             data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                             data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                             data-leave="transition-all ease-linear duration-150"
                                             data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                             data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                             class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge=""
                                                 class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                                                <div class="p-2">
                                                    <div>
                                                        <div class="rtl:text-right ltr:text-left text-slate-500">
                                                            سمت
                                                        </div>
                                                        <select data-tw-merge=""
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 rtl:pl-8 ltr:pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="تحلیل‌گر داده">
                                                                تحلیل‌گر داده
                                                            </option>
                                                            <option value="مدیر منابع انسانی">
                                                                مدیر منابع انسانی
                                                            </option>
                                                            <option value="مدیر پروژه">
                                                                مدیر پروژه
                                                            </option>
                                                            <option value="مدیر محصول">
                                                                مدیر محصول
                                                            </option>
                                                            <option value="حسابدار">
                                                                حسابدار
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="rtl:text-right ltr:text-left text-slate-500">
                                                            بخش
                                                        </div>
                                                        <select data-tw-merge=""
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 rtl:pl-8 ltr:pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="تجزیه و تحلیل داده">
                                                                تجزیه و تحلیل داده
                                                            </option>
                                                            <option value="منابع انسانی">
                                                                منابع انسانی
                                                            </option>
                                                            <option value="مدیریت پروژه">
                                                                مدیریت پروژه
                                                            </option>
                                                            <option value="مدیریت محصول">
                                                                مدیریت محصول
                                                            </option>
                                                            <option value="مدیریت حساب کاربری">
                                                                مدیریت حساب کاربری
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <button data-tw-merge=""
                                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rtl:mr-auto ltr:ml-auto w-32">
                                                            بستن
                                                        </button>
                                                        <button data-tw-merge=""
                                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rtl:mr-2 ltr:ml-2 w-32">
                                                            اعمال
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto xl:overflow-visible">
                                <table data-tw-merge=""
                                       class="w-full rtl:text-right ltr:text-left border-b border-slate-200/60">
                                    <thead data-tw-merge="" class="">
                                    <tr data-tw-merge="" class="">
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            <input data-tw-merge="" type="checkbox"
                                                   class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            نام
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            نقش
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-52 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            موبایل
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            وضعیت
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            تاریخ ثبت نام
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            عملیات
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($this->users as $user)
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <input data-tw-merge="" type="checkbox"
                                                       class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <div class="image-fit zoom-in h-9 w-9">
                                                        <img data-placement="top"
                                                             src="{{$user->avatar ? url('images/users/'. $user->avatar) : url('panel/images/users/profile.jpg')}}"
                                                             class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                    </div>
                                                    <div class="rtl:mr-3.5 ltr:ml-3.5">
                                                        <a class="whitespace-nowrap font-medium" href="">
                                                            {{$user->name}}
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            {{$user->email}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="">
                                                    تحلیل‌گر داده
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="w-40">
                                                    {{$user->mobile}}
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-success">
                                                    <i data-tw-merge="" data-lucide="database"
                                                       class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div class="rtl:mr-1.5 ltr:ml-1.5 whitespace-nowrap">
                                                        {{$user->is_active ? "فعال" : "غیرفعال"}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    23 آذر 1400
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-merge="" data-tw-placement="bottom-start"
                                                         class="dropdown relative h-5">
                                                        <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                data-tw-merge="" data-lucide="more-vertical"
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
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="check-square"
                                                                        class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                                    ویرایش</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                                        data-tw-merge="" data-lucide="trash2"
                                                                        class="stroke-[1] rtl:ml-2 ltr:mr-2 h-4 w-4"></i>
                                                                    حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div
                                class="flex-reverse flex flex-col-reverse flex-wrap items-center justify-center gap-y-2 p-5 sm:flex-row">
                                {{ $this->users->links('admin.layouts.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
