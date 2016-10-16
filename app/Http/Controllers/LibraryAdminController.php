<?php

namespace App\Http\Controllers;

use App\Library_administration;
use App\Library_book;
use App\vipuser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LibraryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Library_book::all();
        $data1 = Library_administration::all();
        $data2 = vipuser::all();
        return view('admin.libraryinfor',compact('data','data1','data2'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.librarybookadd');
    }

    public function store()
    {
        $input = Input::except('_token');
        $rules = [
            'order_email'=>'required',
            'book_name' => 'required',
            'book_discription' => 'required',
            'book_isbn' => 'required',
        ];
        $message = [
            'order_email.required'=>'贡献者姓名不能为空',
            'book_name.required' => '书名不能为空!',
            'book_isbn.required' => '书的isbn不能为空!',
            'book_discription.required' => '书关键字描述不能为空!',
        ];
        $valiedator = Validator::make($input, $rules, $message);
        if ($valiedator->passes()) {
            $re = Library_book::create($input);
            if ($re) {
                if(Auth::user()->admin==1){
                    return redirect('library');
                }else{
                    return redirect('library/index');        
                }
            } else {
                return back()->with('errors', '书籍添加失败，请稍后重试!');
            }
        } else{
            return back()->withErrors($valiedator);
        }
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
        $arr = array('book_inter'=>'确认还书','return_time'=>date('Y年m月d日 H时i分'));
        $bbb = Library_administration::where('book_id',$id)->update($arr);
        $arr1 = array('book_state'=>'未借出');
        $ccc = Library_book::where('book_id',$id)->update($arr1);
        return back();
    }

    public function editer($book_id){
        $data = Library_book::find($book_id);
        return view('admin.libraryedit',compact('data'));
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
        $input = Input::except('_token','_method');
        $re = Library_book::find($id)->update($input);
        if ($re){
            return redirect('/library');
        }else{
            return back()->with('errors','分类信息更新失败，请稍后重试！');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $re = Library_book::where('book_id',$id)->delete();
        if($re){
            $data=1;
        }else{
            $data = 0;
        }
        return $data;
    }

}
