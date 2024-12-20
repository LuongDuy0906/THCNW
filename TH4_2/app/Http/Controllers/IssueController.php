<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Computer;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $issues = Issue::with('computer')->paginate(10);
        return view('issues.index', compact('issues'));
    }

    public function create()
    {
        $computers = Computer::all();
        return view('issues.create', compact('computers'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'computer_id' => 'required',
                'reported_by' => 'max:50',
                'reported_date' => 'required',
                'description' => 'required|max:100',
                'urgency' => 'required',
                'status' => 'required'
            ]
        );
        Issue::create($request->all());
        return redirect()->route('issues.index')
            ->with('success', 'create successfully');
    }

    public function edit($id)
    {
        $issue = Issue::find($id);
        $computers = Computer::all();
        return view('issues.edit', compact('issue', 'computers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'computer_id' => 'required',
            'reported_by' => 'max:50',
            'reported_date' => 'required',
            'description' => 'required',
            'urgency' => 'required',
            'status' => 'required'
        ]);

        $issue = issue::find($id);

        $issue->update($request->all());

        return redirect()->route('issues.index')->with('success', 'Đồ án được cập nhật thành công');
    }

    public function destroy($id)
    {
        $issue = issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Đồ án đã được xóa thành công!');
    }
}
