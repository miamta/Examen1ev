<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuarios;
class DefaultController extends Controller
{

      /**
       * @Route("/default/", name="homepage")
       */
      public function index(Request $request)
      {

        $vipRepository = $this->getDoctrine()->getRepository(vip::class);
        $vip = $vipRepository->findAll();

          return $this->render('default/index.html.twig');

        }


      /**
       * @Route("/frontal/", name="registrarUsuario")
       */
          public function registrarUsuario(Request $request)
          {
            $vipRepository = $this->getDoctrine()->getRepository(vip::class);
            $vip = $vipRepository->findAll();
            
            return $this->render('frontal/nuevaVista.html.twig');
              }


    }
