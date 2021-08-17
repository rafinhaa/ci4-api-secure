<?php

namespace App\Filters;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Exception;

class JWTAuthenticationFilter implements FilterInterface
{
    use ResponseTrait;

    public function before(RequestInterface $request, $arguments = null){
        $authenticationHeader = $request->getServer('HTTP_AUTHORIZATION');
        $authenticationHeader = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFhQGFhLmNvbS5iciIsImlhdCI6MTYyOTIyMzEwNSwiZXhwIjoxNjI5MjI2NzA1fQ.nF4Fe2D5Rl9PjjgYd2cjhwws7lYsdwul-5nan2-yfaE';
        try {
            helper('jwt');
            $encodedToken = getJWTFromRequest($authenticationHeader);
            validateJWTFromRequest($encodedToken);
            return $request;

        } catch (Exception $e) {
            return Services::response()->setJSON(
                    [
                        'error' => $e->getMessage()
                    ]
                )->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){

    }
}