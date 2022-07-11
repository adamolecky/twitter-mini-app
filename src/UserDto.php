<?php

namespace App;

use Ramsey\Uuid\UuidInterface;

class UserDto
{
    /**
     * @var string[]
     */
    public array $roles = [];

    public string $password;

    public ?string $firstName;

    public ?string $lastName;

    public ?string $nick;

    public int $countFollowers;

    /**
     * @param mixed[] $contents
     */
    public function __construct(
        array $contents
    )
    {
        /**TODO:
         * once again, this could be done via validators and serializers,
         * but i think in this example we could take shortcut
         */
        $this->roles = $contents['roles'] ?? throw new \Exception('Wrong format, roles missing');
        $this->password = $contents['password'] ?? throw new \Exception('Wrong format, password missing');
        $this->firstName = $contents['firstName'] ?? null;
        $this->lastName = $contents['lastName'] ?? null;
        $this->nick = $contents['nick'] ?? null;
        $this->countFollowers = $contents['countFollowers'] ?? 0;
    }



}