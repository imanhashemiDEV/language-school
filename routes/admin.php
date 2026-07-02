<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'admin::panel.index')->name("admin.panel.index");
Route::livewire('/users', 'admin::users.list')->name('admin.users.list');
Route::livewire('/create_users', 'admin::users.create')->name('admin.users.create');
Route::livewire('/edit_users', 'admin::users.edit')->name('admin.users.edit');
