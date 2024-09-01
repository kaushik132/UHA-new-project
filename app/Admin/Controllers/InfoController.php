<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Info;

class InfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Info());

        $grid->column('id', __('Id'));
        $grid->column('mobile_number', __('Mobile number'));
        $grid->column('email_address', __('Email address'));
        $grid->column('facebook_link', __('Facebook link'));
        $grid->column('twitter_link', __('Twitter link'));
        $grid->column('skype_link', __('Skype link'));
        $grid->column('instagram_link', __('Instagram link'));
        $grid->column('whatapp_number', __('Whatapp number'));
        $grid->column('address', __('Address'));
      

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
        $show = new Show(Info::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('mobile_number', __('Mobile number'));
        $show->field('email_address', __('Email address'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('twitter_link', __('Twitter link'));
        $show->field('skype_link', __('Skype link'));
        $show->field('instagram_link', __('Instagram link'));
        $show->field('whatapp_number', __('Whatapp number'));
        $show->field('address', __('Address'));
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
        $form = new Form(new Info());

        $form->text('mobile_number', __('Mobile number'));
        $form->text('email_address', __('Email address'));
        $form->text('facebook_link', __('Facebook link'));
        $form->text('twitter_link', __('Twitter link'));
        $form->text('skype_link', __('Skype link'));
        $form->text('instagram_link', __('Instagram link'));
        $form->text('whatapp_number', __('Whatapp number'));
        $form->text('address', __('Address'));

        return $form;
    }
}
