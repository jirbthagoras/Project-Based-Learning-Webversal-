<?php

namespace webversal\app\Model;

class receipt
{

    private int $id;
    private int $order_id;
    private int $price;
    private string $verified_at;
    private bool $verify;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }

    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getVerifiedAt(): string
    {
        return $this->verified_at;
    }

    public function setVerifiedAt(string $verified_at): void
    {
        $this->verified_at = $verified_at;
    }

    public function isVerify(): bool
    {
        return $this->verify;
    }

    public function setVerify(bool $verify): void
    {
        $this->verify = $verify;
    }



}