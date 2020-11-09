<?php

namespace Masoud5070\ApiRoutes\Http\Controllers;

use Masoud5070\ApiRoutes\Http\Requests\Api\StoreRequest;

class ApiController
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        return response(['message' => 'get successfully']);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return response(['message' => 'created successfully'], 201);
    }
}