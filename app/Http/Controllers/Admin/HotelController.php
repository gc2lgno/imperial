<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\HotelStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    // Obtiene y muestra los datos del Hotel
    public function getDatos($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('admin.hotel.show', compact('hotel'));
    }

    // Muestra formulario para editar los datos del Hotel
    function editHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        $status = HotelStatus::all();

        return view('admin.hotel.edit', compact('hotel', 'status'));
    }


    // Actualiza la información del Hotel
    function updateHotel(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->fill($request->all())->save();
        return redirect()->route('hotel.detalle', $id)
                ->with('success', 'Datos del Hotel actualizados correctamente');
//         return $request->all();
    }
}
