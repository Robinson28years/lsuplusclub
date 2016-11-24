<?php

namespace App\Http\Controllers;

use App\Library_administration;
use App\Library_book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LibraryController extends Controller
{
    public function index()
    {
        $data = Library_book::orderBy('book_state','desc')->paginate(15);
//        $departments = DB::table('vipuser')->where('email',Auth::user()->email)->get();
        return view('library.libraryindex',compact('data'));
    }
    //借书区
    public function borrow(){
        $data = Library_book::orderBy('book_state','desc')->paginate(15);
        return view('library.libraryborrow',compact('data'));
    }

    public function borrowinfo($book_id){
        $ccc = DB::table('library_book')->where('book_id',$book_id)->get();
        $bbb = DB::table('vipuser')->where('email',Auth::user()->email)->get();
        return view('library.libraryborrowinfor',compact('ccc','bbb'));
    }

    public function createborrow($book_id)
    {
        $input = Input::except('_token','book_name');
        $rules = [
            'return_about_time'=>'required',
        ];
        $message = [
            'return_about_time.required'=>'预计归还时间不能为空',
        ];
        $valiedator = Validator::make($input, $rules, $message);
        if ($valiedator->passes()) {
            $input['book_id'] = $book_id;
            $input['lending_time'] = date('Y年m月d日');
            $input['borrower_email']=Auth::user()->email;
            $re = Library_administration::create($input);
            if ($re) {
                $arr = array('book_state'=>'已经借出');
                $bbb = Library_book::where('book_id',$book_id)->update($arr);
                return redirect('borrow');
            } else {
                return back()->with('errors', '借书失败，请稍后重试!');
            }
        } else{
            return back()->withErrors($valiedator);
        }
    }
    //还书区
    public function returnbook(){
        $user = Auth::user()->email;
        $department = DB::table('library_administration')
            ->join('library_book','library_administration.book_id','=','library_book.book_id')
            // ->join('vipuser','users.email','=','vipuser.email')
            ->select('library_book.*','library_administration.book_inter','library_administration.borrower_email','library_administration.return_time')
            ->where('library_administration.borrower_email',$user)
            ->get();
//        dd($department);
        return view('library.libraryreturnbook',compact('department'));
    }
    
    public function  returnbook1($book_id){
        $arr = array('book_inter'=>'审核中');
        $user = Auth::user()->email;
        $bbb = DB::table('library_administration')
            ->where('borrower_email',$user)
            ->where('book_id',$book_id)
            ->where('return_time','未归还')
            ->update($arr);
        return back();
    }
    //添加书籍

}
