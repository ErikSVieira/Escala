<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate();

        return view('admin.employee.index', compact('employees'));
    }

    public function create()
    {
        $positions = Position::get();

        return view('admin.employee.create', compact('positions'));
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        Employee::create($dados);

        return redirect()
                ->route('employees.index')
                ->with('messages', 'Employees created successfully');
    }

    public function show($id)
    {
        if (!$show = Employee::find($id)) {
            return redirect()->route('employees.index');
        }

        return view('admin.employee.show', compact('show'));
    }

    public function destroy($id)
    {
        if (!$destroy = Employee::find($id)) {
            return redirect()->route('employees.index');
        } elseif ($destroy->active) {
            $destroy['active'] = false;
        } elseif (!$destroy->active) {
            $destroy['active'] = true;
        }

        $destroy->save();

        return redirect()
                ->route('employee.index')
                ->with('messages', 'Employee has been deleted successfully!');
    }

    public function edit($id)
    {
        if (!$edit = Employee::find($id)) {
            return redirect()->back();
        }

        return view('admin.employee.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        if (!$update = Employee::find($id)) {
            return redirect()->back();
        }

        $update->update($request->all());

        return redirect()
                ->route('employee.index')
                ->with('messages', 'Employee updated successfully!');
    }

    public function search(Request $request)
    {
        $search = $request->except('_token');

        $employees = Employee::where('name', 'LIKE', "%{$request->search}%")
                                ->paginate();

        return view('admin.employee.index', compact('employees', 'search'));
    }
}
