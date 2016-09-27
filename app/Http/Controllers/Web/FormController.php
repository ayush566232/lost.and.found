<?php

namespace Lost\Http\Controllers\Web;

use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class FormController extends Controller
{
    public function logincontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\LoginForm',[
            'method'=>'post',
            'url'=>route('login')
        ]);
        return view('login',['form'=>$form]);
    }
    public function registercontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\RegisterForm',[
            'method'=>'post',
            'url'=>route('register')
        ]);
        return view('register',['form'=>$form]);
    }
    public function lostitemcontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\lostitem',[
        'method'=>'post',
        'url'=>route('lost')
    ]);
        return view('lostitem',['form'=>$form]);
    }
    public function founditemcontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\founditem',[
            'method'=>'post',
            'url'=>route('found')
        ]);
        return view('founditem',['form'=>$form]);
    }
    public function searchlostcontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\searchlost',[
            'method'=>'post',
            'url'=>route('searchlost')
        ]);
        return view('searchlost',['form'=>$form]);
    }
    public function searchfoundcontroller(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create('Lost\Forms\searchfound',[
            'method'=>'post',
            'url'=>route('searchfound')
        ]);
        return view('searchfound',['form'=>$form]);
    }


}
