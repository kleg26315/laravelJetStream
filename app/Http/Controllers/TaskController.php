<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return "Hello, World!";
    }

    public function store(){

        // only() 메소드를 사용하여 사용자의 요청을 나타내는 Request 객체에 들어있는 폼 입력 값에서 값을 가져온다.
        Task::create(request()->only(['title', 'description']));
        // returns :
        // [
        //    'title' => '이전 페이지에서 사용자가 입력한 제목', 
        //    'description' => '이전 페이지에서 사용자가 입력한 내용', 
        // ]
        // 그리고 Task::create()는 배열을 전달받아 새로운 Task 인스턴스를 생성

        return redirect('task');
    }
}
