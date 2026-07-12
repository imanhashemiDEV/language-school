<?php

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Spatie\Permission\Models\Role;

new #[Layout('admin::layouts.master', ['breadcrumb' => 'لیست نقش ها']), Title('لیست نقش ها')]
class extends Component {

    use WithPagination;

    public $search;
    #[Validate('required')]
    public $name;
    public $edit_name;
    public $editRole=null;

    public function mount(): void
    {

        if (session()->has('Success')) {
            LivewireAlert::title(session('Success'))
                ->success()
                ->show();
        }
    }

    public function searchRole()
    {
        $this->roles = Role::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);
    }

    public function createRole(): void
    {
        $this->validate();
        Role::create([
            'name' => $this->name
        ]);
        $this->reset('name');
    }

    public function setEditRole($id,$name)
    {
        $this->edit_name = $name;
        $this->editRole=$id;
    }

    public function updateRole()
    {
        $this->validate([
            'edit_name'=>'required'
        ]);
        $role = Role::query()->find($this->editRole);
        $role->update([
            'name'=>$this->edit_name
        ]);

        $this->editRole=null;
    }

    #[Computed()]
    public function roles(): Paginator
    {
        return Role::query()->latest()->paginate(10);
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
                            نقش ها
                        </div>

                    </div>
                    <div class="mt-3.5 flex flex-col gap-8">

                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <i data-tw-merge="" data-lucide="search"
                                           class="absolute inset-y-0 rtl:right-0 ltr:left-0 z-10 my-auto rtl:mr-3 ltr:ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                        <input wire:model="search" @keyup.enter="$wire.searchRole" data-tw-merge=""
                                               type="text" placeholder="جستجوی نقش..."
                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border rtl:file:ml-4 ltr:file:mr-4 file:py-2 file:px-4 rtl:file:rounded-r-md ltr:file:rounded-l-md file:border-0 rtl:file:border-l-[1px] ltr:file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none rtl:group-[.input-group]:[&:not(:first-child)]:border-r-transparent ltr:group-[.input-group]:[&:not(:first-child)]:border-l-transparent rtl:group-[.input-group]:first:rounded-r ltr:group-[.input-group]:first:rounded-l rtl:group-[.input-group]:last:rounded-l ltr:group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] rtl:pr-9 ltr:pl-9 sm:w-64">
                                    </div>
                                </div>
                            </div>
                            @include('admin.layouts.waiting')
                                <form wire:submit="createRole" class="box box--stacked flex flex-col m-2">
                                    <div class="p-7">
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 rtl:sm:ml-5 ltr:sm:mr-5 rtl:sm:text-left ltr:sm:text-right rtl:xl:ml-14 ltr:xl:mr-14 xl:w-60">
                                                <div class="rtl:text-right ltr:text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">عنوان نقش</div>
                                                        <div
                                                            class="rtl:mr-2.5 ltr:ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            ضروری
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                              عنوان نقش را وارد کنید
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex gap-2 xl:mt-0">
                                                <div class="flex flex-col flex-1 items-center">
                                                    <input wire:model="name" data-tw-merge="" type="text"
                                                           class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent
                                                   [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed
                                                    [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent
                                                    transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm
                                                    rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20
                                                    focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent
                                                    dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80
                                                    [&[type='file']]:border rtl:file:ml-4 ltr:file:mr-4 file:py-2 file:px-4 rtl:file:rounded-r-md
                                                    ltr:file:rounded-l-md file:border-0 rtl:file:border-l-[1px] ltr:file:border-r-[1px]
                                                    file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100
                                                    file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none
                                                    rtl:group-[.input-group]:[&:not(:first-child)]:border-r-transparent
                                                    ltr:group-[.input-group]:[&:not(:first-child)]:border-l-transparent rtl:group-[.input-group]:first:rounded-r
                                                    ltr:group-[.input-group]:first:rounded-l rtl:group-[.input-group]:last:rounded-l
                                                    ltr:group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px
                                                    last:rounded-t-none focus:z-10 rtl:first:md:rounded-l-none ltr:first:md:rounded-r-none rtl:first:md:rounded-br-md
                                                    ltr:first:md:rounded-bl-md rtl:last:md:-mr-px ltr:last:md:-ml-px last:md:mt-0 rtl:last:md:rounded-r-none
                                                    ltr:last:md:rounded-l-none rtl:last:md:rounded-tl-md ltr:last:md:rounded-tr-md
                                                    [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none
                                                    rtl:[&:not(:first-child):not(:last-child)]:md:-mr-px ltr:[&:not(:first-child):not(:last-child)]:md:-ml-px
                                                    [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    @error('name')
                                                    <span class="block text-danger my-2">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <button type="submit" data-tw-merge=""
                                                        class="transition duration-200 bg-rose-500 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto">
                                                    <i data-tw-merge="" data-lucide="pocket"
                                                       class="rtl:-mr-2 ltr:-ml-2 rtl:ml-2 ltr:mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    ثبت
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            <div class="overflow-auto xl:overflow-visible mt-2">
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
                                            ردیف
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            عنوان نقش
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            تاریخ ثبت
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            عملیات
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($this->roles as $index =>$role)
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <input data-tw-merge="" type="checkbox"
                                                       class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="">
                                                    {{$this->roles->firstItem() + $index }}
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                @if($editRole==$role->id)
                                                    <div class="flex flex-col flex-1 items-center">
                                                        <input wire:model="edit_name" data-tw-merge="" type="text"
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent
                                                   [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed
                                                    [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent
                                                    transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm
                                                    rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20
                                                    focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent
                                                    dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80
                                                    [&[type='file']]:border rtl:file:ml-4 ltr:file:mr-4 file:py-2 file:px-4 rtl:file:rounded-r-md
                                                    ltr:file:rounded-l-md file:border-0 rtl:file:border-l-[1px] ltr:file:border-r-[1px]
                                                    file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100
                                                    file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none
                                                    rtl:group-[.input-group]:[&:not(:first-child)]:border-r-transparent
                                                    ltr:group-[.input-group]:[&:not(:first-child)]:border-l-transparent rtl:group-[.input-group]:first:rounded-r
                                                    ltr:group-[.input-group]:first:rounded-l rtl:group-[.input-group]:last:rounded-l
                                                    ltr:group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px
                                                    last:rounded-t-none focus:z-10 rtl:first:md:rounded-l-none ltr:first:md:rounded-r-none rtl:first:md:rounded-br-md
                                                    ltr:first:md:rounded-bl-md rtl:last:md:-mr-px ltr:last:md:-ml-px last:md:mt-0 rtl:last:md:rounded-r-none
                                                    ltr:last:md:rounded-l-none rtl:last:md:rounded-tl-md ltr:last:md:rounded-tr-md
                                                    [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none
                                                    rtl:[&:not(:first-child):not(:last-child)]:md:-mr-px ltr:[&:not(:first-child):not(:last-child)]:md:-ml-px
                                                    [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                        @error('edit_name')
                                                        <span class="block text-danger my-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                @else
                                                    <div class="w-40">
                                                        {{$role->name}}
                                                    </div>
                                                @endif

                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{ \Hekmatinasser\Verta\Facades\Verta::instance($role->created_at)->formatJalaliDate() }}
                                                </div>
                                            </td>

                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                @if($editRole==$role->id)
                                                    <x-fas-save wire:click="updateRole"  class="text-success h-6 w-6"/>
                                                @else
                                                    <x-fas-edit wire:click="setEditRole('{{$role->id}}', '{{$role->name}}')" class="text-info h-6 w-6"/>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div
                                class="flex-reverse flex flex-col-reverse flex-wrap items-center justify-center gap-y-2 p-5 sm:flex-row">
                                {{ $this->roles->links('admin.layouts.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
