<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ConfirmRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $Request)
    {
        $form = $Request->all();
        $last_name =$form['last_name'];
        $first_name = $form['first_name'];
        return view('confirm', compact('form', 'last_name', 'first_name'));
    }

    public function create(ConfirmRequest $Request)
    {
        $input = $Request->all();
        //$input = $this->unsetToken($Request);
        unset($input['_token']);
        Contact::create($input);
        return view('thanks');
    }

    public function search(Request $Request)
    {
        //
    }

    public function find(Request $Request)
    {
        //
    }

    public function destroy(Request $Request)
    {
        //
    }
}
