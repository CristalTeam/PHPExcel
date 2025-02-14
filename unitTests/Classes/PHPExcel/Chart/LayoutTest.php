<?php

use PHPUnit\Framework\TestCase;

class LayoutTest extends TestCase
{
    public function testSetLayoutTarget()
    {
        $LayoutTargetValue = 'String';

        $testInstance = new PHPExcel_Chart_Layout;

        $result = $testInstance->setLayoutTarget($LayoutTargetValue);
        $this->assertTrue($result instanceof PHPExcel_Chart_Layout);
    }

    public function testGetLayoutTarget()
    {
        $LayoutTargetValue = 'String';

        $testInstance = new PHPExcel_Chart_Layout;
        $setValue = $testInstance->setLayoutTarget($LayoutTargetValue);

        $result = $testInstance->getLayoutTarget();
        $this->assertEquals($LayoutTargetValue, $result);
    }
}
