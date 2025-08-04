<?php

namespace App\Http\Controllers;

use App\Models\CaseRecord;
use App\Models\DepoRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index', ['title' => 'ITTS Services']);
    }

    public function viewDepoCase($uniqueURL){
        $case = DepoRecord::where('unique_url', $uniqueURL)->first();
        if (!$case) {
            abort(404);
        }

        return view('pages.view-depo-case', ['title' => "Case #$case->id", 'case' => $case]);
    }

    public function page($page)
    {
        $views = resource_path() . "/views/pages/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            return view("pages.$page", ['title' => Str::replace('-', ' ', $title)]);
        } else {
            abort(404);
        }
    }

    public function services($page)
    {
        $views = resource_path() . "/views/pages/services/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            return view("pages.services.$page", ['title' => $title]);
        } else {
            abort(404);
        }
    }

    public function massTort($page)
    {
        $views = resource_path() . "/views/pages/services/mass-tort/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            if ($title == 'Cpap-Lawsuit') $title = 'CPAP Lawsuit';
            if ($title == 'Pfas-Lawsuit') $title = 'PFAS Lawsuit';
            return view("pages.services.mass-tort.$page", ['title' => Str::replace('-', ' ', $title)]);
        } else {
            abort(404);
        }
    }

    public function viewCase($uniqueURL)
    {
        $case = CaseRecord::where('unique_url', $uniqueURL)->first();
        if (!$case) {
            abort(404);
        }

        return view('pages.view-case', ['title' => "Case #$case->id", 'case' => $case]);
    }
}
