<?php

namespace webversal\app\Service;

use webversal\app\Exceptions\ValidationException;
use webversal\app\Model\order;
use webversal\app\Model\receipt;
use webversal\app\Model\user;
use webversal\app\Repository\OrderRepository;
use webversal\app\Repository\UserRepository;

class OrderService
{

    private OrderRepository $OrderRepository;
    private order $order;
    private receipt $receipt;

    public function __construct(OrderRepository $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }

    public function createOrder(order $order)
    {

        $result = $this->OrderRepository->findByName($order);

        if($result != null)
        {
            throw new ValidationException("Order name already exist, choose another name");
        }

        $this->OrderRepository->save($order);
        $result = $this->OrderRepository->findByName($order);

        $order->setId($result[0]['id']);
        $this->OrderRepository->saveReceipt($order);
    }

    public function yourOrders(user $user)
    {

        return $this->OrderRepository->findAllByUserId($user);

    }

    public function yourReceipt(user $user)
    {

        return $this->OrderRepository->findVerifiedRecieptByUserId($user);

    }

    public function yourDrafts(user $user)
    {

        return $this->OrderRepository->findAllUndraftOrders($user);

    }

    public function manageOrder()
    {

        return $this->OrderRepository->findAll();

    }

    public function undraft(order $order)
    {

        $result = $this->OrderRepository->findUndraftedOrderByCode($order);

        if ($result != null)
        {

            if($result[0]['user_id'] == $_SESSION['user_id'])
            {
                $this->OrderRepository->undraftByCode($order);
            } else {
                throw new ValidationException("Order Not Found");
            }

        } else {
            throw new ValidationException("Order Not Found");
        }

    }

    public function deleteDraft(order $order)
    {

        $result = $this->OrderRepository->findUndraftedOrderByCode($order);

        $order->setId($result[0]['id']);

        if ($result != null)
        {

            if($result[0]['user_id'] == $_SESSION['user_id'])
            {
                $this->OrderRepository->deleteReceiptByOrderId($order);
                $this->OrderRepository->deleteDraftedOrderByCode($order);
            } else {
                throw new ValidationException("Order Not Found");
            }

        } else {
            throw new ValidationException("Order Not Found");
        }

    }

    public function verifyOrderByCode(order $order)
    {

        $result = $this->OrderRepository->findByCode($order);

        $this->order = new order();

        $this->order->setId($result[0]['id']);

        $result = $this->OrderRepository->findUnsettedPrice($this->order);

        if($result[0]['price'] == 0)
        {

            throw new ValidationException("Price Must Be Set First");

        }

        $this->OrderRepository->verifyByOrderId($this->order);

    }

    public function setPrice(receipt $receipt, order $order)
    {

        $result = $this->OrderRepository->findByCode($order);


        if($result == null)
        {
            throw new ValidationException("Order Not Found");
        }

        $order->setId($result[0]['id']);

        $result = $this->OrderRepository->findUnsettedPrice($order);

        if($result[0]['verify'] == 1)
        {

            throw new ValidationException("Order Already Verified, Cannot Change Price");

        }

        $receipt->setOrderId($result[0]['order_id']);

        $this->OrderRepository->setPriceByOrderId($receipt);

    }

    public function cancelOrder(order $order)
    {

        $result = $this->OrderRepository->findByCode($order);

        if ($result == null)
        {

            throw new ValidationException("Order Not Found");

        }

        $order->setId($result[0]['id']);

        $result = $this->OrderRepository->findUnsettedPrice($order);

        if($result[0]['verify'] == 1)
        {

            throw new ValidationException("Order Already Verified, Cannot Cancel Order");

        }


        $this->OrderRepository->deleteReceiptByOrderId($order);
        $this->OrderRepository->deleteOrder($order);

    }

}