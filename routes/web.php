<?php

use App\Livewire\Dashboard;
use App\Livewire\Page\Home;
use App\Livewire\Page\News;
use App\Livewire\Page\Category;
use App\Livewire\GameListDashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Components\FormRegistration;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/registration', FormRegistration::class);

Route::get('/news', News::class);
Route::get('/category', Category::class);

Route::get('/dashboard', Dashboard::class);
Route::get('/game', GameListDashboard::class);
