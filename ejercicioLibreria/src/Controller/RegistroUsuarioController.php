<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistroUsuarioController extends AbstractController
{
    /**
     * @Route("/registro/usuario", name="app_registro_usuario")
     */
    public function index(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $encoderPassword): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $user->setPassword($encoderPassword->hashPassword($user, $form['password']->getData()));
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('registro_usuario/index.html.twig', [
            'formulario' => $form->createView(),
        ]);
    }
}
