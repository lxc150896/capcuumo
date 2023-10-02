<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
// use Storage;
use File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $fbclid = $request->fbclid;
        if ($fbclid !== "IwAR0YzIeMU31k1VpkNjIr2-CP-ZJhJxytqz31Pb-7iNpaQdt0sxfPJ8uUbuc") {
            return response('Unauthenticated.', 401); 
        }
        $them_category = $request->filters["theme_categories"]["id"];
        $page = $request->pagination["page"];
        if ($page !== "1") {
            $total = array(
                '1' => 1,
                '2' => 1,
                '3' => 1,
                '4' => 0,
                '5' => 10,
                '6' => 8,
                '7' => 24,
            );
            $data = '{"results":[],"pagination":{"page"::page,"pageSize":100,"pageCount":1,"total"::total}}';
            $replaced = preg_replace_array('/:[a-z_]+/', [$page, $total[$them_category]], $data);
            return Response::json(json_decode($replaced, true), 200);
        }
        $data = Storage::disk('local')->get("public/file_json/file_$them_category.json");
        return Response::json(json_decode($data, true), 200);
    }
}
