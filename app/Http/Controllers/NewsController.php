<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    public function index(){

        return response(['status' => 'success', 'message' => '', 'data' => News::all()]);

    }

    public function store(NewsRequest $request){

        $news = new News();

        $news -> fill($request -> all());

        $checkVideo = explode('https://youtu.be/',$request -> video);

        if(isset($checkVideo[1])){

            $news -> video = "https://www.youtube.com/embed/".$checkVideo[1];

        }

        if($request->image) {

            $request->image->move('../images/news', "news_" . Carbon::now() . '.png');

            $news->image = "images/news/news_" . Carbon::now() . '.png';
        }

        $news -> save();

        return response(['status' => 'success', 'message' => '', 'data' => $news]);

    }

    public function update(NewsRequest $request){

        $news = News::find($request -> id);

        if($news){

            $news -> fill($request -> all());

            if($request->image) {

                if(file_exists('../'.$news -> image))
                File::delete('../'.$news -> image);

                $request->image->move('../images/news', "news_" . Carbon::now() . '.png');

                $news->image = "images/news/news_" . Carbon::now() . '.png';
            }

            $checkVideo = explode('https://youtu.be/',$request -> video);

            if(isset($checkVideo[1])){

                $news -> video = "https://www.youtube.com/embed/".$checkVideo[1];

            }

            $news -> save();

            return response(['status' => 'success', 'message' => '', 'data' => $news]);

        }else return response(['status' => 'client error', 'message' => 'wrong news id', 'data' => null]);

    }

    public function delete(Request $request){

        $news = News::find($request -> id);

        if($news){
            if(file_exists('../'.$news -> image))
            File::delete('../'.$news -> image);

            $news -> delete();

            return response(['status' => 'success', 'message' => '', 'data' => null]);

        }else return response(['status' => 'client error', 'message' => 'wrong news id', 'data' => null]);

    }

    public function pagination(Request $request){

        if(is_numeric($request -> offset) && is_numeric($request -> count) && $request -> offset > 0 && $request -> count > 0){

            return response(['status' => 'success', 'message' => '',
                'data' => News::skip($request -> count * ($request -> offset - 1)) -> take($request -> count) -> get()]);

        }else return response(['status' => 'client error', 'message' => 'count or offset values', 'data' => null]);

    }

    public function count(){

        return response(['status' => 'success', 'message' => '', 'data' => ['count' => News::count()]]);

    }

    public function one($id){

        $news = News::find($id);

        if($news){

            $news -> showCount += 1;

            $news -> save();

            return view('post',compact('news'));

        }else return redirect()->back();

    }

    public function top($view){


        $view->with('popularNews', News::orderBy('showCount', 'desc') -> take(4) -> get());

    }

    public function events(Request $request){

        if(is_numeric($request -> count) && $request -> count > 0) {

            return response(['status' => 'success', 'message' => '',
                'data' => News::where('eventEndTime','>=', Carbon::now()) -> where('event', 1)->orderBy('showCount', 'desc') -> take($request -> count) -> get()]);

        }else return response(['status' => 'client error', 'message' => 'count values', 'data' => null]);

    }

}
