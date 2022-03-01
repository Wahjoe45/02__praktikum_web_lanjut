<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\index;
use App\Models\about;
use App\Models\articles;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return '2041720215_Arya Wahjoe Setiawan_TI-2D';
    }

    public function articles()
    {
        return 'Halaman Artikel Dengan ID';

    }
}
