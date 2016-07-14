<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\ShopsRepository;

class ShopsController extends Controller
{
    /**
     * The shops repository.
     */
    protected $shopsRepository;

    public function __construct(ShopsRepository $shopsRepo)
    {
        $this->shopsRepository = $shopsRepo;
    }

    /**
     * List all shops.
     *
     * @return Response
     */
    public function list()
    {
        return $this->shopsRepository::all()->toJson();
    }

    public function view($id)
    {
        return $this->shopsRepository::with('offers')->find($id)->toJson();
    }
}
