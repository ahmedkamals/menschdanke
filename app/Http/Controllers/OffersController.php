<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\OffersRepository;

class OffersController extends Controller
{
    /**
     * The offers repository
     */
    protected $offersRepository;

    protected $httpClient;

    public function __construct(OffersRepository $offersRepo, \GuzzleHttp\Client $httpClient)
    {
        $this->offersRepository = $offersRepo;
        $this->httpClient = $httpClient;
    }

    /**
     * List all offers.
     *
     * @return Response
     */
    public function list()
    {
      $res = $this->httpClient->get('http://menschdanke.de/api/v1/offers');
      $offers = [];

      if (200 === $res->getStatusCode()) {
        $body = $res->getBody();

        if(!empty($body)) {
          $offers = json_decode($body);
        }
      }

      return view('offers.list', ['offers' => $offers]);
    }

    public function view($id)
    {
      $res = $this->httpClient->get('http://menschdanke.de/api/v1/offers/' . $id);
      $offer = null;

      if (200 === $res->getStatusCode()) {
        $body = $res->getBody();

        if(!empty($body)) {
          $offer = json_decode($body);
        }
      }

      return view('offers.view', ['offer' => $offer]);
    }
}
