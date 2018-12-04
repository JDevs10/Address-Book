<?php
// src/Controller/ContactController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
     * @Route("/contact")
     */
class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact_list")
     */
    public function list()
    {
        $number = random_int(0, 100);

        return $this->render('contact/list.html.twig');
    }
}
