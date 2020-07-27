<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    //Constructer
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Function Get Facebook Api Data And Show It To The User  */
    public function facebookInterest(Request $request)
    {

        $search = "";

        $data = array();

        if(isset($request->q) && !empty($request->q))
        {

            $token = Setting::where('name','facebook_token')->first();

            $search = $request->q;

            $capitalize_search = ucwords($search);

            $search = str_replace(' ', '+', $capitalize_search);


            $url = "https://graph.facebook.com/search?type=adinterest&q=[" . $search . "]&limit=10000&locale=en_US&access_token=".$token->value;

            $data = file_get_contents($url);

            $data = json_decode($data);

            $data = $data->data;


        }

        return view('facebook.ads')->with('data',$data)->with("search",$search);
    }

    /* Function Show Facebook Token Update */
    public function token(Request $request)
    {
        return view('facebook.token');
    }

    /* Function Update Facebook Token  */
    public function updateToken(Request $request)
    {
        $token = new setting;
        $token->name = 'facebook_token';
        $token->value = $request->token;
        $token->save();

        return redirect('facebook/token');
    }
}
