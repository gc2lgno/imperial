<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Room;
use App\RoomTypes;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('id', 'ASC')->paginate(10);
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = RoomTypes::all();
        $services = Service::all();
        $hotel = Hotel::find(1);
        $pisos = $hotel->pisos;
        return view('admin.rooms.create', compact(['roomTypes', 'services', 'pisos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
        /*Datos del Hotel*/
        $hotel = Hotel::find(1);
        $hotel_id = $hotel->id;
        /*Fin Datos del Hotel*/

        /*Datos de la habitación creada*/
        $room = new Room();
        $room->hotel_id = $hotel_id;
        $room->numero = $request->input('numero');
        $room->ubicacion = $request->input('ubicacion');
        $room->room_type_id = $request->input('room_type_id');
        $room->room_status = $request->input('room_status');
        $room->save();
        /*Fin datos de la habitación creada*/

        /*Inserción en tabla pivote ROOMS - SERVICES*/
        $room_id = $room->id;
        if (!empty($request->input('services'))) {
            $services = $request->input('services');
            foreach ($services as $service) {
                DB::table('rooms_services')->insert([
                    'room_id' => $room_id,
                    'service_id' => $service,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
        /*FIN Inserción en tabla pivote ROOMS - SERVICES*/

        return redirect()->route('rooms.index')->with('success', '¡Habitación creada exitosamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
