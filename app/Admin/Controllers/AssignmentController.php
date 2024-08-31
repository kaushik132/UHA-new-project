<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Assignment;

class AssignmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Assignment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Assignment());

        $grid->column('id', __('Id'));
        $grid->column('topic', __('Topic'));
        $grid->column('email', __('Email'));

        $grid->column('stu_name', __('Stu name'));
       
 
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
        $show = new Show(Assignment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('topic', __('Topic'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('stu_name', __('Stu name'));
        $show->field('deadline', __('Deadline'));
        $show->field('course', __('Course'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Assignment());

        $form->text('topic', __('Topic'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->text('stu_name', __('Stu name'));
        $form->text('deadline', __('Deadline'));
        $form->text('course', __('Course'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));

        return $form;
    }
}
