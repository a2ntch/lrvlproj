<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Carbon\Carbon;

class DonationController extends Controller
{
    /**
     * This method returns main page and data from DB with pagination.
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index() {
        $topDonation = Donation::orderByDesc('amount')->first();
        
        return view('statistics', [
            'donations' => Donation::paginate(10),
            'topDonatorAmount' => $topDonation->amount,
            'topDonatorName' => $topDonation->donatorname,
            'lastMonthAmount' => Donation::whereMonth(
                    'date', Carbon::now()->month
                )
                ->sum('amount'),
            'allTimeAmount' => Donation::sum('amount')
        ]);
    }
}
