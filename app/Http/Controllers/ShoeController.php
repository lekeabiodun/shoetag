<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shoe;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoe::all();

        return view('dashboard.shoe.index', [
            'shoes' => $shoes,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shoe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> ['required'],
            'image' => ['required'],
            'brand' => ['required'],
            'price' => ['required'],
        ]);
        $shoe = new Shoe;
        $shoe->name = $validated['name'];
        $shoe->price = $validated['price'];
        $shoe->brand = $validated['brand'];
        $path = $validated['image']->store("img", "public");
        $shoe->image = $path;
        $shoe->save();
        
        return redirect()->to('/dashboard/shoes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shoe = Shoe::find($id);

        return view("dashboard.shoe.edit", [
            'shoe' => $shoe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shoe = Shoe::find($id);
        
        $shoe->name = $request->name;
        // $shoe->image = $request->image;
        $shoe->price = $request->price;
        $shoe->brand = $request->brand;
        $path =$request->image->store("img", "public");
        $shoe->image = $path;
        // $shoe->save();

        $shoe->save();

        return redirect()->to("/dashboard/shoes");

    }


    
    public function delete(string $id)
    {
        $shoe = Shoe::find($id);

        return view("dashboard.shoe.delete", [
            'shoe' => $shoe,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $shoe = Shoe::find($id);

        $shoe->delete();

        return redirect()->to('/dashboard/shoes/');

        
    }
}
