<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
class NoteBookController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function homePage(){
        $id = auth()->user()->id;
        $notebookFrontCover = auth()->user()->notebookFrontCover;
        $notebookFrontCoverColor = auth()->user()->notebookFrontCoverColor;
        $notebookBackCoverColor = auth()->user()->notebookBackCoverColor;
        return view('home',compact('id','notebookFrontCover','notebookFrontCoverColor','notebookBackCoverColor'));
    }

    public function readNew(){
        $id = auth()->user()->id;
        $pageData = DB::table('diary')->where('user_id', $id)->orderBy('page_id','DESC')->first();
        return redirect('/read/'.$pageData->page_id);
    }

    public function readDiary($page_id){
    	$id = auth()->user()->id;
        $pageData = DB::table('diary')->where('user_id', $id)->where('page_id',$page_id)->get();
    	return view('show',compact('id','pageData','page_id'));
    }

    public function writeDiary(){
        $id = auth()->user()->id;
        return view('add',compact('id'));
    }

    public function changeBackFrontCoverColor(Request $request){
    	$input = $request->all();
    	DB::table('users')->where('id', auth()->user()->id)->update(['notebookFrontCoverColor' => $input['frontCoverValue'],'notebookBackCoverColor' => $input['backCoverValue']]);
    	return redirect('/home');
    }


    public function defaultCover(){
        DB::table('users')->where('id', auth()->user()->id)->update(['notebookFrontCover' => '/image/noteBook/NoteBook_'.strval(rand(1,10)).'.png']);
        return redirect('/home');
    }


    public function randomCover(){
    	DB::table('users')->where('id', auth()->user()->id)->update(['notebookFrontCover' => 'https://picsum.photos/id/'.strval(rand(1,1084)).'/500/600']);

    	return redirect('/home');
    }

    public function changeFrontCover(Request $request){
    	$input = $request->all();
    	if (auth()->user()->id==$input['bookIdForCover']) {
    		
    		echo "<img src='".file_get_contents($input['uploadFiles'])."'>";
    	}
    	// return redirect('/home');
    }


    public function customize(){
    	$id = auth()->user()->id;
    	$notebookFrontCover = auth()->user()->notebookFrontCover;
    	return view('customize',compact('id'));
    }

    public function changeCover(Request $request){
    	$input = $request->all();
        DB::table('users')->where('id', auth()->user()->id)->update(['notebookFrontCover' => $input['cover']]);
        return response()->json(['success'=>$input['cover']],200);
    }

    public function addDiary(Request $request){
        $Userid=auth()->user()->id;
        $diary = DB::table('diary')->where('user_id',$Userid)->orderBy('page_id','DESC')->first();
        $dates = DB::table('dates')->where('user_id',$Userid)->get();
        $input = $request->all();
        $datesOnlyNew=$input['date'];
        $inputString='';
        $lastDate= explode('/```/', $dates[0]->dates);
        if ($input['ImagesAndEmbeds'] != 'null') {
            foreach ($input['ImagesAndEmbeds'] as $key => $value) {
                $inputString = $inputString." /|||/ ".join(" /```/ ",$value);
            }
            $inputString=substr($inputString, 7);
        }else{
            $inputString='null';
        }
        if ($dates[0]->dates=="New Begining") {

            $datesToUpload=substr($datesOnlyNew, 5);
        }else{
            if ($lastDate != substr($datesOnlyNew,5)) {
                $datesToUpload=$dates[0]->dates.'/```/'.substr($datesOnlyNew,5);
            }
            
        }
        DB::table('dates')->where('user_id', $Userid)->update(['dates' => $datesToUpload]);

        $dataToUploadToDiary=array('user_id' => $input['id'],'page_id' => $diary->page_id+1, 'date'=>$input['date'],'context'=>$input['context'],'imagesAndEmbeds'=>$inputString,'audio'=>$input['audiofile']);
        DB::table('diary')->Insert($dataToUploadToDiary);
        
        return response()->json(['success'=>$dates]);
    }
    public function test(){
        $dates = DB::table('dates')->where('user_id',auth()->user()->id)->get();
        $lastDate= explode('/```/', $dates[0]->dates);
        dd(end($lastDate));
    }

    public function sendPageDataOnRequest($page_id){
        $id = auth()->user()->id;
        // $page_id=3;
        $pageData=DB::table('diary')->where('user_id', $id)->where('page_id',$page_id)->get();
        if (!$pageData->isEmpty()) {
            return response()->json(['data'=>$pageData],200);
        }else{
            return response()->json(['data'=>'NA'],200);
        }
    }

    public function sendDates(){
        $dates = DB::table('dates')->where('user_id',auth()->user()->id)->get();
        return response()->json(['data'=>$dates[0]],200);
    }

    public function showDiaryDataByDate(){
        $date = \Request::query('date');
        $Userid=auth()->user()->id;
        $diary = DB::table('diary')->where('user_id',$Userid)->where('date','Date:'.$date)->first();
        return redirect('/read/'.$diary->page_id);

    }

    public function edit(){
        $id=auth()->user()->id;
        $pageData = DB::table('diary')->where('user_id',$id)->where('page_id',1)->get();
        return view('edit',compact('pageData','id'));
    }

    public function editdiary(Request $request){
        $Userid=auth()->user()->id;
        $input = $request->all();
        $datesOnlyNew=$input['date'];
        $inputString='';
        if ($input['ImagesAndEmbeds'] != 'null') {
            foreach ($input['ImagesAndEmbeds'] as $key => $value) {
                $inputString = $inputString." /|||/ ".join(" /```/ ",$value);
            }
            $inputString=substr($inputString, 7);
        }else{
            $inputString='null';
        }
        $datas=DB::table('diary')->where('user_id', $Userid)->where('page_id', 1)->update(['context'=>$input['context'],'imagesAndEmbeds'=>$inputString,'audio'=>$input['audiofile']]);

        return response()->json(['success'=>$datas]);
    }

}
