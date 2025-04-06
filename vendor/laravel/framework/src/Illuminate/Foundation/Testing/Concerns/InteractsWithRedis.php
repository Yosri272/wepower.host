<?php

namespace Illuminate\Foundation\Testing\Concerns;

use Exception;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Redis\Factory as Redis;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Foundation\Application;
use Illuminate\Redis\RedisManager;
use Illuminate\Support\Env;

trait InteractsWithRedis
{
    /**
     * Indicate connection failed if redis is not available.
     *
     * @var bool
     */
    private static $connectionFailedOnceWithDefaultsSkip = false;

    /**
     * Redis manager instance.
     *
     * @var array<string, \Illuminate\Redis\RedisManager>
     */
    private $redis;

    /**
     * Setup redis connection.
     *
     * @return void
     */
    public function setUpRedis()
    {
        if (! extension_loaded('redis')) {
            $this->markTestSkipped('The redis extension is not installed. Please install the extension to enable '.__CLASS__);
        }

        if (static::$connectionFailedOnceWithDefaultsSkip) {
            $this->markTestSkipped('Trying default host/port failed, please set environment variable REDIS_HOST & REDIS_PORT to enable '.__CLASS__);
        }

        $app = $this->app ?? new Application;
        $host = Env::get('REDIS_HOST', '127.0.0.1');
        $port = Env::get('REDIS_PORT', 6379);

        foreach (static::redisDriverProvider() as $driver) {
<<<<<<< HEAD
            $this->redis[$driver[0]] = new RedisManager($app, $driver[0], [
                'cluster' => false,
                'options' => [
                    'prefix' => 'test_',
                ],
                'default' => [
                    'host' => $host,
                    'port' => $port,
                    'database' => 5,
                    'timeout' => 0.5,
                    'name' => 'default',
                ],
            ]);
        }

        try {
            $this->redis['phpredis']->connection()->flushdb();
=======
            if (Env::get('REDIS_CLUSTER_HOSTS_AND_PORTS')) {
                $config = [
                    'options' => [
                        'cluster' => 'redis',
                        'prefix' => 'test_',
                    ],
                    'clusters' => [
                        'default' => array_map(
                            static fn ($hostAndPort) => [
                                'host' => explode(':', $hostAndPort)[0],
                                'port' => explode(':', $hostAndPort)[1],
                            ],
                            explode(',', Env::get('REDIS_CLUSTER_HOSTS_AND_PORTS')),
                        ),
                    ],
                ];
            } else {
                $config = [
                    'options' => [
                        'prefix' => 'test_',
                    ],
                    'default' => [
                        'host' => $host,
                        'port' => $port,
                        'database' => 5,
                        'timeout' => 0.5,
                        'name' => 'default',
                    ],
                    'cache' => [
                        'host' => $host,
                        'port' => $port,
                        'database' => 6,
                        'timeout' => 0.5,
                    ],
                ];
            }
            $this->redis[$driver[0]] = new RedisManager($app, $driver[0], $config);
        }

        $defaultDriver = Env::get('REDIS_CLIENT', 'phpredis');

        try {
            $this->redis[$defaultDriver]->connection()->flushdb();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        } catch (Exception) {
            if ($host === '127.0.0.1' && $port === 6379 && Env::get('REDIS_HOST') === null) {
                static::$connectionFailedOnceWithDefaultsSkip = true;

                $this->markTestSkipped('Trying default host/port failed, please set environment variable REDIS_HOST & REDIS_PORT to enable '.__CLASS__);
            }
        }
<<<<<<< HEAD
=======

        $app->instance('redis', $this->redis[$defaultDriver]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Teardown redis connection.
     *
     * @return void
     */
    public function tearDownRedis()
    {
        if (isset($this->redis['phpredis'])) {
            $this->redis['phpredis']->connection()->flushdb();
        }

        foreach (static::redisDriverProvider() as $driver) {
            if (isset($this->redis[$driver[0]])) {
                $this->redis[$driver[0]]->connection()->disconnect();
            }
        }
    }

    /**
     * Get redis driver provider.
     *
     * @return array
     */
    public static function redisDriverProvider()
    {
        return [
            ['predis'],
            ['phpredis'],
        ];
    }

    /**
     * Run test if redis is available.
     *
     * @param  callable  $callback
     * @return void
     */
    public function ifRedisAvailable($callback)
    {
        $this->setUpRedis();

        $callback();

        $this->tearDownRedis();
    }
}
