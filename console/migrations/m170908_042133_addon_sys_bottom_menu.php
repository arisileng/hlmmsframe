<?php

use yii\db\Migration;

class m170908_042133_addon_sys_bottom_menu extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addon_sys_bottom_menu}}', [
            'single_id' => 'int(10) NOT NULL AUTO_INCREMENT',
            'manager_id' => 'int(10) unsigned NOT NULL COMMENT \'管理员ID\'',
            'title' => 'varchar(50) NOT NULL',
            'name' => 'char(40) NULL DEFAULT \'\' COMMENT \'标识\'',
            'seo_key' => 'varchar(50) NULL',
            'seo_content' => 'varchar(1000) NULL',
            'cover' => 'varchar(100) NULL COMMENT \'封面\'',
            'description' => 'char(140) NULL DEFAULT \'\' COMMENT \'描述\'',
            'content' => 'text NULL COMMENT \'文章内容\'',
            'link' => 'varchar(100) NULL DEFAULT \'\' COMMENT \'外链\'',
            'display' => 'tinyint(3) unsigned NOT NULL DEFAULT \'1\' COMMENT \'可见性\'',
            'deadline' => 'int(10) unsigned NOT NULL COMMENT \'截至时间\'',
            'view' => 'int(10) unsigned NOT NULL COMMENT \'浏览量\'',
            'comment' => 'int(10) unsigned NOT NULL COMMENT \'评论数\'',
            'sort' => 'int(10) NOT NULL DEFAULT \'0\' COMMENT \'优先级\'',
            'pid' => 'int(50) NULL DEFAULT \'0\' COMMENT \'上级id\'',
            'level' => 'tinyint(1) NULL DEFAULT \'1\' COMMENT \'级别\'',
            'status' => 'tinyint(4) NOT NULL DEFAULT \'1\' COMMENT \'数据状态[1:启用;2:禁用]\'',
            'append' => 'int(10) unsigned NOT NULL COMMENT \'创建时间\'',
            'updated' => 'int(10) unsigned NULL COMMENT \'更新时间\'',
            'PRIMARY KEY (`single_id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='底部导航表'");
        
        /* 索引设置 */
        $this->createIndex('article_id','{{%addon_sys_bottom_menu}}','single_id',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addon_sys_bottom_menu}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

