<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * @return 'index' view
     */
    public function index()
    {
        return view('faqs.index');
    }
}
