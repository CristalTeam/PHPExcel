<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class CellTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    #[DataProvider('providerColumnString')]
    public function testColumnIndexFromString(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','columnIndexFromString'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColumnString(): array
    {
        return new testDataFileIterator('rawTestData/ColumnString.data');
    }

    public function testColumnIndexFromStringTooLong(): void
    {
        $cellAddress = 'ABCD';
        try {
            $result = call_user_func(['PHPExcel_Cell','columnIndexFromString'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Column string index can not be longer than 3 characters');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testColumnIndexFromStringTooShort(): void
    {
        $cellAddress = '';
        try {
            $result = call_user_func(['PHPExcel_Cell','columnIndexFromString'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Column string index can not be empty');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    #[DataProvider('providerColumnIndex')]
    public function testStringFromColumnIndex(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','stringFromColumnIndex'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColumnIndex(): array
    {
        return new testDataFileIterator('rawTestData/ColumnIndex.data');
    }

    #[DataProvider('providerCoordinates')]
    public function testCoordinateFromString(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','coordinateFromString'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCoordinates(): array
    {
        return new testDataFileIterator('rawTestData/CellCoordinates.data');
    }

    public function testCoordinateFromStringWithRangeAddress(): void
    {
        $cellAddress = 'A1:AI2012';
        try {
            $result = call_user_func(['PHPExcel_Cell','coordinateFromString'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Cell coordinate string can not be a range of cells');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testCoordinateFromStringWithEmptyAddress(): void
    {
        $cellAddress = '';
        try {
            $result = call_user_func(['PHPExcel_Cell','coordinateFromString'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Cell coordinate can not be zero-length string');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testCoordinateFromStringWithInvalidAddress(): void
    {
        $cellAddress = 'AI';
        try {
            $result = call_user_func(['PHPExcel_Cell','coordinateFromString'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Invalid cell coordinate '.$cellAddress);
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    #[DataProvider('providerAbsoluteCoordinates')]
    public function testAbsoluteCoordinateFromString(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','absoluteCoordinate'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAbsoluteCoordinates(): array
    {
        return new testDataFileIterator('rawTestData/CellAbsoluteCoordinate.data');
    }

    public function testAbsoluteCoordinateFromStringWithRangeAddress(): void
    {
        $cellAddress = 'A1:AI2012';
        try {
            $result = call_user_func(['PHPExcel_Cell','absoluteCoordinate'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Cell coordinate string can not be a range of cells');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    #[DataProvider('providerAbsoluteReferences')]
    public function testAbsoluteReferenceFromString(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','absoluteReference'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAbsoluteReferences(): array
    {
        return new testDataFileIterator('rawTestData/CellAbsoluteReference.data');
    }

    public function testAbsoluteReferenceFromStringWithRangeAddress(): void
    {
        $cellAddress = 'A1:AI2012';
        try {
            $result = call_user_func(['PHPExcel_Cell','absoluteReference'], $cellAddress);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Cell coordinate string can not be a range of cells');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    #[DataProvider('providerSplitRange')]
    public function testSplitRange(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','splitRange'], $args);
        foreach ($result as $key => $split) {
            if (!is_array($expectedResult[$key])) {
                $this->assertEquals($expectedResult[$key], $split[0]);
            } else {
                $this->assertEquals($expectedResult[$key], $split);
            }
        }
    }

    public static function providerSplitRange(): array
    {
        return new testDataFileIterator('rawTestData/CellSplitRange.data');
    }

    #[DataProvider('providerBuildRange')]
    public function testBuildRange(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','buildRange'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBuildRange(): array
    {
        return new testDataFileIterator('rawTestData/CellBuildRange.data');
    }

    public function testBuildRangeInvalid(): void
    {
        $cellRange = '';
        try {
            $result = call_user_func(['PHPExcel_Cell','buildRange'], $cellRange);
        } catch (PHPExcel_Exception $e) {
            $this->assertEquals($e->getMessage(), 'Range does not contain any information');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    #[DataProvider('providerRangeBoundaries')]
    public function testRangeBoundaries(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','rangeBoundaries'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerRangeBoundaries(): array
    {
        return new testDataFileIterator('rawTestData/CellRangeBoundaries.data');
    }

    #[DataProvider('providerRangeDimension')]
    public function testRangeDimension(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','rangeDimension'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerRangeDimension(): array
    {
        return new testDataFileIterator('rawTestData/CellRangeDimension.data');
    }

    #[DataProvider('providerGetRangeBoundaries')]
    public function testGetRangeBoundaries(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','getRangeBoundaries'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerGetRangeBoundaries(): array
    {
        return new testDataFileIterator('rawTestData/CellGetRangeBoundaries.data');
    }

    #[DataProvider('providerExtractAllCellReferencesInRange')]
    public function testExtractAllCellReferencesInRange(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Cell','extractAllCellReferencesInRange'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerExtractAllCellReferencesInRange(): array
    {
        return new testDataFileIterator('rawTestData/CellExtractAllCellReferencesInRange.data');
    }
}
