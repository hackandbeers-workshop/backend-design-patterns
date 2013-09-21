<?php
interface ReportGenerator
{
    function generateReport();
}

class HTML implements ReportGenerator
{
    public function generateReport()
    {
        // HTML stuff //
    }
}

class CSV implements ReportGenerator
{
    public function generateReport()
    {
        // CSV stuff //
    }
}

class WarehouseApplication implements ReportGenerator
{
    protected $report;

    public function __construct(ReportGenerator $report)
    {
        $this->report = $report;
    }

    public function generateReport()
    {
        $this->report->generateReport();
    }
}

$warehouse = new WarehouseApplication(new HTML());
$warehouse->generateReport();