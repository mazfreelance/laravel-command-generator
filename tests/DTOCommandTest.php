<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;

class DTOCommandTest extends TestCase
{
    protected $filesystem;

    protected $command;

    public function setUp(): void
    {
        $this->filesystem = m::mock(Illuminate\Filesystem\Filesystem::class);
        $this->command = m::mock('Mazfreelance\LaravelCommandGenerator\Commands\DataTransferObjectCommand[argument]', [$this->filesystem]);
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
        $this->assertEquals("App\\DTO\\$class", $this->command->getClassName());
    }

    public function modelClassProvider()
    {
        return [
            ['User', 'UserDTO'],
        ];
    }
}
