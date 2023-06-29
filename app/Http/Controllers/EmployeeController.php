<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmployee;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->all();

        $created = Employee::create($data);

        if (isset($request->image)) {
            $nameFile = Str::of($created->id).'-'.Str::of($request->position_id).'-'.Str::of($request->nickname)->slug('_').'.'.$request->image->getClientOriginalExtension();

            $image = $request->file('image')->storeAs('employee', $nameFile);

            $data['image'] = $image;
            $created->update($data);
        }

        
        return redirect()
                ->route('employee.index')
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

        $positions = Position::get();

        return view('admin.employee.edit', compact('edit', 'positions'));
    }

    public function update(StoreUpdateEmployee $request, $id)
    {
        if (!$update = Employee::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if (isset($request->image)) {
            if (Storage::exists($update->image)) {
                Storage::delete($update->image);
            }

            $nameFile = Str::of($update->id).'-'.Str::of($request->position_id).'-'.Str::of($request->nickname)->slug('_').'.'.$request->image->getClientOriginalExtension();

            $pathFile = $request->image->storeAs('employee', $nameFile);
            $data['image'] = $pathFile;
        }

        $update->update($data);

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
