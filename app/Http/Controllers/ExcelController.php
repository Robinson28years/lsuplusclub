<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Library_book;
use DB;

class ExcelController extends Controller
{
    public function export(){
        $datas = Library_book::all();
//        $datas=DB::table('Library_book')->select('book_name','book_isbn')->get();
//        $cellData=(array)$cellData;
//        dd($cellData);
        $cellData[]=array(
            'book_name' => '书籍名称',
                'order_email' => '捐书人',
                'book_isbn' => 'isbn号',
                'book_state' => '书籍状态',
        );
        foreach ($datas as $key=>$value){
            $cellData[]=array(
              'book_name' => $value['book_name'],
                'order_email' => $value['order_email'],
                'book_isbn' => $value['book_isbn'],
                'book_state' => $value['book_state'],

            );

        }
//        $datas=objectToArray($datas);
//        dd($cellData);
//        foreach ($datas as $data){
//
//        }[$data->book_name,$data->book_email,$data->book_isbn,$data->book_state],
//            $cellData = [
//                ['学号','姓名','成绩'],
//                ['10001','AAAAA','99'],
//                ['10002','BBBBB','92'],
//                ['10003','CCCCC','95'],
//                ['10004','DDDDD','89'],
//                ['10005','EEEEE','96'],
//        ];
//            dd($cellData);

        Excel::create('LSU俱乐部图书馆',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls');
    }
}
