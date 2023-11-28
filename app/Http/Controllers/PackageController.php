<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index($country = null)
    {
        $packages = package::where('country', $country)->get();

        $desc = "No packages available";

        if ($packages->isNotEmpty()) {
            $desc = $packages->first()->description;
        }

        return view('packagetravel', ['country' => $country, 'packages' => $packages, 'desc' => $desc]);
    }
}
