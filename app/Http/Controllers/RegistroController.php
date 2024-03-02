<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
/**
 * Class RegistroController
 * @package App\Http\Controllers
 */
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::paginate(10);

        return view('registro.index', compact('registros'))
            ->with('i', (request()->input('page', 1) - 1) * $registros->perPage());
    }

public function PDF($id)
{
        // Obtener un solo registro de la base de datos
        $registro = Registro::find($id);

        // Verificar si se encontró el registro
        if ($registro !== null) {
            // Pasar el registro a la vista del PDF
            $pdf = PDF::loadView('registro.pdf', compact('registro'));
            return $pdf->stream();
        } else {
            // Si no se encontró el registro, manejar el caso
            return "No se encontró ningún registro para generar el PDF.";
        }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registro = new Registro();
        return view('registro.create', compact('registro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Registro::$rules);

        $registro = Registro::create($request->all());

        return redirect()->route('registros.index')
            ->with('success', 'Registro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Registro::find($id);

        return view('registro.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Registro::find($id);

        return view('registro.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Registro $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        request()->validate(Registro::$rules);

        $registro->update($request->all());

        return redirect()->route('registros.index')
            ->with('success', 'Registro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registro = Registro::find($id)->delete();

        return redirect()->route('registros.index')
            ->with('success', 'Registro deleted successfully');
    }
}
