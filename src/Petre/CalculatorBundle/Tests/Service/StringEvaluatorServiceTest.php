<?php
/**
 * Created by JetBrains PhpStorm.
 * User: petre
 * Date: 11/18/13
 * Time: 7:17 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Petre\CalculatorBundle\Tests\Service;


use Petre\CalculatorBundle\Service\StringEvaluatorService;

class StringEvaluatorServiceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var StringEvaluatorService
     */
    protected $service;

    public function setUp() {
        parent::setUp();

        $this->service = new StringEvaluatorService();
    }

    public function testSanityCheck() {
        $testString = "1 + 1";
        $expectedResult = 2;

        $this->assertTrue($this->service->isValid($testString), "Sanity check test string is valid yet it was found invalid.");
        $actualResult = $this->service->compute($expectedResult);
        $this->assertEquals($expectedResult, $actualResult, "Sanity check has failed - 1 + 1 should always equal 2");
    }

    public function testBasicOperations() {
        // Test validity
        $this->assertTrue($this->service->isValid("1 * 2"), "Basic operation marked as incorrect");
        $this->assertTrue($this->service->isValid("4 / 2"), "Basic operation marked as incorrect");
        $this->assertTrue($this->service->isValid("4 - 2"), "Basic operation marked as incorrect");
        $this->assertTrue($this->service->isValid("4 + 2"), "Basic operation marked as incorrect");
        $this->assertTrue($this->service->isValid("4 % 2"), "Basic operation marked as incorrect");

        // Test operation result
        $testString = "1 * 2";
        $this->assertEquals(2, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "4 / 2";
        $this->assertEquals(2, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "4 - 2";
        $this->assertEquals(2, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "4 + 2";
        $this->assertEquals(6, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "4 % 2";
        $this->assertEquals(0, $this->service->compute($testString), "Basic operation result is not correct");
    }

    public function testNegativeNumbers() {
        $testString = "1 * -2";
        $this->assertEquals(-2, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "-2 * -2";
        $this->assertEquals(4, $this->service->compute($testString), "Basic operation result is not correct");

        $testString = "-1 - -1";
        $this->assertEquals(-2, $this->service->compute($testString), "Basic operation result is not correct");
    }
}