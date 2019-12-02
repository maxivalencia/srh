<?php
namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    class HomeController
    {
        /**
         * @return Response
         */
        public function index():Response
        {
            return new Response('Tongasoa');
        }
    }