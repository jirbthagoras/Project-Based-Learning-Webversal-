<?php

namespace webversal\app\Repository;

use webversal\app\Model\user;

class UserRepository
{

    private \PDO $connection;
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(user $user): user
    {
        $sql = "INSERT INTO users(username, password, phone_number) VALUE(?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getPhoneNumber()
        ]);

        $findByUsername = new UserRepository($this->connection);

        foreach ($findByUsername->findByUsername($user) as $set)
        {
            $user->setId($set['id']);
            $user->setUsername($set['username']);
            $user->setPassword("");
            $user->setPhoneNumber($set['phone_number']);
            $user->setAdmin($set['admin']);
        }

        return $user;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM users";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findByUsername(user $user): array
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getUsername()
        ]);

        return $statement->fetchAll();
    }

    public function findById(user $user): array
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getId()
        ]);

        return $statement->fetchAll();
    }

    public function changePassword(user $user)
    {

        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getPassword(),
            $user->getId()
        ]);
    }

        public function changePhoneNumber(user $user)
        {
            $sql = "UPDATE users SET phone_number = ? WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([
                $user->getPhoneNumber(),
                $user->getId()
            ]);

        }
}