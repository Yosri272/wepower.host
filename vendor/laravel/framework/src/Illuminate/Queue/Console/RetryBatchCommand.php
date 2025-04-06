<?php

namespace Illuminate\Queue\Console;

use Illuminate\Bus\BatchRepository;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:retry-batch')]
class RetryBatchCommand extends Command implements Isolatable
{
    /**
     * The console command signature.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $signature = 'queue:retry-batch {id : The ID of the batch whose failed jobs should be retried}';
=======
    protected $signature = 'queue:retry-batch
                            {id?* : The ID of the batch whose failed jobs should be retried}';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retry the failed jobs for a batch';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
<<<<<<< HEAD
        $batch = $this->laravel[BatchRepository::class]->find($id = $this->argument('id'));

        if (! $batch) {
            $this->components->error("Unable to find a batch with ID [{$id}].");

            return 1;
        } elseif (empty($batch->failedJobIds)) {
            $this->components->error('The given batch does not contain any failed jobs.');

            return 1;
        }

        $this->components->info("Pushing failed queue jobs of the batch [$id] back onto the queue.");

        foreach ($batch->failedJobIds as $failedJobId) {
            $this->components->task($failedJobId, fn () => $this->callSilent('queue:retry', ['id' => $failedJobId]) == 0);
        }

        $this->newLine();
=======
        $batchesFound = count($ids = $this->getBatchJobIds()) > 0;

        if ($batchesFound) {
            $this->components->info('Pushing failed batch jobs back onto the queue.');
        }

        foreach ($ids as $batchId) {
            $batch = $this->laravel[BatchRepository::class]->find($batchId);

            if (! $batch) {
                $this->components->error("Unable to find a batch with ID [{$batchId}].");
            } elseif (empty($batch->failedJobIds)) {
                $this->components->error('The given batch does not contain any failed jobs.');
            }

            $this->components->info("Pushing failed queue jobs of the batch [$batchId] back onto the queue.");

            foreach ($batch->failedJobIds as $failedJobId) {
                $this->components->task(
                    $failedJobId,
                    fn () => $this->callSilent('queue:retry', ['id' => $failedJobId]) == 0
                );
            }

            $this->newLine();
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the custom mutex name for an isolated command.
     *
     * @return string
     */
    public function isolatableId()
    {
        return $this->argument('id');
    }
<<<<<<< HEAD
=======

    /**
     * Get the batch IDs to be retried.
     *
     * @return array
     */
    protected function getBatchJobIds()
    {
        $ids = (array) $this->argument('id');

        return array_values(array_filter(array_unique($ids)));
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
