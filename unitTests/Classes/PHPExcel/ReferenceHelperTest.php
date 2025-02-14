<?php

use PHPUnit\Framework\TestCase;

class ReferenceHelperTest extends TestCase
{
    public function testColumnSort()
    {
        $columnBase = $columnExpectedResult = [
            'A','B','Z',
            'AA','AB','AZ',
            'BA','BB','BZ',
            'ZA','ZB','ZZ',
            'AAA','AAB','AAZ',
            'ABA','ABB','ABZ',
            'AZA','AZB','AZZ',
            'BAA','BAB','BAZ',
            'BBA','BBB','BBZ',
            'BZA','BZB','BZZ'
        ];
        shuffle($columnBase);
        usort($columnBase, ['PHPExcel_ReferenceHelper','columnSort']);
        foreach ($columnBase as $key => $value) {
            $this->assertEquals($columnExpectedResult[$key], $value);
        }
    }

    public function testColumnReverseSort()
    {
        $columnBase = $columnExpectedResult = [
            'A','B','Z',
            'AA','AB','AZ',
            'BA','BB','BZ',
            'ZA','ZB','ZZ',
            'AAA','AAB','AAZ',
            'ABA','ABB','ABZ',
            'AZA','AZB','AZZ',
            'BAA','BAB','BAZ',
            'BBA','BBB','BBZ',
            'BZA','BZB','BZZ'
        ];
        shuffle($columnBase);
        $columnExpectedResult = array_reverse($columnExpectedResult);
        usort($columnBase, ['PHPExcel_ReferenceHelper','columnReverseSort']);
        foreach ($columnBase as $key => $value) {
            $this->assertEquals($columnExpectedResult[$key], $value);
        }
    }
}
