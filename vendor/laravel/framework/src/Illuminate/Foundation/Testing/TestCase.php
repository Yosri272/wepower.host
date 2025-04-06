<?php

namespace Illuminate\Foundation\Testing;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase as BaseTestCase;
use Throwable;
=======
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

abstract class TestCase extends BaseTestCase
{
    use Concerns\InteractsWithContainer,
        Concerns\MakesHttpRequests,
        Concerns\InteractsWithAuthentication,
        Concerns\InteractsWithConsole,
        Concerns\InteractsWithDatabase,
        Concerns\InteractsWithDeprecationHandling,
        Concerns\InteractsWithExceptionHandling,
        Concerns\InteractsWithSession,
        Concerns\InteractsWithTime,
        Concerns\InteractsWithTestCaseLifecycle,
        Concerns\InteractsWithViews;

    /**
     * Creates the application.
     *
<<<<<<< HEAD
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    abstract public function createApplication();
=======
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require Application::inferBasePath().'/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
<<<<<<< HEAD
        static::$latestResponse = null;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->setUpTheTestEnvironment();
    }

    /**
     * Refresh the application instance.
     *
     * @return void
     */
    protected function refreshApplication()
    {
        $this->app = $this->createApplication();
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    protected function runTest(): mixed
    {
        $result = null;

        try {
            $result = parent::runTest();
        } catch (Throwable $e) {
            if (! is_null(static::$latestResponse)) {
                static::$latestResponse->transformNotSuccessfulException($e);
            }

            throw $e;
        }

        return $result;
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Clean up the testing environment before the next test.
     *
     * @return void
     *
     * @throws \Mockery\Exception\InvalidCountException
     */
    protected function tearDown(): void
    {
        $this->tearDownTheTestEnvironment();
    }

    /**
     * Clean up the testing environment before the next test case.
     *
     * @return void
     */
    public static function tearDownAfterClass(): void
    {
<<<<<<< HEAD
        static::$latestResponse = null;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        static::tearDownAfterClassUsingTestCase();
    }
}
