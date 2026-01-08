<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('welcome');
});

// Resume routes (Siwakorn Kleebmek)
Route::get('/resume/{lang?}', [ResumeController::class, 'show'])->name('resume.show');
Route::get('/resume/{lang}/download/html', [ResumeController::class, 'downloadHtml'])->name('resume.download.html');
Route::get('/resume/{lang}/download/md', [ResumeController::class, 'downloadMarkdown'])->name('resume.download.markdown');
Route::get('/resume/{lang}/download/pdf', [ResumeController::class, 'downloadPdf'])->name('resume.download.pdf');
