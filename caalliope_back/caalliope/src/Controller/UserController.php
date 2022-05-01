<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Users;

class UserController extends AbstractController
{
    private $userRepository;

    public function __construct(UsersRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[Route('/users/', name: 'add_users', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $avatar = $data['avatar'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $password = $data['password'];
        $email = $data['email'];
        $id_books = $data['id_books'];

        if (empty($avatar) || empty($first_name) || empty($last_name) || empty($pseudo) || empty($password) || empty($email) || empty($id_books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->userRepository->saveUser($avatar, $first_name, $last_name, $pseudo, $password, $email, $id_books);

        return new JsonResponse(['status' => 'User created !'], Response::HTTP_CREATED);
    }

    #[Route('/users/{id}', name:'get_one_users', methods:"GET")]
    public function get($id): JsonResponse {
        $users = $this->userRepository->findOneBy(['id' => $id]);

        $data = [
            'avatar' => $users->getAvatar(),
            'first_name' => $users->getFirstName(),
            'last_name' => $users->getLastName(),
            'password' => $users->getPassword(),
            'email' => $users->getEmail(),
            'id_books' => $users->getIdBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/users', name:'get_all_users', methods:"GET")]
    public function getAll(): JsonResponse {
        $users = $this->userRepository->findAll();

        $data = [];

        foreach ($users as $user) {
            $data[] = [
                'avatar' => $user->getAvatar(),
                'first_name' => $user->getFirstName(),
                'last_name' => $user->getLastName(),
                'password' => $user->getPassword(),
                'email' => $user->getEmail(),
                'id_books' => $user->getIdBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/users/{id}', name:'update_user', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $users = $this->user->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['avatar']) ? true : 
            $users->setAvatar($data['avatar']);
        empty($data['first_name']) ? true : 
            $users->setFirstName($data['first_name']);
        empty($data['last_name']) ? true : 
            $users->setLastName($data['last_name']);
        empty($data['password']) ? true : 
            $users->setPassword($data['password']);
        empty($data['email']) ? true : 
            $users->setEmail($data['email']);
        empty($data['id_books']) ? true : 
            $users->setIdBooks($data['id_books']);

        $updatedUsers = $this->userRepository->updateUser($users);
    
        return new JsonResponse($updatedUsers->toArray(), Response::HTTP_OK);
    }

    #[Route('/user/{id}', name:'delete_users', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $users = $this->userRepository->findOneBy(['id' => $id]);

        $this->userRepository->removeUser($users);

        return new JsonResponse(['status' => 'user deleted'], Response::HTTP_NO_CONTENT);
    }
}
