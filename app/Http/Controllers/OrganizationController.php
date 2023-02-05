<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrganizationController extends Controller
{
    public array $data;

    public function __construct()
    {
        $this->data = [
            "types" => User::$type_list,
            "regions" =>  User::$region_list
        ];
    }

    public function search(Request $request): View
    {
        $data = $this->data;

        return view("search", $data);
    }

    public function results(Request $request): View
    {
        $data = $this->data;

        $keywords = trim($request->input("keywords", ""));
        $regions = $request->input("regions", []);
        $types = $request->input("types", []);

        $users = User::where("id", "!=", Auth::user()->id);
        if (count($types) > 0) {
            $users = $users->whereIn("type", $types);
        }

        if (count($regions) > 0) {
            $users = $users->whereIn("region", $regions);
        }

        if (!empty($keywords)) {
            $users = $users->where("name", "LIKE", "%$keywords%")
                ->orWhere("description", "LIKE", "%$keywords%");
        }

        $data['results'] = $users->get();
        $data['input'] = [
            "keywords" => $keywords,
            "regions" => $regions,
            "types" => $types,
        ];
        return view("search", $data);
    }

    public function show(Request $request, int $id): View
    {
        $user = User::find($id);
        if($user != null) {
            return view("detail", ["user" => $user]);
        }

        return abort(404);
    }
}
