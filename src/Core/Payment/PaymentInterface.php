<?php

namespace Core\Payment;

interface PaymentInterface
{
    public function createPlan(array $data): array;
    public function findClientById(string $id): ?object;
    public function makePayment(array $data): bool;
}
