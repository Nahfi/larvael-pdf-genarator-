<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use PDF;
use Storage;
use Response;

class TestController extends Controller
{
    /**
     * how to generate pdf (test)
     */
    public function index(){
      /**
       * create pdf start
       */
        // $pdf = PDF::loadView('pdf');
        // Storage::put('/public/pdf/invoice1.pdf', $pdf->output());
        // $pdf->output()->move(public_path().'/pdf/upload/','x.pdf');
     /**
      * create pdf end
      */

      /**
       * download pdf start
       */
        // $path = storage_path().'/'.'app'.'/public/pdf/'.'invoice.pdf';
        // // dd($path);
        // if (file_exists($path)) {
        //     return Response::download($path);
        // }
        /**
         * downlaod pdf end
         */
  
    }
}
