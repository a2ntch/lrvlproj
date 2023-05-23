<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    /**
     * This method returns main page and data from DB with pagination.
     * 
     * @return statisctics.blade.php with data from DB.
     */

    public function index() {
        $donations = Donation::paginate(10);
        return view('statistics', compact('donations'));
    }
}
