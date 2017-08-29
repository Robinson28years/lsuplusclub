<?php

namespace App\Http\Controllers\Api;

use App\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $book = Book::all()->first->get();
//        dd($book->owner());
        $books = Book::orderBy('created_at', 'desc')
                ->paginate(15);
        foreach ($books as $book) {
            $book->owner;
            $book->borrower;
        }
        return $books;

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $book = array_merge($request->all(), array("owner_id" => $user->id, "borrower_id" => 0 ,"state" => "未借出"));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'isbn' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $book = Book::create($book);
        $book->owner;
        $book->borrower;
        return $book;
    }

    /**
     * 借书方法
     *
     * @return \Illuminate\Http\Response
     */
    public function borrow($id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $book = Book::where('id',$id)->update([
            'borrower_id' => $user->id,
            'state' => '已经借出',
            'return_time' => Carbon::now()->addMonth(2),
        ]);
        return $this->show($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $book->owner;
        $book->borrower;
        return $book;
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
//        dd($request->all());
        $user = JWTAuth::parseToken()->authenticate();
        $book = Book::findOrFail($id);
        if ($user->role != 'admin' && $user->id != $book->owner_id) {
            return response()->json(["error" => "你没权限操作"], 401);
        }
        $book = array_merge($request->all(), array("id"=>$book->id));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'isbn' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $book = Book::where('id',$id)->update($request->all());
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $book = Book::findOrFail($id);
        if ($user->role != 'admin' && $user->id != $book->owner_id) {
            return response()->json(["error" => "你没权限操作"], 200);
        }
        $book->delete();
        return "success";
    }
}
