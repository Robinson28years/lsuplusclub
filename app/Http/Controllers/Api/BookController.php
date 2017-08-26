<?php

namespace App\Http\Controllers\Api;

use App\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $books = Book::all();
        foreach ($books as $book) {
            $book->owner = $book->owner;
            $book->borrower = $book->borrower;
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
        $book = array_merge($request->all(), array("owner_id" => $user->id, "borrower_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'owner_id' => 'required',
            'description' => 'required',
            'state' => 'required',
            'isbn' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $book = Book::create($book);
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
        return $book;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('id',$id)->get();
        $book->owner = $book->owner;
        $book->borrower = $book->borrower;
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
        $user = JWTAuth::parseToken()->authenticate();
        if ($user->admin != '1' && $user->id != $request->owner_id) {
            return response()->json(["error" => "你没权限操作"], 200);
        }
        $book = array_merge($request->all(), array("owner_id" => $user->id, "borrower_id" => 0));
//        dd($topic);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'owner_id' => 'required',
            'description' => 'required',
            'state' => 'required',
            'isbn' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $book = Book::where('id',$id)->update($request->all());
        return $book;
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
        if ($user->admin != '1' && $user->id != $book->owner_id) {
            return response()->json(["error" => "你没权限操作"], 200);
        }
        return $book->delete();
    }
}
