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
        $gender = $form['gender'];
        return view('confirm', compact('form', 'last_name', 'first_name','gender'));
    }

    public function create(ConfirmRequest $Request)
    {
        $input = $Request->all();
        unset($input['_token']);
        Contact::create($input);
        return view('thanks');
    }

    public function find(Request $Request)
    {
        $contacts = [];
        return view('search');
    }

    public function search(Request $Request)
    {
        $fullname = $Request -> input('fullname');
        $gender = $Request -> input('gender');
        $from = $Request['from'];
        $until = $Request['createded_at'];
        $email = $Request -> input('email');
        $query = Contact::query();

        if($fullname!=null){
            $query->where(('contacts.fullname'), 'LIKE', "%{$fullname}%" )->get();
        }
        if($gender!=null){
            $query->where('contacts.gender', $gender)->get();
        }
        if(!empty($from) && !empty($until)){
            $date = Contact::getDate($from, $until);
        }else{
            $date = Contact::get();
        }
        if($email!=null){
            $query->where(('contacts.email'), 'LIKE', "%{$email}%" )->get();
        }

        $contacts = $query->get();
        $contacts = $query->paginate(10);
        return view('search', compact('contacts', 'date'));
    }

    public function delete(Request $Request)
    {
        $contact = Contact::find($Request->id)->delete();
        return back();
    }
}
