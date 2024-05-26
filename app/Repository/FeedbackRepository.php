<?php

namespace webversal\app\Repository;

use webversal\app\Model\feedback;

class FeedbackRepository
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(feedback $feedback):void
    {
        $sql = "INSERT INTO feedbacks(user_id, order_id, message) VALUE(?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $feedback->getUserId(),
            $feedback->getOrderId(),
            $feedback->getMessage(),
        ]);
    }

    public function findAll():array
    {
        $sql = "SELECT * FROM feedbacks";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findByUserId(feedback $feedback):array
    {
        $sql = "SELECT * FROM feedbacks WHERE user_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $feedback->getUserId()
        ]);
        return $statement->fetchAll();
    }

    public function findWithJoin(): array
    {
        $sql = "SELECT users.username, orders.name, feedbacks.message
                    FROM feedbacks
                    INNER JOIN users
                    ON feedbacks.user_id = users.id
                    INNER JOIN orders
                    ON feedbacks.order_id = orders.id;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function deleteByUserId($feedback):void
    {
        $sql = "DELETE FROM feedbacks WHERE user_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $feedback->getUserId()
        ]);
    }

}