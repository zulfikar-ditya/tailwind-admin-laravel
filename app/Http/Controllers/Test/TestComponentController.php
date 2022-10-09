<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestComponentController extends Controller
{
    public function input()
    {
        return view('test.component.input');
    }

    public function button()
    {
        return view('test.component.button');
    }

    public function table()
    {
        return view('test.component.table');
    }

    public function modal()
    {
        return view('test.component.modal');
    }

    public function card()
    {
        return view('test.component.test_toast');
    }

    public function breadcumb()
    {
        return view('test.component.breadcumb');
    }

    public function test_toast()
    {
        return to_route('test.component.index');
    }

    public function test_validate()
    {
        return to_route('test.component.index');
    }
}
