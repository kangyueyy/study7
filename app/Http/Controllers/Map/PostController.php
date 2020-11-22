<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('map.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getpoint()
    {
        $point_json = '[
        {
            "name": "全聚德烤鸭",
            "position": [116.467456, 39.994996],
            "zooms": [10, 20],
            "opacity": 1,
            "zIndex": 10,
            "icon": {
                "type": "image",
                "image": "https://a.amap.com/jsapi_demos/static/images/poi-marker.png",
                "clipOrigin": [14, 92],
                "clipSize": [50, 68],
                "size": [25, 34],
                "anchor": "bottom-center",
                "angel": 0,
                "retina": true
            },
            "text": {
                "content": "全聚德烤鸭",
                "direction": "left",
                "offset": [0, -5],
                "style": {
                    "fontSize": 15,
                    "fontWeight": "normal",
                    "fillColor": "#333",
                    "strokeColor": "#fff",
                    "strokeWidth": 2
                }
            }
        },
        {
            "name": "绥兴盛",
            "position": [116.469412, 39.996412],
            "zooms": [10, 20],
            "opacity": 1,
            "zIndex": 16,
            "icon": {
                "type": "image",
                "image": "https://a.amap.com/jsapi_demos/static/images/poi-marker.png",
                "clipOrigin": [101, 92],
                "clipSize": [50, 68],
                "size": [25, 34],
                "anchor": "bottom-center",
                "angel": 0,
                "retina": true
            },
            "text": {
                "content": "绥兴盛",
                "direction": "top",
                "offset": [0, 0],
                "style": {
                    "fontSize": 15,
                    "fontWeight": "normal",
                    "fillColor": "#333",
                    "strokeColor": "#fff",
                    "strokeWidth": 2
                }
            }
        }
    ]';
        return json_encode(json_decode($point_json), true);
    }
}
