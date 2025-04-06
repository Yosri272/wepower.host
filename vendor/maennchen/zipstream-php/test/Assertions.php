<?php

declare(strict_types=1);

namespace ZipStream\Test;

trait Assertions
{
    protected function assertFileContains(string $filePath, string $needle): void
    {
        $last = '';

        $handle = fopen($filePath, 'r');
        while (!feof($handle)) {
            $line = fgets($handle, 1024);

<<<<<<< HEAD
            if(str_contains($last . $line, $needle)) {
=======
            if (str_contains($last . $line, $needle)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                fclose($handle);
                return;
            }

            $last = $line;
        }

        fclose($handle);

        $this->fail("File {$filePath} must contain {$needle}");
    }

    protected function assertFileDoesNotContain(string $filePath, string $needle): void
    {
        $last = '';

        $handle = fopen($filePath, 'r');
        while (!feof($handle)) {
            $line = fgets($handle, 1024);

<<<<<<< HEAD
            if(str_contains($last . $line, $needle)) {
=======
            if (str_contains($last . $line, $needle)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                fclose($handle);

                $this->fail("File {$filePath} must not contain {$needle}");
            }

            $last = $line;
        }

        fclose($handle);
    }
}
