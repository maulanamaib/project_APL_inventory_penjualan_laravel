<?php

namespace App\Http\Controllers;

use App\Client;
use App\Product;
use App\Purchase;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nm_atual = Auth::user();
        return view('admin.purchase', [
            'user' => Auth::user(),
            'usuari' => $nm_atual,
            'cliente' => Client::all(),
            'produto' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Product $product)
    {   
        // dd($request->all());
        $clientee = new Purchase();
        $user = Auth::user();
        $price = 0;
        $productname = '';
        $stock = 0;
        $product = Product::all();
        foreach($product as $p) {
            if((int)$request->produto == $p->id){
                $price = $p->price;
                $productname = $p->name;
                $stock = $p->stock;
            }
        }
        
        // check stock
        if((int)$request->unit > $stock){
            return redirect()->back()->withInput()->withErrors(['Preencha os dados corretamente']);
        }

     
        $clientee->client =  $request->cliente;
        $clientee->user = $user->name;
        $clientee->product=$productname;
        $clientee->price= $price;
        $clientee->total = (intval($price)*intval($request->unit));
        $clientee->unit = $request->unit;
         
       $clientee->save();

         $product = Product::whereId((int)$request->produto)->update([
        'stock' => $stock - (int)$request->unit
        ]);
      


        return redirect()->route('pdf.compra', compact('clientee'));
    }

}
