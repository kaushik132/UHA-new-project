<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Sample;
use \App\Models\ServiceCategory;

class SampleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'sample';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sample());

        $grid->column('id', __('Id'));
        $grid->column('sampleCategory.name', __('Category'));
        $grid->column('module_name', __('Module name'));
        $grid->column('module_code', __('Module Code'));
        $grid->column('assignment_title', __('Assignment title'));
      // $grid->column('course_category.name', __('Category'));
      $states = [
        'on'  => ['value' => 1, 'text' => 'Enable', 'color' => 'success'],
        'off' => ['value' => 0, 'text' => 'Disable', 'color' => 'danger'],
   ];
   $grid->column('status', __('Status'))->switch($states);
   

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
        $show = new Show(Sample::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category', __('Category'));
        $show->field('module_name', __('Module name'));
        $show->field('module_code', __('Module Code'));
        $show->field('pricing', __('Price'));
        $show->field('assignment_title', __('Assignment title'));
        $show->field('pages', __('Pages'));
        $show->field('words', __('Words'));
        $show->field('image', __('Image'));
        $show->field('details', __('Details'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Sample());

        $form->select('category', __('Service Category Name'))->options(ServiceCategory::pluck('name','id'))->default(null)->rules('required');
        $form->text('module_name', __('Module name'));
        $form->text('module_code', __('Module Code'));
        $form->text('pricing', __('Price'));
        $form->text('assignment_title', __('Assignment title'));
        $form->text('pages', __('Pages'));
        $form->text('words', __('Words'));
        $form->image('image', __('Image'));
        $form->ckeditor('details', __('Details'));
        $states = [
            'off' => ['value' => 0, 'text' => 'Disable', 'color' => 'danger'],
            'on'  => ['value' => 1, 'text' => 'Enable', 'color' => 'success'],
        ];
        
        $form->switch('status', __('Status'))->options($states);
        

        return $form;
    }
}
