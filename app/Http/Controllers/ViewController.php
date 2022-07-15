<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    //bank View
    public function bank(){
        return view('dashboard.pages.bank.create');
    }
    public function bankSetup(){
        return view('dashboard.features.bank.create');
    }
    //End bank View


    public function emplyee(){
        return view('dashboard.features.employee.create');
    }
    public function customer(){
        return view('dashboard.features.customer.create');
    }
    public function setupInfo(){
        return view('dashboard.features.businessinfo.create');
    }
    public function businessInfo(){
        return view('dashboard.pages.businessinfo.create');
    }
    public function setup(){
        return view('dashboard.features.businessinfo.setup');
    }

    //ptoduct Create, Due Seles, Product Information Page View
    public function productCreate(){
        return view('dashboard.features.product.create');
    }
    public function productDue(){
        return view('dashboard.features.product.dueseles');
    }
    public function productInfo(){
        return view('dashboard.features.product.productinfo');
    }


    public function addSelesPoint(){
        return view('dashboard.features.selespoint.create');
    }
    public function addServicePoint(){
        return view('dashboard.features.servicepoint.create');
    }
    public function addSpearParts(){
        return view('dashboard.features.spearparts.create');
    }

   public function customerInvoice(){
    return view('dashboard.pages.customer.invoice');
   }

}
