<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class UserController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/users")
     */
    public function index()
    {
        $test = $this->get('doctrine.orm.entity_manager')->getRepository('App:Product')->findAll();

        return $test;
    }
}
