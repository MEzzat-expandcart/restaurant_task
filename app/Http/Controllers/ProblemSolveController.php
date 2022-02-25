<?php

namespace App\Http\Controllers;
use App\Services\Contracts\IElementAppearService;
use App\Services\Contracts\ILowestValueService;
use App\Services\Contracts\ISequenceRangeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProblemSolveController extends Controller
{
    /**
     * @var ILowestValueService
     */
    private ILowestValueService $lowestValueService;
    /**
     * @var IElementAppearService
     */
    private IElementAppearService $elementAppearService;
    /**
     * @var ISequenceRangeService
     */
    private ISequenceRangeService $sequenceRangeService;

    /**
     * @param ILowestValueService $lowestValueService
     * @param IElementAppearService $elementAppearService
     */
    public function __construct(ILowestValueService $lowestValueService, IElementAppearService $elementAppearService,
                                ISequenceRangeService $sequenceRangeService)
    {
        $this->lowestValueService = $lowestValueService;
        $this->sequenceRangeService = $sequenceRangeService;
        $this->elementAppearService = $elementAppearService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function LowestValue(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            $input_array = $request->only(['arr_values']);
            $lowestValue = $this->lowestValueService->calculate($input_array);
            return response()->json(['status' => 'Success' , 'Lowest Value' => $lowestValue], 200);
        }
        return response()->json(['status' => 'Error'], 400);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function sequenceRange(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            $start = $request->only(['start_number']);
            $end = $request->only(['end_number']);
            $rangeWithOutFive = $this->sequenceRangeService->calculate($start, $end);
            return response()->json(['status' => 'Success' , 'Range Count Without 5 Is' => $rangeWithOutFive], 200);
        }
        return response()->json(['status' => 'Error'], 400);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function singleAppear(Request $request): JsonResponse
    {
        if ($request->isMethod('post')) {
            $input_array = $request->only(['arr_values']);
            $elementSingleAppear = $this->elementAppearService->calculate($input_array);
            return response()->json(['status' => 'Success' , 'Element Single Appears' => $elementSingleAppear], 200);
        }
        return response()->json(['status' => 'Error'], 400);
    }



}
