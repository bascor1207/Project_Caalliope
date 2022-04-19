<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    /**
     * @Route("/auth/register", name="register", methods={"POST})
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $password = $request->get('password');
        $pseudo = $request->get('pseudo');

        $user = new User();
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setPseudo($pseudo);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->json([
            'user' => $user->getPseudo()
        ]);
    }

    /**
     * @Route("/auth/login", name="login", methods={"POST"})
     */
    public function login(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $encoder)
    {
        $user = $userRepository->findOneBy([
            'pseudo'=>$request->get('pseudo'),
        ]);

        if (!$user || !$encoder->isPasswordValid($user, $request->get('password')))
        {
            return $this->json([
                'message' => 'pseudo or password is wrong.',
            ]);
        }
        $payload = [
            "user" => $user->getPseudo(),
            "exp" => (new \DateTime())->modify("+5 minutes")->getTimestamp(),
        ];

        $jwt = JWT::encode($payload, $this->getParameter('jwt_secret'), 'HS256');
        return $this->json([
            'message' => 'success!',
            'token' => sprintf('Bearer %s', $jwt),
        ]);
    }
}