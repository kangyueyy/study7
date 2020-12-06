<?php

namespace App\Http\Controllers\Datarecord;

use App\Http\Controllers\Controller;
use App\Oaupdate;
use Illuminate\Http\Request;

class OaupdateController extends Controller
{
    public function ajax($action)
    {
        switch ($action) {
            case 'create':
                $this->create();
                break;
            default:
                echo '路由错误';
                exit;
                break;
        }
    }

    public function page($action)
    {
        switch ($action) {
            case 'index':
                return $this->index();
                break;
            default:
                echo '路由错误';
                exit;
                break;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Oaupdate::get();
//        foreach ($lists as $key => $list) {
//            var_dump($list->content);exit;
//        }
        //
        return view('datarecord.oaupdate.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $oaupdate = new Oaupdate();
        $oaupdate->content = $_REQUEST['content'] ?? '更新内容1';
        $oaupdate->ver = $_REQUEST['ver'] ?? 1;
        $oaupdate->extdata = $_REQUEST['extdata'] ?? '';
        $ret = $oaupdate->save();
        if ($ret) {
            echo "插入成功";
            echo "<script>history.go(-1);</script>";
            exit;
        }
        echo "插入失败";
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
}
