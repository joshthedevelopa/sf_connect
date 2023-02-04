<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class SearchController extends Controller
{
    //
    public function search(Request $request) : View {
        $data = [
            "types" => [
                "Donor and Embassy",
                "NGO",
                "Projectcommunities and Schools",
            ],
            "regions" => [
                "Greater Accra",
                "Central",
                "Ashanti",
                "Eastern",
                "Western",
                "Western North",
                "Volta",
                "Upper West",
                "Upper East",
                "North East",
                "Oti",
                "Bono East",
                "Ahafo",
                "Northern",
                "Savannah",
                "Brong Ahafo",
            ]
        ];
        return view("search", $data);
    }
}
