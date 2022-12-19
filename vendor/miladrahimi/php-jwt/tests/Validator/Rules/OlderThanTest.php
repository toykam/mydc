<?php

namespace MiladRahimi\Jwt\Tests\Validator\Rules;

use MiladRahimi\Jwt\Exceptions\ValidationException;
use MiladRahimi\Jwt\Tests\TestCase;
use MiladRahimi\Jwt\Validator\Rules\OlderThan;
use Throwable;

class OlderThanTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_validate_it_should_pass_when_claim_is_older_than_the_time()
    {
        $rule = new OlderThan(666);
        $rule->validate('claim', 13);

        $this->assertTrue(true);
    }

    /**
     * @throws Throwable
     */
    public function test_validate_it_should_fail_when_claim_is_the_same_time()
    {
        $rule = new OlderThan(666);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('The `claim` must be older than `666`.');
        $rule->validate('claim', 666);
    }

    /**
     * @throws Throwable
     */
    public function test_validate_it_should_fail_when_claim_is_newer_than_the_value()
    {
        $rule = new OlderThan(13);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('The `claim` must be older than `13`.');
        $rule->validate('claim', 666);
    }
}
