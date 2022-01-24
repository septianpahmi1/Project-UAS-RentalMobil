<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $CarDetail=CarDetail::all();
        return view('car-listing',compact ('CarDetail'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($contents=$request->file('gambar')){
            $name=$contents->getClientOriginalName();
            $contents->move('uploads',$name);



            // $request->validate([
            //     'user_id'=>'required',
            //     'carname'=>'required',
            //     'carprice'=>'required',
            //     'carmodel'=>'required',
            //     'carseats'=>'required',
            //     'address'=>'required',
            //     'personnumber'=>'required',
            //     'posttype'=>'required',
            //     'location'=>'required',
    
            // ]);

            $CarDetail = new CarDetail([
                "user_id"=>$request->get('user_id'),
                "nama_mobil" => $request->get('nama_mobil'),
                'harga_mobil'=> $request->get('harga_mobil'),
                'model_mobil'=> $request->get('model_mobil'),
                'kapasitas'=> $request->get('kapasitas'),
                'alamat'=> $request->get('alamat'),
                'posttype'=> $request->get('posttype'),
                "gambar" => $name

            ]);

            $CarDetail->save();
        
            return redirect(url('home'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function show($carid)
    {
    $CarDetail = CarDetail::select('*')
    ->where('id', '=', $carid)
    ->get();
    return view('cardetail',compact('CarDetail'));
    }
    

    public function withdriver()
    {
    $CarDetail = CarDetail::select('*')
    ->where('posttype', '=', 'With Driver')
    ->get();
    return view('admin/cartype',compact('CarDetail'));
    }

    public function withoutdriver()
    {
    $CarDetail = CarDetail::select('*')
    ->where('posttype', '=', 'Without Driver')
    ->get();
    return view('admin/cartype',compact('CarDetail'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($carid )
    {
        
        $CarDetail = CarDetail::select('*')
        ->where('id', '=', $carid)
        ->get();
        return view('editcar',compact('CarDetail'));
   // return view('editcar',compact('carDetail'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarDetail $car_details)
    {

        $data=$request->validate([
                'nama_mobil'=>'required',
                'harga_mobil'=>'required',
                'model_mobil'=>'required',
                'kapasitas'=>'required',
                'alamat'=>'required',
                'posttype'=>'required',
    
            ]);
            $car_details->update($data);
            return redirect(url('car-listing'));
            
   

            // return redirect()->route('products.index')
            //     ->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarDetail $car_details)
    {
        $car_details->delete();
        return redirect(url('home'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userpost($id)
    {
        

    $CarDetail = CarDetail::select('*')
    ->where('user_id', '=', $id)
    ->get();
    return view('myposts',compact('CarDetail'));

     
    }

    public function allcars()
    {
        $CarDetail=CarDetail::all();
        return view('admin/cartype',compact ('CarDetail'));
     
    }
}
