<?php

namespace App\Helpers;

use Symfony\Component\HttpFoundation\Response;

class ApiHelper {
    public static function success(mixed $data, string $message = '', string $statusCode = Response::HTTP_OK)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }
    // public static function error(mixed $data, string $message = '', string $statusCode = Response::HTTP_OK)
    // {
    //     return response()->json([
    //         'error' => $message,
    //         'data' => $data
    //     ], $statusCode);
    // }
}
