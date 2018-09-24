<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{
    /**
     * @Route("/login" , name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationutils)
    {

        $errors       = $authenticationutils->getLastAuthenticationError();
        $lastusername = $authenticationutils->getLastUsername();
        return $this->render('@App/login/login.html.twig', array(
            'errors'       => $errors,
            'lastusername' => $lastusername,

            // ...
        ));
    }

    /**
     * @Route("/gus" , name="gus")
     */
    public function gusAction()
    {
        return $this->render('@App/blog/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/logout" , name="logout")
     */
    public function logoutAction()
    {

    }

}
