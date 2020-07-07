<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PostsExport;
use App\Imports\PostsImport;


class PostController extends Controller
{
    public function export()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
    public function import()
    {
        Excel::import(new PostsImport,request()->file('file'));

        return back();
    }
}
