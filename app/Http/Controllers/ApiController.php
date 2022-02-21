<?php
namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class ApiController {

    /**
     * Error response
     *
     * @param array $messages
     * @param int $responseCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error(array $messages, int $responseCode = 400) {
        return response()->json([
            'messages' => $messages
        ], $responseCode);
    }

    /**
     * Success reponse
     *
     * @param array|Collection $data
     * @param int $responseCode
     *  @return \Illuminate\Http\JsonResponse
     */
    protected function success(array|Collection $data, int $responseCode = 200) {
        return response()->json([
            'items' => $data
        ], $responseCode);
    }
}
