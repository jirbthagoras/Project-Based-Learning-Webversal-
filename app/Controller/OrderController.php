<?php

namespace webversal\app\Controller;

use webversal\app\App\Database\database;
use webversal\app\App\View\view;
use webversal\app\Exceptions\ValidationException;
use webversal\app\Model\order;
use webversal\app\Model\receipt;
use webversal\app\Model\user;
use webversal\app\Repository\OrderRepository;
use webversal\app\Repository\UserRepository;
use webversal\app\Service\OrderService;

class OrderController
{

    private user $user;

    private order $order;
    private receipt $receipt;

    private OrderService $OrderService;

    public function __construct()
    {
        
        $db = database::getConnection();
        
        $OrderRepository = new OrderRepository($db);
        $this->OrderService = new OrderService($OrderRepository);
        
        $db = null;
        
    }

    public function createOrder()
    {

        view::render("pemesanan/ordernow", $model = []);

    }

    public function postCreateOrder()
    {

        $this->order = new order();
        $this->order->setName($_POST['name']);
        $this->order->setPaymentMethod($_POST['payment_method']);
        $this->order->setDescription($_POST['description']);
        $this->order->setUserId($_SESSION['user_id']);

        try {
            $this->OrderService->createOrder($this->order);
            view::render("pemesanan/ordernow", $model = [
                "success" => "Order Successfully Created"
            ]);
        } catch(ValidationException $exception)
        {
            view::render("pemesanan/ordernow", $model = [
                "error" => $exception->getMessage()
            ]);
        }

    }

    public function yourOrders()
    {

//        session_start();

        $this->user = new user();
        $this->user->setId($_SESSION['user_id']);

        $orders = $this->OrderService->yourOrders($this->user);

        view::render("pemesanan/ordermu", $model = [
            "result" => $orders
        ]);


    }

    public function yourReceipts()
    {

//        session_start();

        $this->user = new user();
        $this->user->setId($_SESSION['user_id']);

        $orders = $this->OrderService->yourReceipt($this->user);

        view::render("pemesanan/history", $model = [
            'result' => $orders
        ]);


    }


    public function yourDrafts()
    {

        $this->user = new user();
        $this->user->setId($_SESSION['user_id']);

        $orders = $this->OrderService->yourDrafts($this->user);

        view::render("pemesanan/draf", $model = [
            'result' => $orders
        ]);

    }

    public function undraft(string $code)
    {

        $this->order = new order();
        $this->order->setCode($code);
        $this->order->setUserId($_SESSION['user_id']);

        try {
            $this->OrderService->undraft($this->order);
            header("Location:/public/yourDrafts");
        } catch(ValidationException $exception)
        {
            view::redirect("extras/NotFound");
        }

    }

    public function deleteDraft(string $code)
    {

        $this->order = new order();
        $this->order->setCode($code);
        $this->order->setUserId($_SESSION['user_id']);

        try {
            $this->OrderService->deleteDraft($this->order);
            header("Location:/public/yourDrafts");
        } catch(ValidationException $exception)
        {
            view::redirect("extras/NotFound");
        }

    }

    public function manageOrder()
    {

        $orders = $this->OrderService->manageOrder();

        view::render("pemesanan/manageOrder", $model = [
            'result' => $orders
        ]);

    }

    public function verifyOrder(string $code)
    {

        $this->order = new order();
        $this->order->setCode($code);

        try {

            $this->OrderService->verifyOrderByCode($this->order);

            header("Location:/public/manageOrder");

        } catch(ValidationException $exception)
        {

            $orders = $this->OrderService->manageOrder();

            view::render("pemesanan/manageOrder", $model = [
                'result' => $orders,
                'error' => $exception->getMessage()
            ]);

        }

    }

    public function setPrice(string $code)
    {

        view::render("login page/setPrice", $model = [
            'code' => $code
        ]);

    }

    public function postSetPrice()
    {

        $this->receipt = new receipt();
        $this->receipt->setPrice(htmlspecialchars($_POST['newPrice']));

        $this->order = new order();
        $this->order->setCode(htmlspecialchars($_POST['code']));


        try {

            $this->OrderService->setPrice($this->receipt, $this->order);

            header("Location:/public/manageOrder");


        } catch(ValidationException $exception)
        {

            view::render("login page/setPrice", $model = [
                'error' => $exception->getMessage(),
                'code' => $this->order->getCode()
            ]);


        }

    }

    public function cancelOrder(string $code)
    {

        $this->order = new order();
        $this->order->setCode($code);

        try {

            $this->OrderService->cancelOrder($this->order);

            header("Location:/public/manageOrder");

        } catch (validationException $exception)
        {

            $orders = $this->OrderService->manageOrder();

            view::render("pemesanan/manageOrder", $model = [
                'result' => $orders,
                'error' => $exception->getMessage()
            ]);

        }

    }


}