<?php


namespace App\Services\APIResponse;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait DefaultAPIResponse
{
    /**
     * @param      $data
     * @param  int  $code
     * @param  null  $message
     *
     * @return JsonResponse
     */
    public function apiResponse($data, $code = 200, $message = null): JsonResponse
    {
        return new JsonResponse([
            'code' => $code,
            'message' => Response::$statusTexts[$code],
            'data' => $data,
        ], $code);
    }
}
