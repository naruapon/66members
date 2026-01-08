<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class ResumeController extends Controller
{









































































}    }        ]);            'X-Note' => 'Install barryvdh/laravel-dompdf to enable PDF generation',            'Content-Disposition' => "attachment; filename=\"siwakorn_resume_{$lang}.html\"",            'Content-Type' => 'text/html; charset=utf-8',        return Response::make($html, 200, [        // Fallback: return HTML as attachment with .html extension and a note in header        }            }                // fallback to HTML download            } catch (\Exception $e) {                return $pdf->download("siwakorn_resume_{$lang}.pdf");                $pdf->loadHTML($html);                $pdf = app('dompdf.wrapper');            try {        if (class_exists('Dompdf\Dompdf') && app()->bound('dompdf.wrapper')) {        // If barryvdh/laravel-dompdf is installed, use it        $html = view($view)->render();        }            abort(404);        if (!view()->exists($view)) {        $view = $this->viewName($lang);    {    public function downloadPdf($lang = 'th')    }        ]);            'Content-Disposition' => "attachment; filename=\"siwakorn_resume_{$lang}.md\"",            'Content-Type' => 'text/markdown; charset=utf-8',        return Response::make($body, 200, [        $body = "# {$title}\n\n*(Please customize this Markdown file)*\n";        $title = $lang === 'en' ? 'Resume — Siwakorn Kleebmek' : 'เรซูเม่ — Siwakorn Kleebmek';        // Fallback: generate basic markdown from view text        }            return Response::download($mdPath, basename($mdPath), ['Content-Type' => 'text/markdown']);        if (File::exists($mdPath)) {        $mdPath = public_path("resumes/siwakorn_{$lang}.md");    {    public function downloadMarkdown($lang = 'th')    }        ]);            'Content-Disposition' => "attachment; filename=\"{$filename}\"",            'Content-Type' => 'text/html; charset=utf-8',        return Response::make($html, 200, [        $filename = "siwakorn_resume_{$lang}.html";        $html = view($view)->render();        }            abort(404);        if (!view()->exists($view)) {        $view = $this->viewName($lang);    {    public function downloadHtml($lang = 'th')    }        return view($view);        }            abort(404);        if (!view()->exists($view)) {        $view = $this->viewName($lang);    {    public function show($lang = 'th')    }        return $lang === 'en' ? 'resume_en' : '664259028';    {    protected function viewName($lang)
