<?php

namespace webversal\app\Repository;

use webversal\app\Model\order;
use webversal\app\Model\receipt;
use webversal\app\Model\user;

class OrderRepository
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(order $order): void
    {
        $sql = "INSERT INTO orders(user_id, name, payment_method, description) VALUE(?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getUserId(),
            $order->getName(),
            $order->getPaymentMethod(),
            $order->getDescription()
        ]);
    }

    public function saveReceipt(order $order)
    {
        $sql = "INSERT INTO receipt(order_id) VALUE(?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getId()
        ]);
    }

    public function findByName(order $order)
    {

        $sql = "SELECT * FROM orders WHERE name = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getName()
        ]);
        return $statement->fetchAll();

    }

    public function findByCode(order $order)
    {

        $sql = "SELECT * FROM orders WHERE code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getCode()
        ]);
        return $statement->fetchAll();

    }

    public function findAll(): array
    {
        $sql = "
SELECT users.username,
       users.phone_number,
       orders.name,
       orders.code,
       orders.description,
       orders.created_at,
       receipt.verified_at,
       receipt.price,
       orders.payment_method,
       receipt.verify
from receipt
         INNER JOIN orders ON receipt.order_id = orders.id
         INNER JOIN users ON orders.user_id = users.id
WHERE orders.draft = 0;
";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findAllByUserId(user $user): array
    {
        $sql = "
SELECT orders.name,
       orders.code,
       orders.description,
       orders.created_at,
       receipt.verified_at,
       receipt.verify
from receipt
         INNER JOIN orders ON receipt.order_id = orders.id
         INNER JOIN users ON orders.user_id = users.id
WHERE orders.user_id = ? && orders.draft = 0;
        ";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getId()
        ]);
        return $statement->fetchAll();
    }

    public function findAllUndraftOrders(user $user)
    {

        $sql = "
SELECT orders.name,
       orders.code,
       orders.description
from receipt
         INNER JOIN orders ON receipt.order_id = orders.id
         INNER JOIN users ON orders.user_id = users.id
WHERE orders.user_id = ? && orders.draft = 1;
        ";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getId()
        ]);
        return $statement->fetchAll();
    }

    public function findVerifiedRecieptByUserId(user $user)
    {

            $sql = "SELECT orders.name, orders.code, orders.created_at, receipt.verified_at, receipt.price, orders.payment_method
                    from receipt
                    INNER JOIN orders ON receipt.order_id = orders.id
                    INNER JOIN users ON orders.user_id = users.id
                    WHERE orders.user_id = ? && receipt.verify = 1;";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getId()
        ]);
        return $statement->fetchAll();

    }

    public function findUnsettedPrice(order $order)
    {

        $sql = "SELECT * from receipt where order_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getId()
        ]);
        return $statement->fetchAll();

    }

    public function findUnverifiedReceipt()
    {

        $sql = "SELECT users.username, orders.name, orders.code, orders.created_at, receipt.verified_at, receipt.price, orders.payment_method, receipt.order_id
                from receipt
                INNER JOIN orders ON receipt.order_id = orders.id
                INNER JOIN users ON orders.user_id = users.id
                WHERE receipt.verify = 0;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();

    }

    public function verifyByOrderId(order $order):void
    {
        $sql = "UPDATE receipt SET verify = 1, verified_at = NOW() WHERE order_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getId()
        ]);
    }

    public function findUnsetPrice()
    {

        $sql = "SELECT users.username, orders.name, orders.code, orders.created_at, receipt.verified_at, receipt.price, orders.payment_method, receipt.order_id
                from receipt
                INNER JOIN orders ON receipt.order_id = orders.id
                INNER JOIN users ON orders.user_id = users.id
                WHERE receipt.price = 0;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();

    }

    public function setPriceByOrderId(receipt $receipt)
    {
        $sql = "UPDATE receipt SET price = ? WHERE order_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $receipt->getPrice(),
            $receipt->getOrderId()
        ]);
    }

    public function undraftByCode(order $order)
    {
        $sql = "UPDATE orders SET draft = 0, created_at = NOW() WHERE code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getCode()
        ]);
    }

    public function findUndraftedOrderByCode(order $order)
    {
        $sql = "SELECT * FROM orders WHERE code = ? && draft = 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getCode()
        ]);
        return $statement->fetchAll();
    }

    public function deleteDraftedOrderByCode(order $order)
    {
        $sql = "DELETE FROM orders WHERE code = ? && draft = 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getCode()
        ]);
    }

    public function deleteOrder(order $order)
    {
        $sql = "DELETE FROM orders WHERE code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getCode()
        ]);
    }

    public function deleteReceiptByOrderId(order $order)
    {

        $sql = "DELETE FROM receipt WHERE order_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $order->getId()
        ]);

    }
}