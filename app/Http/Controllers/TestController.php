<?php

namespace App\Http\Controllers;

use App\Chart;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $a = "test";
        return view("test", compact("a"));
    }

    public function home()
    {
        $a = "Home";
        return view("test",compact("a"));
    }

    public function out()
    {
        $a = "Exit";
        return view("test",compact("a"));
    }

    public function json()
    {
        $a = [
            "username" => "Szabi",
            "password" => "Nem az amire gondolsz Szasza..."
        ];
        return response()->json($a);
    }

    public function chart()
    {
        $chart = Chart::find(1);
        $data = $chart->data;
        return view("chart",compact("chart","data"));
    }

    public function data($id)
    {
        $chart = Chart::find($id);
        $array = [
            ["Year", $chart->name]
        ];

        foreach ($chart->data as $d)
        {
            $array[] = [$d->year,$d->data];
        }

        $response = ["data" => $array];

        return response()->json($response);
    }
}
