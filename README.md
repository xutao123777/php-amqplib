# php-amqplib
RabbitMQ(消息队列)的PHP类库php-amqplib详解


php-amqplib客户端库

RabbitMQ使用的是AMQP协议。要使用她你就必须需要一个使用同样协议的库。几乎所有的编程语言都有可选择的库。

PHP也是一样, 我们将在本教程中使用php-amqplib, 并且使用 Composer依赖管理：

https://github.com/php-amqplib/php-amqplib

php-amqplib

在你的项目中添加一个 composer.json文件：
{
	 "require": {
	  "php-amqplib/php-amqplib": "2.6.1"
	 }
}

只要你已经安装Composer功能, 你可以运行以下：

$ composer.phar install
