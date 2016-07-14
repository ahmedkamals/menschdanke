<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ShopsRepository;

class ShopsController extends Controller
{
    /**
     * The shops repository.
     */
    protected $shopsRepository;

    protected $httpClient;

    public function __construct(ShopsRepository $shopsRepo, \GuzzleHttp\Client $httpClient)
    {
        $this->shopsRepository = $shopsRepo;
        $this->httpClient = $httpClient;
    }

    /**
     * List all shops.
     *
     * @return Response
     */
    public function list()
    {
        $res = $this->httpClient->get('http://menschdanke.de/api/v1/shops');
        $shops = [];

        if (200 === $res->getStatusCode()) {
          $body = $res->getBody();

          if(!empty($body)) {
            $shops = json_decode($body);
          }
        }

        return view('shops.list', ['shops' => $shops]);
    }

    public function view($id)
    {
      $res = $this->httpClient->get('http://menschdanke.de/api/v1/shops/' . $id);
      $shop = null;

      if (200 === $res->getStatusCode()) {
        $body = $res->getBody();

        if(!empty($body)) {
          $shop = json_decode($body);
        }
      }

      return view('shops.view', ['shop' => $shop]);
    }
}
