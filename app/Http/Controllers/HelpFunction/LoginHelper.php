<?php

declare(strict_types=1);

namespace App\Http\Controllers\HelpFunction;

class LoginHelper
{
    private string $component;

    public function __construct(string $component)
    {
        $this->component  = $component;
    }

    public function credentioal(array $credentials): array
    {
        return $credentials;
    }
}
