<?php declare(strict_types=1);
/*
 * This file is part of sebastian/version.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann;

use function end;
use function explode;
use function fclose;
use function is_dir;
use function is_resource;
use function proc_close;
use function proc_open;
use function stream_get_contents;
use function substr_count;
use function trim;

<<<<<<< HEAD
final class Version
{
    private readonly string $version;

=======
final readonly class Version
{
    /**
     * @var non-empty-string
     */
    private string $version;

    /**
     * @param non-empty-string $release
     * @param non-empty-string $path
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function __construct(string $release, string $path)
    {
        $this->version = $this->generate($release, $path);
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function asString(): string
    {
        return $this->version;
    }

<<<<<<< HEAD
=======
    /**
     * @param non-empty-string $release
     * @param non-empty-string $path
     *
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function generate(string $release, string $path): string
    {
        if (substr_count($release, '.') + 1 === 3) {
            $version = $release;
        } else {
            $version = $release . '-dev';
        }

        $git = $this->getGitInformation($path);

        if (!$git) {
            return $version;
        }

        if (substr_count($release, '.') + 1 === 3) {
            return $git;
        }

        $git = explode('-', $git);

        return $release . '-' . end($git);
    }

<<<<<<< HEAD
    private function getGitInformation(string $path): bool|string
=======
    /**
     * @param non-empty-string $path
     */
    private function getGitInformation(string $path): false|string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!is_dir($path . DIRECTORY_SEPARATOR . '.git')) {
            return false;
        }

        $process = proc_open(
<<<<<<< HEAD
            'git describe --tags',
=======
            ['git', 'describe', '--tags'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            [
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ],
            $pipes,
<<<<<<< HEAD
            $path
=======
            $path,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );

        if (!is_resource($process)) {
            return false;
        }

<<<<<<< HEAD
        $result = trim(stream_get_contents($pipes[1]));
=======
        $result = trim((string) stream_get_contents($pipes[1]));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        fclose($pipes[1]);
        fclose($pipes[2]);

        $returnCode = proc_close($process);

        if ($returnCode !== 0) {
            return false;
        }

        return $result;
    }
}
