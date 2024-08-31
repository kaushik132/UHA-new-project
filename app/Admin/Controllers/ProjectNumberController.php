<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Projectnum;

class ProjectNumberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Projectnum';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Projectnum());

        $grid->column('id', __('Id'));
        $grid->column('project_num', __('Project num'));
        $grid->column('member_num', __('Member num'));
        $grid->column('love_us_num', __('Love us num'));
        $grid->column('happy_client_num', __('Happy client num'));


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
        $show = new Show(Projectnum::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('project_num', __('Project num'));
        $show->field('member_num', __('Member num'));
        $show->field('love_us_num', __('Love us num'));
        $show->field('happy_client_num', __('Happy client num'));
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
        $form = new Form(new Projectnum());

        $form->text('project_num', __('Project num'));
        $form->text('member_num', __('Member num'));
        $form->text('love_us_num', __('Love us num'));
        $form->text('happy_client_num', __('Happy client num'));

        return $form;
    }
}
