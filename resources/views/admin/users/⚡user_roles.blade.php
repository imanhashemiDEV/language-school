<?php

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Spatie\Permission\Models\Role;

new #[Layout('admin::layouts.master', ['breadcrumb' => 'لیست کاربران']), Title('لیست کاربران')]
class extends Component {


    public User $user;

    public $selected_role = [];

    public function mount(): void
    {
        $this->selected_role = $this->user->roles->pluck('name')->toArray();
    }

    public function addRoleToUser(): void
    {
        $this->user->syncRoles($this->selected_role);
        session()->flash('message', 'نقش به کاربر الصاق شد');
        $this->redirectRoute('admin.users.list');
    }

    #[Computed()]
    public function roles(): Collection
    {
        return Role::query()->pluck('name', 'id');
    }
};
?>

<div
    class="content transition-[margin,width] duration-100 rtl:xl:pr-3.5 ltr:xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact rtl:xl:mr-[275px] ltr:xl:ml-[275px] mode--light rtl:[&.content--compact]:xl:mr-[91px] ltr:[&.content--compact]:xl:ml-[91px]">
    <div class="px-5 mt-16">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="mt-3.5 flex flex-col gap-8">
                        @include('admin.layouts.waiting')
                        <div class="box box--stacked flex flex-col">
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($this->roles as $key => $value)
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <input wire:model="selected_role" value="{{$value}}" data-tw-merge=""
                                                       type="checkbox" @if($this->user->hasRole($value)) checked @endif
                                                       class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="w-40">
                                                    {{$value}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                <div class="preview relative [&amp;.hide]:overflow-hidden [&amp;.hide]:h-0">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <button wire:click="addRoleToUser"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-success border-success bg-opacity-20 border-opacity-5 text-success dark:border-success dark:border-opacity-20 [&amp;:hover:not(:disabled)]:bg-opacity-10 [&amp;:hover:not(:disabled)]:border-opacity-10 rounded-full w-24">
                                            ثبت
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
