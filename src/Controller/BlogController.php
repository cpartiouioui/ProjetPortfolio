<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/cv", name="cv")
     */

    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/portfolio", name="Portfolio")
     */

    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/loisirs", name="Loisirs")
     */

    public function loisirs(): Response
    {
        return $this->render('blog/loisirs.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/more", name="more")
     */

    public function more(): Response
    {
        return $this->render('blog/more.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */

    public function contact(): Response
    {
        return $this->render('blog/contact.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
