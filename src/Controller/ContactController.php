<?php
// src/Controller/ContactController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Contact;

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
        $repository = $this->getDoctrine()->getRepository(Contact::class);
        $contact = $repository->findAll();

        return $this->render('contact/list.html.twig', array(
            "contact" => $contact
        ));
    }
}
