<?php

namespace Arbor\Test\Model;

use Arbor\Model\ModelBase;
use PHPUnit\Framework\TestCase;

/**
 * @covers Arbor\Model
 */
class LoaderTest extends TestCase
{
    private $basePath;

    public function setUp(): void
    {
        $this->basePath = dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, ['src', 'Arbor', 'Model']);
    }

    /**
     * @param string $dirName
     * @dataProvider directoryProvider
     * @covers Arbor\Model
     */
    public function testLoadModels(string $dirName = '')
    {
        $files = $this->loadFiles($this->basePath . DIRECTORY_SEPARATOR . $dirName);
        $namespace = $dirName === '' ? '\\Arbor\\Model' : '\\Arbor\Model\\' . $dirName;
        foreach ($files as $fileName) {
            $className = "$namespace\\{$fileName}";
            $class = new $className;
            $this->assertInstanceOf(ModelBase::class, $class);
        }
    }

    public static function directoryProvider()
    {
        return [
            [''],
            ['UkDfe'],
            ['UkIlr'],
            ['UkJcq'],
        ];
    }

    private function loadFiles($path)
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

            $models[] = substr($file, 0, -4);
        }

        return $models;
    }
}
