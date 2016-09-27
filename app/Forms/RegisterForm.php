<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('First Name','text',[
        'wrapper'=>['class'=>'form-group row'],
        'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control']

    ])
        ->add('Last Name','text',[
            'wrapper'=>['class'=>'form-group row'],
            'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control']

        ])
            ->add('Email','email',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('Address','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('locality','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control']

            ])
            ->add('Phone no','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control',  'placeholder'=>'enter your phn number']])


            ->add('Place','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' => [ 'country','zone','district','state'],
                'selected' => 'district',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],

            ])
            ->add('clear', 'reset', ['label' => 'Clear form',
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-success col-md-offset-1']
            ])

            ->add('Register','submit',[
            'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'btn btn-success col-md-offset-1']
        ]);

    }
}
