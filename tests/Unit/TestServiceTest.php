<?php
declare(strict_types=1);
/**
 * テストケースの書き方サンプル
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Service\TestService;

class TestServiceTest extends TestCase
{
    /**
     * @var App\Service\TestService
     */
    private $model;

    public function setUp()
    {
        parent::setUp();
        $this->model = new TestService();
    }

    /**
     * @test
     */
    public function test_足し算()
    {
        $expected = 2;
        $actual = $this->model->add(1, 1);
        $this->assertTrue($expected === $actual);
    }
}
