<?php

namespace Arbor\Test\Unit\Arbor\Model;

use Arbor\Model\ModelBase;
use PHPUnit\Framework\Attributes\CoversClassesThatExtendClass;
use PHPUnit\Framework\Attributes\CoversNamespace;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversNamespace('Arbor\\Model')]
#[CoversClassesThatExtendClass('Arbor\\Model')]
class LoaderTest extends TestCase
{
    private string $basePath;

    public function setUp(): void
    {
        $this->basePath = dirname(__DIR__, 4) . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, ['src', 'Arbor', 'Model']);
    }

    #[DataProvider('directoryProvider')]
    public function testLoadModels(string $dirName)
    {
        $files = $this->loadFiles($this->basePath . DIRECTORY_SEPARATOR . $dirName);
        $namespace = $dirName === '' ? '\\Arbor\\Model' : '\\Arbor\Model\\' . $dirName;
        foreach ($files as $fileName) {
            $className = "$namespace\\{$fileName}";
            $class = new $className;
            $this->assertInstanceOf(ModelBase::class, $class);
        }
    }

    public static function directoryProvider(): array
    {
        return [
            [''],
            ['UkDfe'],
            ['UkIlr'],
            ['UkJcq'],
        ];
    }

    private function loadFiles($path): array
    {
        $models = [];
        $files = scandir($path, SCANDIR_SORT_ASCENDING);

        foreach ($files as $file) {
            if (is_dir($path . DIRECTORY_SEPARATOR . $file)) {
                continue;
            }

            $notModels = [
                'ModelBase.php',
                'Collection.php',
                'Exception.php',
                'Hydrator.php',
            ];

            if (in_array($file, $notModels, true)) {
                continue;
            }

            $models[] = mb_substr($file, 0, -4);
        }

        return $models;
    }
}
