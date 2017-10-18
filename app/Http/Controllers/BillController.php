<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index ()

    {return view ('layouts.master');
    }



        public function calc ()

        {return view ('calc');
        }


    public function calculate()
    {return 'calculates bills';
# redirect

    }
}
