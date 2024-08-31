<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\StudentTestimonial;

class StudentTestimonialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'StudentTestimonial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StudentTestimonial());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image(url('/uploads/'), 100, 150);
        $grid->column('name', __('Name'));
        $grid->column('profession', __('Profession'));
     
     

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
        $show = new Show(StudentTestimonial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('star', __('Star'));
        $show->field('des', __('Des'));
        $show->field('name', __('Name'));
        $show->field('profession', __('Profession'));
        $show->field('country', __('Country'));
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
        $form = new Form(new StudentTestimonial());

        $form->image('image', __('Image'));
        $form->number('star', __('Star'));
        $form->textarea('des', __('Des'));
        $form->text('name', __('Name'));
        $form->text('profession', __('Profession'));
        $form->text('country', __('Country'));

        return $form;
    }
}
