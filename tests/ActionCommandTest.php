<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;

class ActionCommandTest extends TestCase
{
    protected $filesystem;

    protected $command;

    public function setUp(): void
    {
        $this->filesystem = m::mock(Illuminate\Filesystem\Filesystem::class);
        $this->command = m::mock('Mazfreelance\LaravelCommandGenerator\Commands\ActionCommand[argument]', [$this->filesystem]);
    }

    public function tearDown(): void
    {
        m::close();
    }

    /**
     * @dataProvider modelClassProvider
     */
    public function testMakeClassName($argument, $class)
    {
        $this->command->shouldReceive('argument')->andReturn($argument);
        $this->command->makeClassName();
        $this->assertEquals("App\\Actions\\$class", $this->command->getClassName());
    }

    public function modelClassProvider()
    {
        return [
            ['User', 'UserAction'],
        ];
    }
}
