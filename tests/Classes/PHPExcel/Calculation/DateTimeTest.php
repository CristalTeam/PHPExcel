<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class DateTimeTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerDATE')]
    public function testDATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DATE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerDATE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/DATE.data');
    }

    public function testDATEtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::DATE(2012, 1, 31);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(1327968000, $result, null, 1E-8);
    }

    public function testDATEtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::DATE(2012, 1, 31);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('d-M-Y'), '31-Jan-2012');
    }

    public function testDATEwith1904Calendar(): void
    {
        PHPExcel_Shared_Date::setExcelCalendar(PHPExcel_Shared_Date::CALENDAR_MAC_1904);
        $result = PHPExcel_Calculation_DateTime::DATE(1918, 11, 11);
        PHPExcel_Shared_Date::setExcelCalendar(PHPExcel_Shared_Date::CALENDAR_WINDOWS_1900);
        $this->assertEquals($result, 5428);
    }

    public function testDATEwith1904CalendarError(): void
    {
        PHPExcel_Shared_Date::setExcelCalendar(PHPExcel_Shared_Date::CALENDAR_MAC_1904);
        $result = PHPExcel_Calculation_DateTime::DATE(1901, 1, 31);
        PHPExcel_Shared_Date::setExcelCalendar(PHPExcel_Shared_Date::CALENDAR_WINDOWS_1900);
        $this->assertEquals($result, '#NUM!');
    }

    #[DataProvider('providerDATEVALUE')]
    public function testDATEVALUE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DATEVALUE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerDATEVALUE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/DATEVALUE.data');
    }

    public function testDATEVALUEtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::DATEVALUE('2012-1-31');
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(1327968000, $result, null, 1E-8);
    }

    public function testDATEVALUEtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::DATEVALUE('2012-1-31');
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('d-M-Y'), '31-Jan-2012');
    }

    #[DataProvider('providerYEAR')]
    public function testYEAR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'YEAR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerYEAR(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/YEAR.data');
    }

    #[DataProvider('providerMONTH')]
    public function testMONTH(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'MONTHOFYEAR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerMONTH(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/MONTH.data');
    }

    #[DataProvider('providerWEEKNUM')]
    public function testWEEKNUM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'WEEKOFYEAR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerWEEKNUM(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/WEEKNUM.data');
    }

    #[DataProvider('providerWEEKDAY')]
    public function testWEEKDAY(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DAYOFWEEK'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerWEEKDAY(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/WEEKDAY.data');
    }

    #[DataProvider('providerDAY')]
    public function testDAY(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DAYOFMONTH'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerDAY(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/DAY.data');
    }

    #[DataProvider('providerTIME')]
    public function testTIME(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'TIME'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerTIME(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/TIME.data');
    }

    public function testTIMEtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::TIME(7, 30, 20);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(27020, $result, null, 1E-8);
    }

    public function testTIMEtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::TIME(7, 30, 20);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('H:i:s'), '07:30:20');
    }

    #[DataProvider('providerTIMEVALUE')]
    public function testTIMEVALUE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'TIMEVALUE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerTIMEVALUE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/TIMEVALUE.data');
    }

    public function testTIMEVALUEtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::TIMEVALUE('7:30:20');
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(23420, $result, null, 1E-8);
    }

    public function testTIMEVALUEtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::TIMEVALUE('7:30:20');
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('H:i:s'), '07:30:20');
    }

    #[DataProvider('providerHOUR')]
    public function testHOUR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'HOUROFDAY'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerHOUR(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/HOUR.data');
    }

    #[DataProvider('providerMINUTE')]
    public function testMINUTE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'MINUTEOFHOUR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerMINUTE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/MINUTE.data');
    }

    #[DataProvider('providerSECOND')]
    public function testSECOND(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'SECONDOFMINUTE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerSECOND(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/SECOND.data');
    }

    #[DataProvider('providerNETWORKDAYS')]
    public function testNETWORKDAYS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'NETWORKDAYS'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerNETWORKDAYS(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/NETWORKDAYS.data');
    }

    #[DataProvider('providerWORKDAY')]
    public function testWORKDAY(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'WORKDAY'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerWORKDAY(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/WORKDAY.data');
    }

    #[DataProvider('providerEDATE')]
    public function testEDATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'EDATE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerEDATE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/EDATE.data');
    }

    public function testEDATEtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::EDATE('2012-1-26', -1);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(1324857600, $result, null, 1E-8);
    }

    public function testEDATEtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::EDATE('2012-1-26', -1);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('d-M-Y'), '26-Dec-2011');
    }

    #[DataProvider('providerEOMONTH')]
    public function testEOMONTH(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'EOMONTH'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerEOMONTH(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/EOMONTH.data');
    }

    public function testEOMONTHtoPHP(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC);
        $result = PHPExcel_Calculation_DateTime::EOMONTH('2012-1-26', -1);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        $this->assertEquals(1325289600, $result, null, 1E-8);
    }

    public function testEOMONTHtoPHPObject(): void
    {
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT);
        $result = PHPExcel_Calculation_DateTime::EOMONTH('2012-1-26', -1);
        PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'DateTime'));
        //    ... with the correct value
        $this->assertEquals($result->format('d-M-Y'), '31-Dec-2011');
    }

    #[DataProvider('providerDATEDIF')]
    public function testDATEDIF(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DATEDIF'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerDATEDIF(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/DATEDIF.data');
    }

    #[DataProvider('providerDAYS360')]
    public function testDAYS360(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'DAYS360'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerDAYS360(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/DAYS360.data');
    }

    #[DataProvider('providerYEARFRAC')]
    public function testYEARFRAC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_DateTime', 'YEARFRAC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerYEARFRAC(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/DateTime/YEARFRAC.data');
    }
}
