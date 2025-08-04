<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');

  // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('features', \App\Livewire\Admin\Features\Index::class)->name('features');
        Route::get('services', \App\Livewire\Admin\Services\Index::class)->name('services');
        Route::get('about', \App\Livewire\Admin\About\Index::class)->name('about');
        Route::get('testimonials', \App\Livewire\Admin\Testimonials\Index::class)->name('testimonials');
        Route::get('faq', \App\Livewire\Admin\Faq\Index::class)->name('faq');
        Route::get('contact', \App\Livewire\Admin\Contact\Index::class)->name('contact');
        Route::get('how-it-works', \App\Livewire\Admin\HowItWorks\Index::class)->name('how-it-works');
        Route::get('hero', \App\Livewire\Admin\Hero\Index::class)->name('hero');
        Route::get('pricing', \App\Livewire\Admin\Pricing\Index::class)->name('pricing');
        Route::get('stats', \App\Livewire\Admin\Stats\Index::class)->name('stats');
    });
});

require __DIR__ . '/auth.php';
