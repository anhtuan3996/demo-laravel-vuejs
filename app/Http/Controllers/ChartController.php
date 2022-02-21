<?php
namespace App\Http\Controllers;

use App\Http\Services\DemoService;

class ChartController extends ApiController {
    private $demoService;
    public function __construct(DemoService $demoService)
    {
        $this->demoService = $demoService;
    }

    /**
     * Get firt chart data
     * TODO: We will implement common exception
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFirstChart() {
        $result = $this->demoService->getFirstChartData();

        return $this->success($result);
    }

    /**
     * Get second chart data
     * TODO: We will implement common exception
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSecondChart() {
        $result = $this->demoService->getSecondChartData();

        return $this->success($result);
    }
}
