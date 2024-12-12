<?php

namespace App\Http\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(array $data): array
    {
        $data['password'] = bcrypt($data['password']);
        $user = $this->userRepository->create($data);

        return $user;
    }
}
