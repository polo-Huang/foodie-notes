<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use App\System;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //搜索首页数据
        $banners = Banner::orderBy('position', 'asc')->get();
        $system = System::first();
        // dd($system);
        return view('admin/index', ['banners' => $banners, 'system' => $system]);
    }

    /**
     * 修改系统配置
     */
    public function editSystem(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $system = System::first();
        $system->name = $data['name'];
        $return = $system->save();
        $return ? flash('系统配置成功！', 'success')->important() : flash('系统配置失败！请稍后重试', 'warning')->important();
        return $return ? redirect('admin/index') : redirect()->back();
    }

    /**
     * 修改系统配置
     */
    public function addBanner(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $return = Banner::create($data);
        return $return ? redirect('admin/index') : redirect()->back();
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
