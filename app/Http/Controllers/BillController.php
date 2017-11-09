<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index ()

    {return view ('calc');

    }


    public function results ()

    {return view ('results');
    }

    public function calcs(Request $request)
    {dump($request->all());


      $this->validate($request, [
       'numpeople' => 'required|min:1|numeric',
          'totalnum' => 'required|min:1|numeric',
            'tip' => 'required',
  ]);

  $numpeople = $request ->input ('numpeople');
$tip = $request ->input ('tip');
$roundup = $request ->input ('roundup');
$totalnum = $request ->input ('totalnum');

$amount = (($totalnum * $tip)+$totalnum)/$numpeople; //Per Person Bill Calc

if(isset($_GET['roundup']) && //If Checked off Round up Amount people owe

   $_GET['roundup'] == 'Yes')
{
  $amount = (ceil($amount));
}


            return view('calc')->with([
            'numpeople' => $numpeople,
'tip' => $tip,
 'roundup'=> $roundup,
'totalnum'=> $totalnum,
'amount'=>$amount
               ]);

    }

        public function calc ()

        {return view ('layouts.master');
        }


    public function calculate()
    {return 'calculates bills';
# redirect

    }
}
