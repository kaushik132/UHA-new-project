<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;


class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        // $grid->column('id', __('Id'));
        $grid->column('fname', __('Fname Name'));
        $grid->column('lname', __('Last Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
       
        $grid->column('message', __('Message'));
        $grid->column('image', __('Image'))->display(function ($image) {
            return '<img src="' . asset('uploads/' . $image) . '" style="max-height:100px;max-width:100px"/>';
        });
        $grid->column('created_at', __('Created at'))->display(function ($created_at) {
            return date(' d F Y', strtotime($created_at));
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Contact::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('fname', __('First Name'));
        $show->field('lname', __('Last Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('message', __('Message'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Contact());
        

        $form->text('fname', __('Name'));
        $form->text('lname', __('Name'));
        $form->email('email', __('Email'));
        $form->text('phone', __('Phone'));
        $form->image('image', __('File'));

        $form->text('message', __('Message'));
        

        return $form;
    }
}
