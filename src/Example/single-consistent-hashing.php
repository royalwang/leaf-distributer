<?php

//如果你的项目没有使用composer，需要先引入Autoloader，并注册自动加载
$autoloader = dirname(__FILE__) . '/../Autoloader.php';
require $autoloader;
\Leaf\Distributer\Autoloader::register();

//先实例化分布式算法的管理器
use \Leaf\Distributer\DistriManager;

$distriManager = new DistriManager();

//定义配置
$configGroup = require( 'standard-config.php' );

//获取分布式算法分发对象
$distributer = $distriManager->getDistributer()->init($configGroup);

$config = $distributer->lookUp('aa', 'write');