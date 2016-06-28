<?php

class ExampleTest extends BaseTest
{
    /** @test */
    public function example_test()
    {
        $this->visit('/')
            ->see('App Name');
    }
}
