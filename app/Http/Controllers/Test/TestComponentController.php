<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestComponentController extends Controller
{
    public function index()
    {
        return view('test.component.test-component');
    }

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

    public function test_toast()
    {
        return to_route('test.component.index');
    }

    public function test_validate()
    {
        return to_route('test.component.index');
    }
}
