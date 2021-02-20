<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeeStructuresRequest;
use App\Http\Requests\UpdateFeeStructuresRequest;
use App\Repositories\FeeStructuresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Level;
use App\Models\FeeStructures;


class FeeStructuresController extends AppBaseController
{
    /** @var  FeeStructuresRepository */
    private $feeStructuresRepository;

    public function __construct(FeeStructuresRepository $feeStructuresRepo)
    {
        $this->feeStructuresRepository = $feeStructuresRepo;
    }

    /**
     * Display a listing of the FeeStructures.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semesters = Semester::all();
        $courses = Course::all();
        $levels = Level::all();

        $feeStructures = $this->feeStructuresRepository->all();
        $feeStructures = FeeStructures::join('courses', 'courses.course_id', '=', 'fee_structures.course_id')
        ->join('semesters', 'semesters.semester_id', '=', 'fee_structures.semester_id')
        ->join('levels', 'levels.level_id', '=', 'fee_structures.level_id')->paginate(10);

        return view('fee_structures.index', compact('semesters', 'courses', 'levels'))
            ->with('feeStructures', $feeStructures);
    }

    /**
     * Show the form for creating a new FeeStructures.
     *
     * @return Response
     */
    public function create()
    {
        return view('fee_structures.create');
    }

    /**
     * Store a newly created FeeStructures in storage.
     *
     * @param CreateFeeStructuresRequest $request
     *
     * @return Response
     */
    public function store(CreateFeeStructuresRequest $request)
    {
        $input = $request->all();

        $feeStructures = $this->feeStructuresRepository->create($input);

        Flash::success('Fee Structures saved successfully.');

        return redirect(route('feeStructures.index'));
    }

    /**
     * Display the specified FeeStructures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $feeStructures = $this->feeStructuresRepository->find($id);

        if (empty($feeStructures)) {
            Flash::error('Fee Structures not found');

            return redirect(route('feeStructures.index'));
        }

        return view('fee_structures.show')->with('feeStructures', $feeStructures);
    }

    /**
     * Show the form for editing the specified FeeStructures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $feeStructures = $this->feeStructuresRepository->find($id);

        if (empty($feeStructures)) {
            Flash::error('Fee Structures not found');

            return redirect(route('feeStructures.index'));
        }

        return view('fee_structures.edit')->with('feeStructures', $feeStructures);
    }

    public function DynamicLevel(Request $request){

        if($request->ajax()){
        return response(Level::where('course_id', $request->course_id)->get());

        }
        // $course_id = $request->get('course_id');
        // $levels = Level::where('course_id', '=', '$course_id')->get();
        // return response::json($levels);
    }

    /**
     * Update the specified FeeStructures in storage.
     *
     * @param int $id
     * @param UpdateFeeStructuresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeeStructuresRequest $request)
    {
        $feeStructures = $this->feeStructuresRepository->find($id);

        if (empty($feeStructures)) {
            Flash::error('Fee Structures not found');

            return redirect(route('feeStructures.index'));
        }

        $feeStructures = $this->feeStructuresRepository->update($request->all(), $id);

        Flash::success('Fee Structures updated successfully.');

        return redirect(route('feeStructures.index'));
    }

    /**
     * Remove the specified FeeStructures from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $feeStructures = $this->feeStructuresRepository->find($id);

        if (empty($feeStructures)) {
            Flash::error('Fee Structures not found');

            return redirect(route('feeStructures.index'));
        }

        $this->feeStructuresRepository->delete($id);

        Flash::success('Fee Structures deleted successfully.');

        return redirect(route('feeStructures.index'));
    }
}
