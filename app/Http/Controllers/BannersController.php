<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function create(Request $request)
    {
        return Banner::paginate(2)->toArray();
    }
}
