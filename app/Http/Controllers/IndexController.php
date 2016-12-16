<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::withCount('reviews')->get();

        $users->load(['review' => function($q) {
            $q->orderBy('id', 'DESC');
        }]);

        return response()->json(['users' => $users]);
    }
}
