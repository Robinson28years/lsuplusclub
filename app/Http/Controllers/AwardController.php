<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Award;
use DB;
use EndaEditor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('award.userpush');
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
		// dd($request);
		Award::create(array_merge($request->all()));

		return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$content=Item::findOrFail($id);
		$str = EndaEditor::MarkDecode("$content->content");
		return view('item.content',compact('str'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$newedit=Item::where('id', $id)->first();
		return view('item.newedit',compact('newedit'));
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
		$newedit=Item::where('id', $id)->first();
		// dd($vip);
		$newedit->update($request->all());
		return redirect('/');
    }
	public function upload(){

        // path 为 public 下面目录，比如我的图片上传到 public/uploads 那么这个参数你传uploads 就行了

        $data = EndaEditor::uploadImgFile('uploads');
		// dd($data);
        return json_encode($data);

    }
	public function admin()
	{
		$awards = DB::table('award')
						->join('users','award.userid','=','users.id')
						->join('vipuser','users.email','=','vipuser.email')
						->select('award.*','users.email','vipuser.name','vipuser.phone','vipuser.sphone','vipuser.class')
						->orderBy('award.num','desc')
						// ->where('department.userid',$users)
						->get();
						// dd($department);
						foreach ($awards as $award) {
							$award->content= EndaEditor::MarkDecode("$award->content");
						}
						//$str = EndaEditor::MarkDecode("$awards->content");
						//dd($awards);
						return view('admin.award',compact('awards'));
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
