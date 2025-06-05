<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/example",
 *     tags={"Test"},
 *     summary="示例 API",
 *     @OA\Response(
 *         response=200,
 *         description="成功回應"
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="請求錯誤"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="伺服器錯誤"
 *     )
 * )
 */
class TestController extends Controller
{
    public function example(Request $request)
    {
        return response()->json(['message' => 'Hello, Swagger!']);
    }
}