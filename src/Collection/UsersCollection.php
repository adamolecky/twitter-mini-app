<?php

/**TODO:
 * Using entity inside of collection could be problematic.
 * It is better to use DTO's, but i hope this is sufficient, as this is just example.
 */

namespace App\Collection;

use App\Entity\User;
use Ramsey\Collection\Collection;

class UsersCollection extends Collection {

    public function getType(): string
    {
        return User::class;
    }

}