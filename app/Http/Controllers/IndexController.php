<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * Returned users with last review and reviews_count
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $users = User::withCount('reviews')->get();

        $users->load(['review' => function($q) {
            $q->orderBy('id', 'DESC');
        }]);

        return response()->json(['users' => $users]);
    }
}
