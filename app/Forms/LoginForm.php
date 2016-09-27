<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('username','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],


            ])
            ->add('password','password',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']
            ])
             ->add('remember_me', 'checkbox', [
                'value' => 1,
                'checked' => true
            ])

            ->add('clear', 'reset', ['label' => 'Clear form',
                'wrapper'=>['class'=>'form-group row'],
                        'attr'=>['class'=>'btn btn-success col-md-offset-1']
            ])


            ->add('Login','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-success col-md-offset-1']
            ]);

    }
}
