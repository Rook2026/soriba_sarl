<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// ── Pages principales ─────────────────────────────────────────────────
Route::get('/',  [FrontendController::class, 'home'])->name('welcome');
Route::get('/home',     [FrontendController::class, 'home'])->name('home');
Route::get('/a-propos', [FrontendController::class, 'about'])->name('about');

// ── Contact ───────────────────────────────────────────────────────────
Route::get('/contact',  [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactSend'])->name('contact.send');

// ── Partenaires ───────────────────────────────────────────────────────
Route::get('/partenaires', [FrontendController::class, 'partners'])->name('partners');

// ── Services ──────────────────────────────────────────────────────────
Route::get('/services',        [FrontendController::class, 'services'])->name('services');
Route::get('/services/{slug}', [FrontendController::class, 'serviceShow'])->name('services.show');

// ── Experts ───────────────────────────────────────────────────────────
Route::get('/experts',         [FrontendController::class, 'experts'])->name('experts.index');
Route::get('/experts/{slug}',  [FrontendController::class, 'expertShow'])->name('experts.show');

// ── Blog ──────────────────────────────────────────────────────────────
Route::get('/blog',      [FrontendController::class, 'blog'])->name('blog.index');
Route::get('/blog/{id}', [FrontendController::class, 'blogShow'])->name('blog.show');

// ── Projets ───────────────────────────────────────────────────────────
Route::get('/projets',      [FrontendController::class, 'projects'])->name('projects.index');
Route::get('/projets/{id}', [FrontendController::class, 'projectShow'])->name('projects.show');

// ── Pages légales ─────────────────────────────────────────────────────
Route::get('/politique-de-confidentialite', [FrontendController::class, 'privacyPolicy'])->name('privacy');
Route::get('/conditions-generales',         [FrontendController::class, 'termsConditions'])->name('terms');

Route::post('/newsletter', [FrontendController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');