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




public function queue_declare($queue = '', $passive = false, $durable = false, $exclusive = false, $auto_delete = true, $nowait = false, 
$arguments = array(), $ticket = null)

支持：完整

声明队列, 如果队列不存在创建之。

此方法用于创建或检查队列。当新建一个队列时, 客户端可以指定一系列属性用于控制队列的持久性及其内容, 还有队列的分享等级。+

RabbitMQ为AMQP规范实现了一些扩展，允许队列创建者控制队列各个方面的行为。

参数详解:

queue: 队列名称

passive: 是否被动的

durable: 是否是持久的

exclusive: 排他性

auto_delete: 自动删除

nowait: 不需要等待

arguments: 参数类表

ticket: 指派




public function basic_publish($msg, $exchange = '', $routing_key = '', $mandatory = false, $immediate = false, $ticket = null)

支持：完整

发布单条消息

此方法用来发布单条消息到指定的交换机(exchange)。消息将会通过配置好的交换机根据既定规则路由给队列(queues), 之后, 
如果存在事务处理(transaction), 并且事务已经被提交, 就会分发给活跃的消费者。





public function basic_consume($queue = '', $consumer_tag = '', $no_local = false, $no_ack = false, $exclusive = false,
$nowait = false, $callback = null, $ticket = null, $arguments = array())

支持：部分

启动队列消费者

此方法告知服务器开启一个"消费者", 此消费者实质是一个针对特定队列消息的持久化请求。

消费者在声明过的信道(channel)中会一直存在, 直到客户端清除他们为止。


其余待完善


