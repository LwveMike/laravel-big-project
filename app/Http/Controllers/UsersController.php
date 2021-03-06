<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UsersController extends Controller
{
    public function destroy($id) {

        Product::where(['id' => $id])->delete();
        
        return redirect('/');
    }
}
