<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function index()
    {
        // Retrieve insurance offers for the authenticated user
        $insuranceOffers = Insurance::where('user_id', Auth::id())->get();

        // Retrieve expiring insurance offers (within 14 days)
        $expiringInsuranceOffers = Insurance::where('user_id', Auth::id())
            ->whereDate('expiry_date', '<=', Carbon::now()->addDays(14))->get();

        // Return the insurance offers to the view
        return view('insurance.index', [
            'insuranceOffers' => $insuranceOffers,
            'expiringInsuranceOffers' => $expiringInsuranceOffers,
        ]);
    }
    public function createInsuranceOffer(Request $request)
    {
        // Validation logic for insurance offer creation
        // ...

        // Create a new insurance offer
        $insurance = Insurance::create([
            'user_id' => Auth::id(), // Assumes user is authenticated
            'offer_data' => $request->input('offer_data'),
            'expiry_date' => $request->input('expiry'),
        ]);

        // Redirect or return response as needed
        // ...
        $insuranceOffers = Insurance::where('user_id', Auth::id())->get();

        // Retrieve expiring insurance offers (within 14 days)
        $expiringInsuranceOffers = Insurance::where('user_id', Auth::id())
            ->whereDate('expiry_date', '<=', Carbon::now()->addDays(14))->get();

        // Return the insurance offers to the view
        return view('insurance.index', [
            'insuranceOffers' => $insuranceOffers,
            'expiringInsuranceOffers' => $expiringInsuranceOffers,
        ]);
    }

    public function expiring()
    {
        // Retrieve expiring insurance offers (within 14 days)
        $expiringInsuranceOffers = Insurance::where('user_id', Auth::id())
            ->whereDate('expiry_date', '<=', Carbon::now()->addDays(14))->get();

        // Return the expiring insurance offers to the view
        return view('insurance.expiring', [
            'expiringInsuranceOffers' => $expiringInsuranceOffers,
        ]);
    }

    public function getInsuranceOffers()
    {
        // Retrieve insurance offers for the authenticated user
        $insuranceOffers = Insurance::where('user_id', Auth::id())->get();

        // Return insurance offers to the view or as API response as needed
        // ...
    }
}
