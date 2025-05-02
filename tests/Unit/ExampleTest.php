<?php

<<<<<<< HEAD
test('that true is true', function () {
    expect(true)->toBeTrue();
});
=======
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
