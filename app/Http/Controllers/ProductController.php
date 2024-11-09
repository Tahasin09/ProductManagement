<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function allProducts(Request $request)
    {
        return response('hello products');
    }

    function storeProducts(Request $request)
    {
        return response('store products');
    }

    function createProduct(Request $request)
    {
        return response('create products');
    }

    function showSpecificProduct(Request $request)
    {
        return response('show specific products');
    }

    function updateProduct(Request $request)
    {
        return response('update products');
    }

    function editProduct(Request $request)
    {
        return response('edit products');
    }
    function deleteProduct(Request $request)
    {
        return response('delete products');
    }
}
