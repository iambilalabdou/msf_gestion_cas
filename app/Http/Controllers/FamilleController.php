<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Famille;
use App\Models\TypeCas;
use App\Models\Blacklist;
use App\Models\Image;

class FamilleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $familles = Famille::all();

    // Getting all families where their id not exist in blacklist table
    $blacklistedIds = Blacklist::pluck('idCas');
    $familles = Famille::whereNotIn('idFamille', $blacklistedIds)->get();

    return view('familles.index', ['familles' => $familles]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $typesCas = TypeCas::all();
    return view('familles.create', ['typesCas' => $typesCas]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // $request->validate(
    //   [
    //     'nomFamille' => 'required',
    //     'idTypeCas' => 'required',
    //     'CINMere' => 'sometimes|regex:/^[a-zA-Z][0-9]{6}$/',
    //     'CINPere' => 'sometimes|regex:/^[a-zA-Z][0-9]{6}$/',
    //     'telephone' => 'digits_between:10,20',
    //   ],
    //   [
    //     'required' => 'حقل اجباري',
    //     'regex' => 'الرقم غير صحيح',
    //     'digits_between' => 'الرقم غير صحيح',
    //   ]
    // );


    $famille = Famille::create($request->post());

    // Get the value of the checkbox from the request
    $blacklisted = $request->input('blacklisted');

    if ($blacklisted) {
      // Create a new Blacklist record with the id attribute set to the value of idFamille
      Blacklist::create([
        'idCas' => $famille->idFamille,
        'raison' => $request->input('raison')
      ]);
    }

    return redirect()->route('familles.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Famille $famille)
  {
    return view('familles.show', ['famille' => $famille]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Famille $famille)
  {
    $typesCas = TypeCas::all();
    return view('familles.edit', ['famille' => $famille, 'typesCas' => $typesCas]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Famille $famille)
  {
    // $request->validate(
    //   [
    //     'nomFamille' => 'required',
    //     'cinMere' => 'sometimes|regex:/^[a-zA-Z][0-9]{6}$/',
    //     'cinPere' => 'sometimes|regex:/^[a-zA-Z][0-9]{6}$/',
    //     'telephone' => 'digits_between:10,20',
    //   ],
    //   [
    //     'required' => 'حقل اجباري',
    //     'regex' => 'الرقم غير صحيح',
    //     'digits_between' => 'الرقم غير صحيح',
    //   ]
    // );


    // Get the value of the checkbox from the request
    $blacklisted = $request->input('blacklisted');

    if ($blacklisted) {
      // Create a new Blacklist record with the id attribute set to the value of idFamille
      Blacklist::create([
        'idCas' => $famille->idFamille,
        'raison' => $request->input('raison')
      ]);
    }

    $famille->fill($request->post())->save();
    return redirect()->route('familles.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Famille $famille)
  {
    $famille->delete();
    return redirect()->route('familles.index');
  }

  /**
   * Add the specified family to the Blacklist.
   */
  public function addToBlacklist(Request $request, Famille $famille)
  {
    Blacklist::create([
      'idCas' => $famille->idFamille,
      'raison' => $request->input('raison'),
    ]);
    return redirect()->route('familles.index');
  }
}