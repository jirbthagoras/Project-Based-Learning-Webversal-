<?php

namespace webversal\app\Service;

use webversal\app\App\Cookie\Cookie;
use webversal\app\App\View\view;
use webversal\app\Exceptions\ValidationException;
use webversal\app\Model\user;
use webversal\app\Repository\UserRepository;

class UserService
{

    private UserRepository $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    // Registration

    public function registration(user $RequestUser)
    {

        $this->validateRegistration($RequestUser);

        $validatingUser = $this->UserRepository->findByUsername($RequestUser);
        if($validatingUser != null)
        {
            throw new ValidationException("Username already used");
        }

        return $this->UserRepository->save($RequestUser);

    }

    public function validateRegistration(user $RequestUser)
    {

        if(str_split(trim($RequestUser->getPhoneNumber()))[0] != "0" || str_split(trim($RequestUser->getPhoneNumber()))[1] != '8')
        {

            throw new ValidationException("Phone Number must start with: 08");

        }

    }

    // Login

    public function login(user $RequestUser)
    {

        return $this->validateLogin($RequestUser);

    }

    public function validateLogin(user $RequestUser)
    {

        $user = $this->UserRepository->findByUsername($RequestUser);

        if($user == null)
        {
            throw new ValidationException("Username Not Found, Please Register First");
        } elseif(!password_verify($RequestUser->getPassword(), $user[0]['password']))
        {
            throw new ValidationException("Password Is Not Match");
        }

        return $user;


    }

    public function logout()
    {

        Cookie::destroy();

        header("Location: /public/");

    }

    public function changePassword(user $user, string $newPassword)
    {

        $result = $this->UserRepository->findById($user);
        if(!password_verify($user->getPassword(), $result[0]['password']))
        {

            throw new ValidationException("Old Password Is Not Match");

        } elseif(password_verify($newPassword, $result[0]['password'])) {

            throw new ValidationException("Old and New Password Cannot Be Same");

        }

        $user->setPassword(password_hash($newPassword, PASSWORD_DEFAULT));

        $this->UserRepository->changePassword($user);

    }

    public function changePhoneNumber(user $user)
    {

        $result = $this->UserRepository->findById($user);

        if($result[0]['phone_number'] == $user->getPhoneNumber())
        {
            throw new ValidationException("Old and new phone number can't be same");
        }

        if(str_split(trim($user->getPhoneNumber()))[0] != "0" || str_split(trim($user->getPhoneNumber()))[1] != '8')
        {

            throw new ValidationException("Phone Number must start with: 08");

        }

        $this->UserRepository->changePhoneNumber($user);

    }

}