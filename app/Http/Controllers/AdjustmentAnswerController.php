<?php

namespace App\Http\Controllers;

use App\Models\AdjustmentAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdjustmentAnswerController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions_adjustment')->get();

        return view('Adjustment.form', ['questions' => $questions]);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ];
        for ($i = 1; $i <= 23; $i++) {
            $rules['statement_' . $i] = 'required|integer|min:1|max:4';
        }
        $request->validate($rules);

        $data = $request->except('_token');

        $answer = AdjustmentAnswer::create($data);

        return redirect()->route('adjustment.result', $answer->id);
    }

    public function result($id)
    {
        $answer = AdjustmentAnswer::findOrFail($id);

        $statements = $answer->only(array_map(fn ($i) => 'statement_' . $i, range(1, 45)));

        $totalScore = array_sum($statements);

        $averageScore = $totalScore / count($statements);

        $category = $this->determineCategory($averageScore);

        return view('Adjustment.result', [
            'total_score' => $totalScore,
            'average_score' => $averageScore,
            'category' => $category,
        ]);
    }

    private function determineCategory($averageScore)
    {
        if ($averageScore >= 3.5) {
            return 'Tinggi';
        } elseif ($averageScore >= 2.5) {
            return 'Sedang';
        } else {
            return 'Rendah';
        }
    }
}
