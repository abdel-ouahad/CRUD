<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class TableController extends Controller
{

    public function index()
    {
        $tables=Table::All();
        return view('tables.table', ['tables' => $tables]);
    }
    public function create()
    {
        return view('tables.create');
    }
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'ProductName' => 'required|string|max:255',
            'COLOR' => 'required|string|max:255',
            'CATEGORY' => 'required|string|max:255',
            'PRICE' => 'required|numeric',
        ]);

        $tables = new Table();
        $tables->ProductName = $ValidatedData['ProductName'];
        $tables->Color = $ValidatedData['COLOR'];
        $tables->Category = $ValidatedData['CATEGORY'];
        $tables->Price = $ValidatedData['PRICE'];
        $tables->save();

        return redirect()->route('table.index')->with('success', 'Record added successfully.');

    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $table = Table::findOrFail($id);
        return view('tables.edit', ['table'=>$table] ) ;
    }
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'ProductName' => 'required|string|max:255',
        //     'COLOR' => 'required|string|max:255',
        //     'CATEGORY' => 'required|string|max:255',
        //     'PRICE' => 'required|numeric',
        // ]);

        $table = Table::findOrFail($id);

        $table->update([
            $table->ProductName = $request->input('ProductName'),
            $table->Color = $request->input('COLOR'),
            $table->Category = $request->input('CATEGORY'),
            $table->Price = $request->input('PRICE'),
        ]);
        return redirect()->route('table.index')->with('success', 'Record uploaded successfully.');

    }
    public function destroy(string $id)
    {
        $table = Table::findOrFail($id);
        $table->delete();

        return redirect()->route('table.index')->with('success', 'Record Deleted successfully.');
    }
}
