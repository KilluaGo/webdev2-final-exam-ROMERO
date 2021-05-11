<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bs;

class BsController extends Controller
{
   public function tablelists (Request $request) {

    $bs = Bs::all();
    return view ('/tablelists', compact ('bs'));
   }

   public function reqformsessions (Request $request) {

    $bs = new Bs();
    return view ('/reqformsessions', compact ('bs'));
   }

   public function createform (Request $request) {

    $bs = new Bs();
    $bs->name = $request-> name;
    $bs->email = $request-> email;
    $bs->number = $request-> number;
    $bs->bdate = $request-> bdate;
    $bs->relaff = $request-> relaff;
    $bs->bsdate = $request-> bsdate;
    $bs->bstime= $request-> bstime;
    $bs->bslocation = $request-> bslocation;
    
   if ($bs->save()) {
        return redirect ('/thank-you');
   }
        return redirect ('/thank-you');
   }

   public function thankyou (Request $request) {

    $bs = new Bs();
    return view ('/thankyou');
   }
}

