<?php

namespace DetailTest\Gaufrette\Options;

class ModuleOptionsTest extends OptionsTestCase
{
    /**
     * @var \Detail\Gaufrette\Options\ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = $this->getOptions(
            'Detail\Gaufrette\Options\ModuleOptions',
            array(
                'getAdapterFactories',
                'setAdapterFactories',
            )
        );
    }

    public function testAdapterFactoriesCanBeSet()
    {
        $adapterFactories = array(
            'some-adapter-type' => 'Some/Adapter/Factory/Class',
        );

        $this->assertTrue(is_array($this->options->getAdapterFactories()));
        $this->assertEmpty($this->options->getAdapterFactories());

        $this->options->setAdapterFactories($adapterFactories);

        $this->assertEquals($adapterFactories, $this->options->getAdapterFactories());
    }
}
