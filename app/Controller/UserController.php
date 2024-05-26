<?php

namespace webversal\app\Controller;

use webversal\app\App\Cookie\Cookie;
use webversal\app\App\Database\database;
use webversal\app\App\View\view;
use webversal\app\Exceptions\ValidationException;
use webversal\app\Model\user;
use webversal\app\Repository\UserRepository;
use webversal\app\Service\UserService;

class UserController
{

    private user $user;
    private UserService $UserService;

    public function __construct()
    {

        $connection = database::getConnection();

        $UserRepository = new UserRepository($connection);
        $this->UserService = new UserService($UserRepository);

        $connection = null;

    }

    // Register Controllers

    public function register()
    {
        view::render("login page/sign", $model = [

        ]);
    }

    public function postRegister()
    {

            $this->user = new user();
            $this->user->setUsername(htmlspecialchars($_POST['username']));
            $this->user->setPassword(password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT));
            $this->user->setPhoneNumber(htmlspecialchars($_POST['phoneNumber']));

        try {
            $datas = $this->UserService->registration($this->user);

            $this->user->setUsername($datas->getUsername());
            $this->user->setId($datas->getId());
            $this->user->setAdmin($datas->isAdmin());
            $this->user->setPhoneNumber($datas->getPhoneNumber());

            Cookie::save($this->user);

            view::redirect("index");
        } catch (ValidationException $exception) {
            view::render("login page/sign", $model = [
                "error" => $exception->getMessage()
            ]);
        }

    }

    // Login Controllers

    public function login()
    {

        view::render("login page/login", $model = [

        ]);

    }

    public function postLogin()
    {

        $this->user = new user();
        $this->user->setUsername(htmlspecialchars($_POST['username']));
        $this->user->setPassword(htmlspecialchars($_POST['password']));


        try {
            $datas = $this->UserService->login($this->user);

            $this->user->setUsername($datas[0]['username']);
            $this->user->setId($datas[0]['id']);
            $this->user->setAdmin($datas[0]['admin']);
            $this->user->setPhoneNumber($datas[0]['phone_number']);

            Cookie::save($this->user);

            view::redirect("index");
        } catch (ValidationException | \Exception $exception) {
            view::render("login page/login", $model = [
                "error" => $exception->getMessage()
            ]);
        }

    }

    public function logOut()
    {

        $this->UserService->logout();

    }

    public function changePassword()
    {

        view::render("login page/changepass", $model = []);

    }

    public function postChangePassword()
    {

        $this->user = new user();
        $this->user->setPassword($_POST['currentPassword']);
        $this->user->setId($_SESSION['user_id']);

        try {

            $this->UserService->changePassword($this->user, $_POST['newPassword']);
            header("Location:/public/userInfo");

        } catch (validationException | \Exception $exception) {

            view::render("login page/changepass", $model = [
                "error" => $exception->getMessage()
            ]);
        }


    }

    public function changePhoneNumber()
    {
        view::render("login page/changenum", $model = []);
    }

    public function postChangePhoneNumber()
    {

        $this->user = new user();
        $this->user->setPhoneNumber($_POST['phoneNumber']);
        $this->user->setId($_SESSION['user_id']);

        try {

        $this->UserService->changePhoneNumber($this->user);

        $_SESSION['phoneNumber'] = $_POST['phoneNumber'];

        header("Location: /public/userInfo");

        } catch (validationException | \Exception $exception) {

            view::render("login page/changenum", $model = [
                "error" => $exception->getMessage()
            ]);

        }

    }
}