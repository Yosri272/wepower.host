<?php

declare(strict_types=1);

namespace ZipStream\Test;

use DateTimeImmutable;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\StreamWrapper;
use org\bovigo\vfs\vfsStream;
<<<<<<< HEAD
=======
use PHPUnit\Framework\Attributes\Group;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\StreamInterface;
use RuntimeException;
use ZipArchive;
use ZipStream\CompressionMethod;
use ZipStream\Exception\FileNotFoundException;
use ZipStream\Exception\FileNotReadableException;
use ZipStream\Exception\FileSizeIncorrectException;
use ZipStream\Exception\OverflowException;
use ZipStream\Exception\ResourceActionException;
use ZipStream\Exception\SimulationFileUnknownException;
use ZipStream\Exception\StreamNotReadableException;
use ZipStream\Exception\StreamNotSeekableException;
use ZipStream\OperationMode;
use ZipStream\PackField;
use ZipStream\ZipStream;

class ZipStreamTest extends TestCase
{
    use Util;
    use Assertions;
<<<<<<< HEAD

    public function testAddFile(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    use Tempfile;

    public function testAddFile(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $zip->addFile('sample.txt', 'Sample String Data');
        $zip->addFile('test/sample.txt', 'More Simple Sample Data');

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt', 'test' . DIRECTORY_SEPARATOR . 'sample.txt'], $files);

        $this->assertStringEqualsFile($tmpDir . '/sample.txt', 'Sample String Data');
        $this->assertStringEqualsFile($tmpDir . '/test/sample.txt', 'More Simple Sample Data');
    }

    public function testAddFileUtf8NameComment(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $name = 'árvíztűrő tükörfúrógép.txt';
        $content = 'Sample String Data';
        $comment =
            'Filename has every special characters ' .
            'from Hungarian language in lowercase. ' .
            'In uppercase: ÁÍŰŐÜÖÚÓÉ';

        $zip->addFile(fileName: $name, data: $content, comment: $comment);
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame([$name], $files);
        $this->assertStringEqualsFile($tmpDir . '/' . $name, $content);

        $zipArchive = new ZipArchive();
<<<<<<< HEAD
        $zipArchive->open($tmp);
=======
        $zipArchive->open($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->assertSame($comment, $zipArchive->getCommentName($name));
    }

    public function testAddFileUtf8NameNonUtfComment(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $name = 'á.txt';
        $content = 'any';
        $comment = mb_convert_encoding('á', 'ISO-8859-2', 'UTF-8');

        // @see https://libzip.org/documentation/zip_file_get_comment.html
        //
        // mb_convert_encoding hasn't CP437.
        // nearly CP850 (DOS-Latin-1)
        $guessComment = mb_convert_encoding($comment, 'UTF-8', 'CP850');

        $zip->addFile(fileName: $name, data: $content, comment: $comment);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $zipArch = new ZipArchive();
        $zipArch->open($tmp);
=======

        $zipArch = new ZipArchive();
        $zipArch->open($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->assertSame($guessComment, $zipArch->getCommentName($name));
        $this->assertSame($comment, $zipArch->getCommentName($name, ZipArchive::FL_ENC_RAW));
    }

    public function testAddFileWithStorageMethod(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $zip->addFile(fileName: 'sample.txt', data: 'Sample String Data', compressionMethod: CompressionMethod::STORE);
        $zip->addFile(fileName: 'test/sample.txt', data: 'More Simple Sample Data');
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $zipArchive = new ZipArchive();
        $zipArchive->open($tmp);
=======

        $zipArchive = new ZipArchive();
        $zipArchive->open($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $sample1 = $zipArchive->statName('sample.txt');
        $sample12 = $zipArchive->statName('test/sample.txt');
        $this->assertSame($sample1['comp_method'], CompressionMethod::STORE->value);
        $this->assertSame($sample12['comp_method'], CompressionMethod::DEFLATE->value);

        $zipArchive->close();
    }

    public function testAddFileFromPath(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        [$tmpExample, $streamExample] = $this->getTmpFileStream();
        fwrite($streamExample, 'Sample String Data');
        fclose($streamExample);
        $zip->addFileFromPath(fileName: 'sample.txt', path: $tmpExample);

        [$tmpExample, $streamExample] = $this->getTmpFileStream();
        fwrite($streamExample, 'More Simple Sample Data');
        fclose($streamExample);
        $zip->addFileFromPath(fileName: 'test/sample.txt', path: $tmpExample);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt', 'test' . DIRECTORY_SEPARATOR . 'sample.txt'], $files);

        $this->assertStringEqualsFile($tmpDir . '/sample.txt', 'Sample String Data');
        $this->assertStringEqualsFile($tmpDir . '/test/sample.txt', 'More Simple Sample Data');
<<<<<<< HEAD
=======

        unlink($tmpExample);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function testAddFileFromPathFileNotFoundException(): void
    {
        $this->expectException(FileNotFoundException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        // Get ZipStream Object
        $zip = new ZipStream(
            outputStream: $stream,
=======
        // Get ZipStream Object
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        // Trigger error by adding a file which doesn't exist
        $zip->addFileFromPath(fileName: 'foobar.php', path: '/foo/bar/foobar.php');
    }

    public function testAddFileFromPathFileNotReadableException(): void
    {
        $this->expectException(FileNotReadableException::class);

<<<<<<< HEAD

        [, $stream] = $this->getTmpFileStream();


=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        // create new virtual filesystem
        $root = vfsStream::setup('vfs');
        // create a virtual file with no permissions
        $file = vfsStream::newFile('foo.txt', 0)->at($root)->setContent('bar');

        // Get ZipStream Object
        $zip = new ZipStream(
<<<<<<< HEAD
            outputStream: $stream,
=======
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $zip->addFileFromPath('foo.txt', $file->url());
    }

    public function testAddFileFromPathWithStorageMethod(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        [$tmpExample, $streamExample] = $this->getTmpFileStream();
        fwrite($streamExample, 'Sample String Data');
        fclose($streamExample);
        $zip->addFileFromPath(fileName: 'sample.txt', path: $tmpExample, compressionMethod: CompressionMethod::STORE);

        [$tmpExample, $streamExample] = $this->getTmpFileStream();
        fwrite($streamExample, 'More Simple Sample Data');
        fclose($streamExample);
        $zip->addFileFromPath('test/sample.txt', $tmpExample);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $zipArchive = new ZipArchive();
        $zipArchive->open($tmp);
=======

        $zipArchive = new ZipArchive();
        $zipArchive->open($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $sample1 = $zipArchive->statName('sample.txt');
        $this->assertSame(CompressionMethod::STORE->value, $sample1['comp_method']);

        $sample2 = $zipArchive->statName('test/sample.txt');
        $this->assertSame(CompressionMethod::DEFLATE->value, $sample2['comp_method']);

        $zipArchive->close();
    }

    public function testAddLargeFileFromPath(): void
    {
        foreach ([CompressionMethod::DEFLATE, CompressionMethod::STORE] as $compressionMethod) {
            foreach ([false, true] as $zeroHeader) {
                foreach ([false, true] as $zip64) {
                    if ($zeroHeader && $compressionMethod === CompressionMethod::DEFLATE) {
                        continue;
                    }
                    $this->addLargeFileFileFromPath(
                        compressionMethod: $compressionMethod,
                        zeroHeader: $zeroHeader,
                        zip64: $zip64
                    );
                }
            }
        }
    }

    public function testAddFileFromStream(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        // In this test we can't use temporary stream to feed data
        // because zlib.deflate filter gives empty string before PHP 7
        // it works fine with file stream
        $streamExample = fopen(__FILE__, 'rb');
        $zip->addFileFromStream('sample.txt', $streamExample);
        fclose($streamExample);

        $streamExample2 = fopen('php://temp', 'wb+');
        fwrite($streamExample2, 'More Simple Sample Data');
        rewind($streamExample2); // move the pointer back to the beginning of file.
        $zip->addFileFromStream('test/sample.txt', $streamExample2); //, $fileOptions);
        fclose($streamExample2);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt', 'test' . DIRECTORY_SEPARATOR . 'sample.txt'], $files);

        $this->assertStringEqualsFile(__FILE__, file_get_contents($tmpDir . '/sample.txt'));
        $this->assertStringEqualsFile($tmpDir . '/test/sample.txt', 'More Simple Sample Data');
    }

    public function testAddFileFromStreamUnreadableInput(): void
    {
        $this->expectException(StreamNotReadableException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();
        [$tmpInput] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        [$tmpInput] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $streamUnreadable = fopen($tmpInput, 'w');

        $zip->addFileFromStream('sample.json', $streamUnreadable);
    }

    public function testAddFileFromStreamBrokenOutputWrite(): void
    {
        $this->expectException(ResourceActionException::class);

        $outputStream = FaultInjectionResource::getResource(['stream_write']);

        $zip = new ZipStream(
            outputStream: $outputStream,
            sendHttpHeaders: false,
        );

        $zip->addFile('sample.txt', 'foobar');
    }

    public function testAddFileFromStreamBrokenInputRewind(): void
    {
        $this->expectException(ResourceActionException::class);

<<<<<<< HEAD
        [,$stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            defaultEnableZeroHeader: false,
        );

        $fileStream = FaultInjectionResource::getResource(['stream_seek']);

        $zip->addFileFromStream('sample.txt', $fileStream, maxSize: 0);
    }

    public function testAddFileFromStreamUnseekableInputWithoutZeroHeader(): void
    {
        $this->expectException(StreamNotSeekableException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            defaultEnableZeroHeader: false,
        );

        if (file_exists('/dev/null')) {
            $streamUnseekable = fopen('/dev/null', 'w+');
        } elseif (file_exists('NUL')) {
            $streamUnseekable = fopen('NUL', 'w+');
        } else {
            $this->markTestSkipped('Needs file /dev/null');
        }

        $zip->addFileFromStream('sample.txt', $streamUnseekable, maxSize: 2);
    }

    public function testAddFileFromStreamUnseekableInputWithZeroHeader(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            defaultEnableZeroHeader: true,
            defaultCompressionMethod: CompressionMethod::STORE,
        );

        $streamUnseekable = StreamWrapper::getResource(new class ('test') extends EndlessCycleStream {
            public function isSeekable(): bool
            {
                return false;
            }

            public function seek(int $offset, int $whence = SEEK_SET): void
            {
                throw new RuntimeException('Not seekable');
            }
        });

        $zip->addFileFromStream('sample.txt', $streamUnseekable, maxSize: 7);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt'], $files);

        $this->assertSame(filesize($tmpDir . '/sample.txt'), 7);
    }

    public function testAddFileFromStreamWithStorageMethod(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $streamExample = fopen('php://temp', 'wb+');
        fwrite($streamExample, 'Sample String Data');
        rewind($streamExample); // move the pointer back to the beginning of file.
        $zip->addFileFromStream('sample.txt', $streamExample, compressionMethod: CompressionMethod::STORE);
        fclose($streamExample);

        $streamExample2 = fopen('php://temp', 'bw+');
        fwrite($streamExample2, 'More Simple Sample Data');
        rewind($streamExample2); // move the pointer back to the beginning of file.
        $zip->addFileFromStream('test/sample.txt', $streamExample2, compressionMethod: CompressionMethod::DEFLATE);
        fclose($streamExample2);

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $zipArchive = new ZipArchive();
        $zipArchive->open($tmp);
=======

        $zipArchive = new ZipArchive();
        $zipArchive->open($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $sample1 = $zipArchive->statName('sample.txt');
        $this->assertSame(CompressionMethod::STORE->value, $sample1['comp_method']);

        $sample2 = $zipArchive->statName('test/sample.txt');
        $this->assertSame(CompressionMethod::DEFLATE->value, $sample2['comp_method']);

        $zipArchive->close();
    }

    public function testAddFileFromPsr7Stream(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $body = 'Sample String Data';
        $response = new Response(200, [], $body);

        $zip->addFileFromPsr7Stream('sample.json', $response->getBody());
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.json'], $files);
        $this->assertStringEqualsFile($tmpDir . '/sample.json', $body);
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
    public function testAddLargeFileFromPsr7Stream(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    #[Group('slow')]
    public function testAddLargeFileFromPsr7Stream(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: true,
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: new EndlessCycleStream('0'),
            maxSize: 0x100000000,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.json'], $files);
        $this->assertFileIsReadable($tmpDir . '/sample.json');
        $this->assertStringStartsWith('000000', file_get_contents(filename: $tmpDir . '/sample.json', length: 20));
    }

    public function testContinueFinishedZip(): void
    {
        $this->expectException(RuntimeException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );
        $zip->finish();

        $zip->addFile('sample.txt', '1234');
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
=======
    #[Group('slow')]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function testManyFilesWithoutZip64(): void
    {
        $this->expectException(OverflowException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: false,
        );

        for ($i = 0; $i <= 0xFFFF; $i++) {
            $zip->addFile('sample' . $i, '');
        }

        $zip->finish();
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
    public function testManyFilesWithZip64(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    #[Group('slow')]
    public function testManyFilesWithZip64(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: true,
        );

        for ($i = 0; $i <= 0xFFFF; $i++) {
            $zip->addFile('sample' . $i, '');
        }

        $zip->finish();

<<<<<<< HEAD
        $tmpDir = $this->validateAndExtractZip($tmp);
=======
        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(count($files), 0x10000);
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
=======
    #[Group('slow')]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function testLongZipWithout64(): void
    {
        $this->expectException(OverflowException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: false,
            defaultCompressionMethod: CompressionMethod::STORE,
        );

        for ($i = 0; $i < 4; $i++) {
            $zip->addFileFromPsr7Stream(
                fileName: 'sample' . $i,
                stream: new EndlessCycleStream('0'),
                maxSize: 0xFFFFFFFF,
                compressionMethod: CompressionMethod::STORE,
                lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
            );
        }
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
    public function testLongZipWith64(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    #[Group('slow')]
    public function testLongZipWith64(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: true,
            defaultCompressionMethod: CompressionMethod::STORE,
        );

        for ($i = 0; $i < 4; $i++) {
            $zip->addFileFromPsr7Stream(
                fileName: 'sample' . $i,
                stream: new EndlessCycleStream('0'),
                maxSize: 0x5FFFFFFF,
                compressionMethod: CompressionMethod::STORE,
                lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
            );
        }

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample0', 'sample1', 'sample2', 'sample3'], $files);
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
=======
    #[Group('slow')]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function testAddLargeFileWithoutZip64WithZeroHeader(): void
    {
        $this->expectException(OverflowException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: false,
            defaultEnableZeroHeader: true,
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: new EndlessCycleStream('0'),
            maxSize: 0x100000000,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
    public function testAddsZip64HeaderWhenNeeded(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    #[Group('slow')]
    public function testAddsZip64HeaderWhenNeeded(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: true,
            defaultEnableZeroHeader: false,
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: new EndlessCycleStream('0'),
            maxSize: 0x100000000,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );

        $zip->finish();

<<<<<<< HEAD
        $tmpDir = $this->validateAndExtractZip($tmp);
        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(['sample.json'], $files);
        $this->assertFileContains($tmp, PackField::pack(
=======
        $tmpDir = $this->validateAndExtractZip($this->tempfile);
        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(['sample.json'], $files);
        $this->assertFileContains($this->tempfile, PackField::pack(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            new PackField(format: 'V', value: 0x06064b50)
        ));
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
    public function testDoesNotAddZip64HeaderWhenNotNeeded(): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
    #[Group('slow')]
    public function testDoesNotAddZip64HeaderWhenNotNeeded(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: true,
            defaultEnableZeroHeader: false,
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: new EndlessCycleStream('0'),
            maxSize: 0x10,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );

        $zip->finish();

<<<<<<< HEAD
        $tmpDir = $this->validateAndExtractZip($tmp);
        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(['sample.json'], $files);
        $this->assertFileDoesNotContain($tmp, PackField::pack(
=======
        $tmpDir = $this->validateAndExtractZip($this->tempfile);
        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(['sample.json'], $files);
        $this->assertFileDoesNotContain($this->tempfile, PackField::pack(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            new PackField(format: 'V', value: 0x06064b50)
        ));
    }

<<<<<<< HEAD
    /**
     * @group slow
     */
=======
    #[Group('slow')]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function testAddLargeFileWithoutZip64WithoutZeroHeader(): void
    {
        $this->expectException(OverflowException::class);

<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
            enableZip64: false,
            defaultEnableZeroHeader: false,
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: new EndlessCycleStream('0'),
            maxSize: 0x100000000,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );
    }

    public function testAddFileFromPsr7StreamWithOutputToPsr7Stream(): void
    {
<<<<<<< HEAD
        [$tmp, $resource] = $this->getTmpFileStream();
        $psr7OutputStream = new ResourceStream($resource);

=======
        $psr7OutputStream = new ResourceStream($this->tempfileStream);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $zip = new ZipStream(
            outputStream: $psr7OutputStream,
            sendHttpHeaders: false,
        );

        $body = 'Sample String Data';
        $response = new Response(200, [], $body);

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: $response->getBody(),
            compressionMethod: CompressionMethod::STORE,
        );
        $zip->finish();
        $psr7OutputStream->close();

<<<<<<< HEAD
        $tmpDir = $this->validateAndExtractZip($tmp);
=======
        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $files = $this->getRecursiveFileList($tmpDir);

        $this->assertSame(['sample.json'], $files);
        $this->assertStringEqualsFile($tmpDir . '/sample.json', $body);
    }

    public function testAddFileFromPsr7StreamWithFileSizeSet(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $body = 'Sample String Data';
        $fileSize = strlen($body);
        // Add fake padding
        $fakePadding = "\0\0\0\0\0\0";
        $response = new Response(200, [], $body . $fakePadding);

        $zip->addFileFromPsr7Stream(
            fileName: 'sample.json',
            stream: $response->getBody(),
            compressionMethod: CompressionMethod::STORE,
            maxSize: $fileSize
        );
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.json'], $files);
        $this->assertStringEqualsFile($tmpDir . '/sample.json', $body);
    }

    public function testCreateArchiveHeaders(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $headers = [];

        $httpHeaderCallback = function (string $header) use (&$headers) {
            $headers[] = $header;
        };

        $zip = new ZipStream(
<<<<<<< HEAD
            outputStream: $stream,
=======
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: true,
            outputName: 'example.zip',
            httpHeaderCallback: $httpHeaderCallback,
        );

        $zip->addFile(
            fileName: 'sample.json',
            data: 'foo',
        );
        $zip->finish();
<<<<<<< HEAD
        fclose($stream);
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $this->assertContains('Content-Type: application/x-zip', $headers);
        $this->assertContains("Content-Disposition: attachment; filename*=UTF-8''example.zip", $headers);
        $this->assertContains('Pragma: public', $headers);
        $this->assertContains('Cache-Control: public, must-revalidate', $headers);
        $this->assertContains('Content-Transfer-Encoding: binary', $headers);
    }

    public function testCreateArchiveWithFlushOptionSet(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            flushOutput: true,
            sendHttpHeaders: false,
        );

        $zip->addFile('sample.txt', 'Sample String Data');
        $zip->addFile('test/sample.txt', 'More Simple Sample Data');

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt', 'test' . DIRECTORY_SEPARATOR . 'sample.txt'], $files);

        $this->assertStringEqualsFile($tmpDir . '/sample.txt', 'Sample String Data');
        $this->assertStringEqualsFile($tmpDir . '/test/sample.txt', 'More Simple Sample Data');
    }

    public function testCreateArchiveWithOutputBufferingOffAndFlushOptionSet(): void
    {
        // WORKAROUND (1/2): remove phpunit's output buffer in order to run test without any buffering
        ob_end_flush();
        $this->assertSame(0, ob_get_level());

<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            flushOutput: true,
            sendHttpHeaders: false,
        );

        $zip->addFile('sample.txt', 'Sample String Data');

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->assertStringEqualsFile($tmpDir . '/sample.txt', 'Sample String Data');

        // WORKAROUND (2/2): add back output buffering so that PHPUnit doesn't complain that it is missing
        ob_start();
    }

    public function testAddEmptyDirectory(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
=======
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            sendHttpHeaders: false,
        );

        $zip->addDirectory('foo');

        $zip->finish();
<<<<<<< HEAD
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);
=======

        $tmpDir = $this->validateAndExtractZip($this->tempfile);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $files = $this->getRecursiveFileList($tmpDir, includeDirectories: true);

        $this->assertContains('foo', $files);

        $this->assertFileExists($tmpDir . DIRECTORY_SEPARATOR . 'foo');
        $this->assertDirectoryExists($tmpDir . DIRECTORY_SEPARATOR . 'foo');
    }

    public function testAddFileSimulate(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultEnableZeroHeader: true,
<<<<<<< HEAD
                outputStream: $stream,
=======
                outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $zip->addFile('sample.txt', 'Sample String Data');
            $zip->addFile('test/sample.txt', 'More Simple Sample Data');

            return $zip->finish();
        };


        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);

        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithMaxSize(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultCompressionMethod: CompressionMethod::STORE,
                defaultEnableZeroHeader: true,
<<<<<<< HEAD
                outputStream: $stream,
=======
                outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $zip->addFile('sample.txt', 'Sample String Data', maxSize: 0);

            return $zip->finish();
        };


        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);

        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithFstat(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultCompressionMethod: CompressionMethod::STORE,
                defaultEnableZeroHeader: true,
<<<<<<< HEAD
                outputStream: $stream,
=======
                outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $zip->addFile('sample.txt', 'Sample String Data');
            $zip->addFile('test/sample.txt', 'More Simple Sample Data');

            return $zip->finish();
        };


        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);

        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithExactSizeZero(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultCompressionMethod: CompressionMethod::STORE,
                defaultEnableZeroHeader: true,
<<<<<<< HEAD
                outputStream: $stream,
=======
                outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $zip->addFile('sample.txt', 'Sample String Data', exactSize: 18);

            return $zip->finish();
        };


        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);

        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithExactSizeInitial(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultCompressionMethod: CompressionMethod::STORE,
                defaultEnableZeroHeader: false,
<<<<<<< HEAD
                outputStream: $stream,
=======
                outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $zip->addFile('sample.txt', 'Sample String Data', exactSize: 18);

            return $zip->finish();
        };

        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);

        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithZeroSizeInFstat(): void
    {
<<<<<<< HEAD
        [, $stream] = $this->getTmpFileStream();

        $create = function (OperationMode $operationMode) use ($stream): int {
=======
        $create = function (OperationMode $operationMode): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $zip = new ZipStream(
                sendHttpHeaders: false,
                operationMode: $operationMode,
                defaultCompressionMethod: CompressionMethod::STORE,
                defaultEnableZeroHeader: false,
<<<<<<< HEAD
                outputStream: $stream,
            );

            $zip->addFileFromPsr7Stream('sample.txt', new class () implements StreamInterface {
=======
                outputStream: $this->tempfileStream,
            );

            $zip->addFileFromPsr7Stream('sample.txt', new class implements StreamInterface {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                public $pos = 0;

                public function __toString(): string
                {
                    return 'test';
                }

<<<<<<< HEAD
                public function close(): void
                {
                }

                public function detach()
                {
                }
=======
                public function close(): void {}

                public function detach() {}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                public function getSize(): ?int
                {
                    return null;
                }

                public function tell(): int
                {
                    return $this->pos;
                }

                public function eof(): bool
                {
                    return $this->pos >= 4;
                }

                public function isSeekable(): bool
                {
                    return true;
                }

                public function seek(int $offset, int $whence = SEEK_SET): void
                {
                    $this->pos = $offset;
                }

                public function rewind(): void
                {
                    $this->pos = 0;
                }

                public function isWritable(): bool
                {
                    return false;
                }

                public function write(string $string): int
                {
                    return 0;
                }

                public function isReadable(): bool
                {
                    return true;
                }

                public function read(int $length): string
                {
                    $data = substr('test', $this->pos, $length);
                    $this->pos += strlen($data);
                    return $data;
                }

                public function getContents(): string
                {
                    return $this->read(4);
                }

                public function getMetadata(?string $key = null)
                {
                    return $key !== null ? null : [];
                }
            });

            return $zip->finish();
        };

        $sizeExpected = $create(OperationMode::NORMAL);
        $sizeActual = $create(OperationMode::SIMULATE_LAX);


        $this->assertEquals($sizeExpected, $sizeActual);
    }

    public function testAddFileSimulateWithWrongExactSize(): void
    {
        $this->expectException(FileSizeIncorrectException::class);

        $zip = new ZipStream(
            sendHttpHeaders: false,
            operationMode: OperationMode::SIMULATE_LAX,
        );

        $zip->addFile('sample.txt', 'Sample String Data', exactSize: 1000);
    }

    public function testAddFileSimulateStrictZero(): void
    {
        $this->expectException(SimulationFileUnknownException::class);

        $zip = new ZipStream(
            sendHttpHeaders: false,
            operationMode: OperationMode::SIMULATE_STRICT,
            defaultEnableZeroHeader: true
        );

        $zip->addFile('sample.txt', 'Sample String Data');
    }

    public function testAddFileSimulateStrictInitial(): void
    {
        $this->expectException(SimulationFileUnknownException::class);

        $zip = new ZipStream(
            sendHttpHeaders: false,
            operationMode: OperationMode::SIMULATE_STRICT,
            defaultEnableZeroHeader: false
        );

        $zip->addFile('sample.txt', 'Sample String Data');
    }

    public function testAddFileCallbackStrict(): void
    {
        $this->expectException(SimulationFileUnknownException::class);

        $zip = new ZipStream(
            sendHttpHeaders: false,
            operationMode: OperationMode::SIMULATE_STRICT,
            defaultEnableZeroHeader: false
        );

        $zip->addFileFromCallback('sample.txt', callback: function () {
            return '';
        });
    }

    public function testAddFileCallbackLax(): void
    {
<<<<<<< HEAD

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $zip = new ZipStream(
            operationMode: OperationMode::SIMULATE_LAX,
            defaultEnableZeroHeader: false,
            sendHttpHeaders: false,
        );

        $zip->addFileFromCallback('sample.txt', callback: function () {
            return 'Sample String Data';
        });

        $size = $zip->finish();

        $this->assertEquals($size, 142);
    }

    public function testExecuteSimulation(): void
    {
<<<<<<< HEAD
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            operationMode: OperationMode::SIMULATE_LAX,
            defaultEnableZeroHeader: false,
            sendHttpHeaders: false,
            outputStream: $stream,
=======
        $zip = new ZipStream(
            operationMode: OperationMode::SIMULATE_STRICT,
            defaultCompressionMethod: CompressionMethod::STORE,
            defaultEnableZeroHeader: false,
            sendHttpHeaders: false,
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );

        $zip->addFileFromCallback(
            'sample.txt',
            exactSize: 18,
            callback: function () {
                return 'Sample String Data';
            }
        );

<<<<<<< HEAD
        $size = $zip->finish();

        $this->assertEquals(filesize($tmp), 0);

        $zip->executeSimulation();
        fclose($stream);

        clearstatcache();

        $this->assertEquals(filesize($tmp), $size);

        $tmpDir = $this->validateAndExtractZip($tmp);

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt'], $files);
=======
        $zip->addFileFromCallback(
            '.gitkeep',
            exactSize: 0,
            callback: function () {
                return '';
            }
        );

        $size = $zip->finish();

        $this->assertEquals(filesize($this->tempfile), 0);

        $zip->executeSimulation();

        clearstatcache();

        $this->assertEquals(filesize($this->tempfile), $size);

        $tmpDir = $this->validateAndExtractZip($this->tempfile);

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['.gitkeep', 'sample.txt'], $files);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function testExecuteSimulationBeforeFinish(): void
    {
        $this->expectException(RuntimeException::class);

<<<<<<< HEAD

        [, $stream] = $this->getTmpFileStream();

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $zip = new ZipStream(
            operationMode: OperationMode::SIMULATE_LAX,
            defaultEnableZeroHeader: false,
            sendHttpHeaders: false,
<<<<<<< HEAD
            outputStream: $stream,
=======
            outputStream: $this->tempfileStream,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );

        $zip->executeSimulation();
    }

<<<<<<< HEAD
=======
    #[Group('slow')]
    public function testSimulationWithLargeZip64AndZeroHeader(): void
    {
        $zip = new ZipStream(
            outputStream: $this->tempfileStream,
            sendHttpHeaders: false,
            operationMode: OperationMode::SIMULATE_STRICT,
            defaultCompressionMethod: CompressionMethod::STORE,
            outputName: 'archive.zip',
            enableZip64: true,
            defaultEnableZeroHeader: true
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'large',
            stream: new EndlessCycleStream('large'),
            exactSize: 0x120000000, // ~5gb
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );

        $zip->addFileFromPsr7Stream(
            fileName: 'small',
            stream: new EndlessCycleStream('small'),
            exactSize: 0x20,
            compressionMethod: CompressionMethod::STORE,
            lastModificationDateTime: new DateTimeImmutable('2022-01-01 01:01:01Z'),
        );

        $forecastedSize = $zip->finish();

        $zip->executeSimulation();

        $this->assertSame($forecastedSize, filesize($this->tempfile));

        $this->validateAndExtractZip($this->tempfile);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function addLargeFileFileFromPath(CompressionMethod $compressionMethod, $zeroHeader, $zip64): void
    {
        [$tmp, $stream] = $this->getTmpFileStream();

        $zip = new ZipStream(
            outputStream: $stream,
            sendHttpHeaders: false,
            defaultEnableZeroHeader: $zeroHeader,
            enableZip64: $zip64,
        );

        [$tmpExample, $streamExample] = $this->getTmpFileStream();
        for ($i = 0; $i <= 10000; $i++) {
<<<<<<< HEAD
            fwrite($streamExample, sha1((string)$i));
=======
            fwrite($streamExample, sha1((string) $i));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            if ($i % 100 === 0) {
                fwrite($streamExample, "\n");
            }
        }
        fclose($streamExample);
        $shaExample = sha1_file($tmpExample);
        $zip->addFileFromPath('sample.txt', $tmpExample);
        unlink($tmpExample);

        $zip->finish();
        fclose($stream);

        $tmpDir = $this->validateAndExtractZip($tmp);

        $files = $this->getRecursiveFileList($tmpDir);
        $this->assertSame(['sample.txt'], $files);

        $this->assertSame(sha1_file($tmpDir . '/sample.txt'), $shaExample, "SHA-1 Mismatch Method: {$compressionMethod->value}");
<<<<<<< HEAD
=======

        unlink($tmp);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
