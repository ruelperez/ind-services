<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function pages($page)
    {
        $views = resource_path() . "/views/pages/dashboard/admin/$page.blade.php";
        if (file_exists($views)) {

            switch ($page) {
                case 'index':
                    return redirect('dashboard/admin/other-services');
                    // $title = 'Dashboard';
                    break;

                default:
                    $title = ucfirst($page);
                    break;
            }
            return view("pages.dashboard.admin.$page", [
                'title' => $title
            ]);
        } else {
            abort(404);
        }
    }
}
