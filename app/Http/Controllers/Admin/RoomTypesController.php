<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomTypeRequest;
use App\Http\Requests\RoomTypesRequest;
use App\Room;
use App\RoomTypes;
use Illuminate\Http\Request;

class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypes = RoomTypes::latest()->paginate(5);
        return view('admin.room-types.index', compact('roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomTypesRequest $request)
    {
        RoomTypes::create($request->all());
        return redirect()->route('room-types.index')
                ->with('success', '¡Categoría creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomType = RoomTypes::find($id);
        return view('admin.room-types.show', compact('roomType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomType = RoomTypes::find($id);
        return view('admin.room-types.edit', compact('roomType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roomType = RoomTypes::find($id);
        $roomType->fill($request->all())->save();
        return redirect()->route('room-types.show', $roomType->id)
            ->with('success', '¡Categoría editada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomType = RoomTypes::find($id);
        $roomType->delete();
        return redirect()->route('room-types.index')
            ->with('success', '¡Categoría eliminada correctamente!');
    }

    public function getTypes(Request $request){
        if($request->ajax()){
        $types = RoomTypes::all();
        return response()->json($types);
        }else{
            abort(403, 'Esta acción no está permitida');
        }
    }
}
