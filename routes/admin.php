<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'admin::panel.index')->name("admin.panel.index");
Route::livewire('/users', 'admin::users.list')->name('admin.users.list');
