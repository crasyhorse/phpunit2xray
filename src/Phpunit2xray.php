<?php

declare(strict_types=1);

namespace CrasyHorse\Phpunit2xray;

use Carbon\Carbon;
use DateTimeZone;
use PHPUnit\Runner\AfterIncompleteTestHook;
use PHPUnit\Runner\AfterRiskyTestHook;
use PHPUnit\Runner\AfterSkippedTestHook;
use PHPUnit\Runner\AfterSuccessfulTestHook;
use PHPUnit\Runner\AfterTestErrorHook;
use PHPUnit\Runner\AfterTestFailureHook;
use PHPUnit\Runner\AfterTestWarningHook;
use PHPUnit\Runner\BeforeTestHook;

/**
 * PHP-Unit extension that implements the X-Ray tags into the specs.
 *
 * @author Florian Weidinger
 */
final class Phpunit2xray implements
    BeforeTestHook,
    AfterSuccessfulTestHook,
    AfterTestFailureHook,
    AfterSkippedTestHook,
    AfterIncompleteTestHook,
    AfterTestWarningHook,
    AfterTestErrorHook,
    AfterRiskyTestHook
{
    /**
     * Timestamp of when PHP-Unit started the specs.
     *
     * @var Carbon
     */
    private $start;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->start = Carbon::now(new DateTimeZone('Europe/Berlin'));
    }

    /**
     * Gets executed before each test.
     *
     * @param string $test The FQSEN of the test
     *
     * @return void
     */
    public function executeBeforeTest(string $test): void
    {
        $this->start = Carbon::now(new DateTimeZone('Europe/Berlin'));
    }

    /**
     * Executed after each incomplete test.
     */
    public function executeAfterIncompleteTest(string $test, string $message, float $time): void
    {
    }

    /**
     * Executed after each risky test.
     */
    public function executeAfterRiskyTest(string $test, string $message, float $time): void
    {
    }

    /**
     * Executed after skipped tests.
     */
    public function executeAfterSkippedTest(string $test, string $message, float $time): void
    {
    }

    /**
     * Executed after each successful test.
     */
    public function executeAfterSuccessfulTest(string $test, float $time): void
    {
    }

    /**
     * Executed after a test throws an error.
     */
    public function executeAfterTestError(string $test, string $message, float $time): void
    {
    }

    /**
     * Executed after a test has failed.
     */
    public function executeAfterTestFailure(string $test, string $message, float $time): void
    {
    }

    /**
     * Executed after a test shows a warning.
     */
    public function executeAfterTestWarning(string $test, string $message, float $time): void
    {
    }
}
