<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\OffersRepository;

class OffersController extends Controller
{
    /**
     * The offers repository
     */
    protected $offersRepository;

    public function __construct(OffersRepository $offersRepo)
    {
        $this->offersRepository = $offersRepo;
    }

    /**
     * List all shops.
     *
     * @return Response
     */
    public function list()
    {
        return $this->offersRepository::all()->toJson();
    }


    public function view($id)
    {
        return $this->offersRepository::with('shop')->find($id)->toJson();
    }
}
