<?php

namespace Ebay\Common;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-27 at 16:04:25.
 */
class ResponseTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Response
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Response;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Ebay\Common\Response::setResponseBody
     * @todo   Implement testSetResponseBody().
     */
    public function testSetResponseBody() {
       
        $reflection = new \ReflectionClass($this->object);
 
        $reflection_property = $reflection->getProperty('responseBody');
        $reflection_property->setAccessible(true);
        
        $this->object->setResponseBody('Test');
        
        $this->assertEquals('Test',$reflection_property->getValue($this->object));  
    }

    /**
     * @covers Ebay\Common\Response::setCurlInformation
     * @todo   Implement testSetCurlInformation().
     */
    public function testSetCurlInformation() {
        
        $reflection = new \ReflectionClass($this->object);
 
        $reflection_property = $reflection->getProperty('curlInformation');
        $reflection_property->setAccessible(true);
        
        $this->object->setCurlInformation(array('name'=>'Name'));
        
        $information = $reflection_property->getValue($this->object);
        
        $this->assertEquals('Name',$information['name']);  
    }

    /**
     * @covers Ebay\Common\Response::getResponseBody
     * @todo   Implement testGetResponseBody().
     */
    public function testGetResponseBody() {
        
        $reflection = new \ReflectionClass($this->object);
 
        $reflection_property = $reflection->getProperty('responseBody');
        $reflection_property->setAccessible(true);
        $reflection_property->setValue($this->object,"Name");
 
        $this->assertEquals("Name",$this->object->getResponseBody());
    }

    /**
     * @covers Ebay\Common\Response::getCurlInformation
     * @todo   Implement testGetCurlInformation().
     */
    public function testGetCurlInformation() {
        
        $reflection = new \ReflectionClass($this->object);
 
        $reflection_property = $reflection->getProperty('curlInformation');
        $reflection_property->setAccessible(true);
        $reflection_property->setValue($this->object,array('name' => 'Name','value' => 'Value'));
        
        $information = $this->object->getCurlInformation();        
 
        $this->assertEquals("Name",$information['name']);
        $this->assertEquals("Value",$information['value']);
    }

}