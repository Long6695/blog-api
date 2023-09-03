<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;

class LikeController extends Controller
{
    public function like(LikeRequest $request)
    {
        $likeable = $request->likeable();
        $request->user()->like($likeable);

        return response()->json([
            'likes' => $request->likeable()->likes()->count(),
        ]);
    }

    public function unlike(UnlikeRequest $request)
    {
        $likeable = $request->likeable();
        $request->user()->unlike($likeable);

        return response()->json([
            'likes' => $request->likeable()->likes()->count(),
        ]);
    }
}
