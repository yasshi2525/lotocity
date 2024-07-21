<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class HttpTest extends TestCase
{
    #[DataProvider('provider')]
    public function testOK(string $url, int $expectedStatus = 200): void
    {
        $response = $this->get($url);
        $response->assertStatus($expectedStatus);
    }

    public static function provider()
    {
        return [['/loto'], ['/deal'], ['/stat']];
    }
}
