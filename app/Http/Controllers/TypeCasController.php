<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCas;

class TypeCasController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $typesCas = TypeCas::all();
    return view('typesCas.index', ['typesCas' => $typesCas]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('typesCas.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate(
      [
        'nomTypeCas' => 'required',
      ],
      [
        'required' => 'حقل اجباري'
      ]
    );

    TypeCas::create($request->post());
    return redirect()->route('typesCas.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(TypeCas $typeCas)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(TypeCas $typeCas)
  {
    return view('typesCas.edit', ['typeCas' => $typeCas]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, TypeCas $typeCas)
  {
    dd($typeCas);
    $request->validate(
      [
        'nomTypeCas' => 'required',
      ],
      [
        'required' => 'حقل اجباري'
      ]
    );

    $typeCas->fill($request->post())->save();
    return redirect()->route('typesCas.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(TypeCas $typeCas)
  {
    $typeCas->delete();
    return redirect()->route('typesCas.index');
  }
}