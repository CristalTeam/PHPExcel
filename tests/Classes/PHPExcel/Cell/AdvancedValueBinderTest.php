<?php

use PHPUnit\Framework\Attributes\DataProvider;

final class AdvancedValueBinderTest extends PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    public static function provider(): array
    {
        if (!class_exists('PHPExcel_Style_NumberFormat')) {
            $this->setUp();
        }
        $currencyUSD = PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE;
        $currencyEURO = str_replace('$', '€', PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);

        return [
            ['10%', 0.1, PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00, ',', '.', '$'],
            ['$10.11', 10.11, $currencyUSD, ',', '.', '$'],
            ['$1,010.12', 1010.12, $currencyUSD, ',', '.', '$'],
            ['$20,20', 20.2, $currencyUSD, '.', ',', '$'],
            ['$2.020,20', 2020.2, $currencyUSD, '.', ',', '$'],
            ['€2.020,20', 2020.2, $currencyEURO, '.', ',', '€'],
            ['€ 2.020,20', 2020.2, $currencyEURO, '.', ',', '€'],
            ['€2,020.22', 2020.22, $currencyEURO, ',', '.', '€'],
        ];
    }

    #[DataProvider('provider')]
    public function testCurrency($value, $valueBinded, $format, $thousandsSeparator, $decimalSeparator, $currencyCode): void
    {
        $sheet = $this->getMockBuilder('PHPExcel_Worksheet')
            ->onlyMethods(['getStyle', 'getCellCacheController'])
            ->getMock();

        $style = $this->getMockBuilder('PHPExcel_Style')
            ->onlyMethods(['getNumberFormat'])
            ->getMock();

        $format = $this->getMockBuilder('PHPExcel_Style_NumberFormat')
            ->onlyMethods(['setFormatCode'])
            ->getMock();

        $style->expects($this->once())
            ->method('getNumberFormat')
            ->willReturn($format);

        $cache = $this->getMockBuilder('PHPExcel_CachedObjectStorage_Memory')
            ->disableOriginalConstructor()
            ->getMock();

        $cache->expects($this->any())
            ->method('getParent')
            ->willReturn($sheet);

        $sheet->expects($this->once())
            ->method('getStyle')
            ->willReturn($style);

        $sheet->expects($this->any())
            ->method('getCellCacheController')
            ->willReturn($cache);

        PHPExcel_Shared_String::setCurrencyCode($currencyCode);
        PHPExcel_Shared_String::setDecimalSeparator($decimalSeparator);
        PHPExcel_Shared_String::setThousandsSeparator($thousandsSeparator);

        $cell = new PHPExcel_Cell(null, PHPExcel_Cell_DataType::TYPE_STRING, $sheet);

        $binder = new PHPExcel_Cell_AdvancedValueBinder();
        $binder->bindValue($cell, $value);
        $this->assertEquals($valueBinded, $cell->getValue());
    }
}
