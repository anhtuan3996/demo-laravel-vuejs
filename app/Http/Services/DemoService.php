<?php

namespace App\Http\Services;

use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class DemoService
{

    /**
     * Get first chart data
     * @return array
     */
    public function getFirstChartData(): array
    {
        $json = '{"labels": ["January", "February", "March", "April", "May", "June", "July"],"data": [65, 59, 80, 81, 56, 55, 40]}';

        $rawData = json_decode($json, true);

        return [
            'labels' => $rawData['labels'],
            'datasets' => [
                [
                    'label' => "My First Dataset",
                    'data' => $rawData['data']
                ]
            ]
        ];
    }

    /**
     * Get second chart data
     * @return array
     */
    public function getSecondChartData(): array
    {

        $items = Data::all();

        $labels = [];
        $data = [];

        foreach ($items as $item) {
            $labels[] = Carbon::parse($item->date)->format('F');
            $data[] = $item->value;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => "My First Dataset",
                    'data' => $data
                ]
            ]
        ];
    }
}
