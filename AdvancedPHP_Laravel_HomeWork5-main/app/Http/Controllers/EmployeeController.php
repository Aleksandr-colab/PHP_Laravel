<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
//        return view('get-employee-data');
        return view('form');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        echo $name . '<br>' . $surname . '<br>' . $email . '<br>' . $position . '<br>' . $address . '<br>';
        echo $this->getPath($request) . '<br>';
        echo $this->getURL($request) . '<br>';

        $jsonVar = json_decode($request->input('workData'));
        $street = $jsonVar->address->street;
        $suite = $jsonVar->address->suite;
        $city = $jsonVar->address->city;
        $zipcode = $jsonVar->address->zipcode;
        $latitude = $jsonVar->address->geo->lat;
        $longitude = $jsonVar->address->geo->lng;
        echo $street . '<br>' . $suite . '<br>' . $city . '<br>' . $zipcode . '<br>' . $latitude . '<br>' . $longitude . '<br>';
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        echo $id . ' ' . $name . '<br>' . $surname . '<br>' . $email . '<br>' . $position . '<br>' . $address;
        echo $this->getPath($request) . '<br>';
        echo $this->getURL($request) . '<br>';

        $jsonVar = json_decode($request->input('workData'));

    }

    private function getPath(Request $request)
    {
        return $request->path();
    }

    private function getURL(Request $request)
    {
        return $request->url();
    }


}
