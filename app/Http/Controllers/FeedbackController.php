<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $query = Feedback::query();

        if ($request->has('sport_type') && $request->sport_type != '') {
            $query->where('sport_type', $request->sport_type);
        }

        if ($request->has('user_type') && $request->user_type != '') {
            $query->where('user_type', $request->user_type);
        }

        $feedbacks = $query->get();

        return view('home', compact('feedbacks'));
    }

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'sport_type' => 'required|string|max:255',
            'user_type' => 'required|string|max:255',
            'question_one' => 'required|string',
            'question_two' => 'required|string',
            'question_three' => 'required|string',
            'question_four' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedback')->with('success', 'Thanks for your feedback');
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.show', compact('feedback'));
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'sport_type' => 'required|string|max:255',
            'user_type' => 'required|string|max:255',
            'question_one' => 'required|string',
            'question_two' => 'required|string',
            'question_three' => 'required|string',
            'question_four' => 'required|string',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($request->all());

        return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully.');
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully.');
    }
}
