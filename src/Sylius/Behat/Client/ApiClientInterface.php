<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Client;

interface ApiClientInterface
{
    public function index(string $resource): void;

    public function buildCreateRequest(string $resource): void;

    public function addRequestData(string $key, string $value): void;

    public function create(): void;

    public function countCollectionItems(): int;

    public function getCollection(): array;

    public function getError(): string;

    public function isCreationSuccessful(): bool;

    public function hasItemWithValue(string $key, string $value): bool;
}