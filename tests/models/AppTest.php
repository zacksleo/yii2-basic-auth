<?php

namespace graychen\yii2\basic\auth\tests\models;

use graychen\yii2\basic\auth\tests\TestCase;
use graychen\yii2\basic\auth\models\App;

class AppTest extends TestCase
{
     public function testAttributeLaels()
    {
        $model = new App();
        $this->assertArrayHasKey('id', $model->attributeLabels());
        $this->assertArrayHasKey('app_name', $model->attributeLabels());
        $this->assertArrayHasKey('app_icon', $model->attributeLabels());
        $this->assertArrayHasKey('app_description', $model->attributeLabels());
        $this->assertArrayHasKey('app_key', $model->attributeLabels());
        $this->assertArrayHasKey('app_secret', $model->attributeLabels());
        $this->assertArrayHasKey('created_at', $model->attributeLabels());
        $this->assertArrayHasKey('updated_at', $model->attributeLabels());
        $this->assertArrayHasKey('status', $model->attributeLabels());
        $this->assertArrayHasKey('imageFile', $model->attributeLabels());
    }

    public function testGetStatusList()
    {
        $this->assertArrayHasKey('0', App::getStatusList());
        $this->assertArrayHasKey('1', App::getStatusList());
    }

    public function testGetNum()
    {
        $model = new App();
        $num=$model->getNum(1);
        $this->assertTrue(is_numeric($num));
    }

    public function testRule()
    {
        $model = new App();
        $model->app_name="测试";
        $model->app_description="测试详情";
        $id=$this->assertTrue($model->save());
        $model2 = new App();
        $this->assertFalse($model2->save());
    }

    public function testGetId()
    {
        $model = new App();
        codecept_debug($model->getId());
    }

}
