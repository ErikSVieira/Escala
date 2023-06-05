<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePosition;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() 
    {
        $positions = Position::paginate(20);

        return view('admin.position.index', compact('positions'));
    }

    public function create() 
    {
        return view('admin.position.create');
    }

    public function store(StoreUpdatePosition $request)
    {
        $dados = $request->all();

        Position::create($dados);

        return redirect()
                ->route('position.index')
                ->with('messages', 'position created successfully');
    }

    public function show($id)
    {
        if (!$show = Position::find($id)) {
            return redirect()->route('position.index');
        }

        return view('admin.position.show', compact('show'));
    }

    public function destroy($id)
    {
        if (!$position = Position::find($id)){
            return redirect()->route('position.index');
        } elseif ($position->active) {
            $position['active'] = false;
        } elseif (!$position->active) {
            $position['active'] = true;
        }

        $position->save();

        return redirect()
                ->route('position.index')
                ->with('messages', 'position deleted successfully');
    }

    public function edit($id)
    {
        if (!$edit = Position::find($id)) {
            return redirect()->back();
        }

        return view('admin.position.edit', compact('edit'));
    }

    public function update(StoreUpdatePosition $request, $id) 
    {
        if (!$update = Position::find($id)) {
            return redirect()->back();
        }

        $update->update($request->all());

        return redirect()
                ->route('position.index')
                ->with('messages', 'position updated successfully!');
    }

    public function search(Request $request) 
    {
        $search = $request->except('_token');

        $positions = Position::where('name', 'LIKE', "%{$request->search}%")
                        ->orWhere('acronym', 'LIKE', "%{$request->search}%")
                        ->paginate();
        
        return view('admin.position.index', compact('positions', 'search'));
    }
}