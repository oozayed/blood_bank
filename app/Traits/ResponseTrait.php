<?php

namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

trait ResponseTrait
{

    public function success($message): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => null,
            'is_auth' => true,
            'errors' => null

        ]);
    }

    public function error($message, $is_auth = true): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'is_auth' => $is_auth,
            'errors' => null

        ]);
    }

    public function data($message, $data): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'is_auth' => true,
            'errors' => null
        ]);
    }

    protected function failedValidation(Validator $validator): void
    {
        if (str_contains(Request::url(), 'api')) {
            $errors = $validator->errors();
            throw new HttpResponseException(response()->json([
                'status' => false,
                'message' => 'The given data was invalid',
                'data' => null,
                'is_auth' => true,
                'errors' => $errors,
            ], Response::HTTP_UNPROCESSABLE_ENTITY));
        } else {
            Parent::failedValidation($validator);
        }
    }
}
