<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.post.create');
    }
}
