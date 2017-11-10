<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use App\System;
use Validator;

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
        // dd(empty($errors));
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
     * 添加banner
     */
    public function addBanner(Request $request)
    {
        $data = $request->all();
        // dd($request->file('path'));
        $validator = Validator::make($data, ['path' => 'required', 'position' => 'required']);
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withInput()
            ->withErrors($validator->errors());
        }

        if ($request->hasFile('path')) {
            $data['path'] = $this->storeImage($data['path']);
        }
        // dd($data['path']);
        $banners = Banner::where('position', '>=', $data['position'])->get();
        foreach ($banners as $key => $value) {
            $value->position = intval($value->position) + 1;
            $value->save();
        }
        $return = Banner::create($data);
        return $return ? redirect('admin/index') : redirect()->back();
    }

    /**
     * 删除banner
     */
    public function delBanner(Request $request)
    {
        $banner_id = $request->get('banner_id');
        // dd($banner_id);
        $banner_position = Banner::find($banner_id)->position;
        $banners = Banner::where('position', '>', $banner_position)->get();
        foreach ($banners as $key => $value) {
            $value->position = intval($value->position) - 1;
            $value->save();
        }
        $return = Banner::destroy($banner_id);
        return $return ? json_encode(['success' => true]) : json_encode(['success' => false, 'errors' => 'Fails to delete banner!']);
    }

    /**
     * 调整banner位置
     */
    public function updateBannersPosition(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $i = 1;
        foreach ($data['data'] as $value) {
            $banner = Banner::find($value);
            $banner->position = $i;
            $banner->save();
            $i++;
        }
        return json_encode(['success' => true]);
    }

    /**
     * 处理上传图片
     */
    private function storeImage($file)
    {
        // $extensions = strtolower($file->getClientOriginalExtension());
        $allowed_extensions = ["png", "jpg", "gif", "jpeg"];
        if ($file->getClientOriginalExtension() && !in_array(strtolower($file->getClientOriginalExtension()), $allowed_extensions)) { 
            return redirect()
            ->back()
            ->with('error', 'You may only upload png, jpg, gif or jpeg.');  
        }
        $destinationPath = 'uploads/banners/';//图片存放目录
        //判断是否存在该路径，否则创建该路径
        if (!file_exists(public_path($destinationPath))) {
            mkdir($destinationPath);
        }
        $fileName = time().'.'.strtolower($file->getClientOriginalExtension());//文件名
        // dd($fileName);
        $file->move($destinationPath, $fileName);
        // // 获取上传的图片如果尺寸超过规定，则改为规定尺寸
        // $image = public_path($destinationPath.$fileName);
        // if (getimagesize($image)[0] >= 500) {
        //     $image = Image::make($image)->resize(500, 375);
        //     $image->save();
        // }
        $image = '/'.$destinationPath.$fileName;
        return $image;
    }
}
