<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class Pagination extends Controller
{
    public function statistics() {
        $donations = Donation::simplePaginate(10);
        return view('statistics', compact('donations'));
    }
}
