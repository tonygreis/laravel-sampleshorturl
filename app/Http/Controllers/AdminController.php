<?php

namespace App\Http\Controllers;

use App\Http\Resources\Admin\AdminLinkResource;
use App\Models\Link;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function links()
    {
        $links = Link::orderBy('updated_at', 'desc')->get();
        return AdminLinkResource::collection($links);
    }
}
