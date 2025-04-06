<?php

namespace Illuminate\Queue\Jobs;

use Illuminate\Container\Container;
use Illuminate\Contracts\Queue\Job as JobContract;
<<<<<<< HEAD
use Pheanstalk\Job as PheanstalkJob;
=======
use Pheanstalk\Contract\JobIdInterface;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Pheanstalk\Pheanstalk;

class BeanstalkdJob extends Job implements JobContract
{
    /**
     * The Pheanstalk instance.
     *
<<<<<<< HEAD
     * @var \Pheanstalk\Pheanstalk
=======
     * @var \Pheanstalk\Contract\PheanstalkManagerInterface&\Pheanstalk\Contract\PheanstalkPublisherInterface&\Pheanstalk\Contract\PheanstalkSubscriberInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $pheanstalk;

    /**
     * The Pheanstalk job instance.
     *
     * @var \Pheanstalk\Job
     */
    protected $job;

    /**
     * Create a new job instance.
     *
     * @param  \Illuminate\Container\Container  $container
<<<<<<< HEAD
     * @param  \Pheanstalk\Pheanstalk  $pheanstalk
     * @param  \Pheanstalk\Job  $job
=======
     * @param  \Pheanstalk\Contract\PheanstalkManagerInterface&\Pheanstalk\Contract\PheanstalkPublisherInterface&\Pheanstalk\Contract\PheanstalkSubscriberInterface  $pheanstalk
     * @param  \Pheanstalk\Contract\JobIdInterface  $job
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $connectionName
     * @param  string  $queue
     * @return void
     */
<<<<<<< HEAD
    public function __construct(Container $container, Pheanstalk $pheanstalk, PheanstalkJob $job, $connectionName, $queue)
=======
    public function __construct(Container $container, $pheanstalk, JobIdInterface $job, $connectionName, $queue)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->job = $job;
        $this->queue = $queue;
        $this->container = $container;
        $this->pheanstalk = $pheanstalk;
        $this->connectionName = $connectionName;
    }

    /**
     * Release the job back into the queue after (n) seconds.
     *
     * @param  int  $delay
     * @return void
     */
    public function release($delay = 0)
    {
        parent::release($delay);

        $priority = Pheanstalk::DEFAULT_PRIORITY;

        $this->pheanstalk->release($this->job, $priority, $delay);
    }

    /**
     * Bury the job in the queue.
     *
     * @return void
     */
    public function bury()
    {
        parent::release();

        $this->pheanstalk->bury($this->job);
    }

    /**
     * Delete the job from the queue.
     *
     * @return void
     */
    public function delete()
    {
        parent::delete();

        $this->pheanstalk->delete($this->job);
    }

    /**
     * Get the number of times the job has been attempted.
     *
     * @return int
     */
    public function attempts()
    {
        $stats = $this->pheanstalk->statsJob($this->job);

        return (int) $stats->reserves;
    }

    /**
     * Get the job identifier.
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->job->getId();
    }

    /**
     * Get the raw body string for the job.
     *
     * @return string
     */
    public function getRawBody()
    {
        return $this->job->getData();
    }

    /**
     * Get the underlying Pheanstalk instance.
     *
<<<<<<< HEAD
     * @return \Pheanstalk\Pheanstalk
=======
     * @return \Pheanstalk\Contract\PheanstalkManagerInterface&\Pheanstalk\Contract\PheanstalkPublisherInterface&\Pheanstalk\Contract\PheanstalkSubscriberInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getPheanstalk()
    {
        return $this->pheanstalk;
    }

    /**
     * Get the underlying Pheanstalk job.
     *
<<<<<<< HEAD
     * @return \Pheanstalk\Job
=======
     * @return \Pheanstalk\Contract\JobIdInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getPheanstalkJob()
    {
        return $this->job;
    }
}
