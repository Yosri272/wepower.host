<?php

namespace Maatwebsite\Excel\Files;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

abstract class TemporaryFile
{
    /**
     * @return string
     */
    abstract public function getLocalPath(): string;

    /**
     * @return bool
     */
    abstract public function exists(): bool;

    /**
     * @param @param string|resource $contents
     */
    abstract public function put($contents);

    /**
     * @return bool
     */
    abstract public function delete(): bool;

    /**
     * @return resource
     */
    abstract public function readStream();

    /**
     * @return string
     */
    abstract public function contents(): string;

    /**
     * @return TemporaryFile
     */
    public function sync(): TemporaryFile
    {
        return $this;
    }

    /**
     * @param  string|UploadedFile  $filePath
     * @param  string|null  $disk
     * @return TemporaryFile
     */
<<<<<<< HEAD
    public function copyFrom($filePath, string $disk = null): TemporaryFile
=======
    public function copyFrom($filePath, ?string $disk = null): TemporaryFile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($filePath instanceof UploadedFile) {
            $readStream = fopen($filePath->getRealPath(), 'rb');
        } elseif ($disk === null && realpath($filePath) !== false) {
            $readStream = fopen($filePath, 'rb');
        } else {
            $diskInstance = app('filesystem')->disk($disk);

            if (!$diskInstance->exists($filePath)) {
                $logPath = '[' . $filePath . ']';

                if ($disk) {
                    $logPath .= ' (' . $disk . ')';
                }

<<<<<<< HEAD
                throw new FileNotFoundException('File ' . $logPath . ' does not exist and can therefor not be imported.');
=======
                throw new FileNotFoundException('File ' . $logPath . ' does not exist and can therefore not be imported.');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            $readStream = $diskInstance->readStream($filePath);
        }

        $this->put($readStream);

        if (is_resource($readStream)) {
            fclose($readStream);
        }

        return $this->sync();
    }
}
