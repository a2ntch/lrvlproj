<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\DB;
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

        $chartQuery = DB::table('donations')
                        ->select(DB::raw('sum(amount) as amount, date'))
                        ->groupBy('date')
                        ->orderBy('date')
                        ->get();

        $chartData = [
            ['Date', 'Amount'],
        ];

        foreach ($chartQuery as $data) {
            $chartData[] = [$data->date, (float)$data->amount]; 
        }

        return view('statistics', [
            'donations' => Donation::paginate(10),
            'chartData' => $chartData,
            'topDonatorAmount' => $topDonation->amount,
            'topDonatorName' => $topDonation->donatorname,
            'lastMonthAmount' => Donation::whereMonth(
                    'date', Carbon::now()->month
                )
                ->sum('amount'),
            'allTimeAmount' => Donation::sum('amount'),
        ]);
    }
}
