<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

//建立一个到RabbitMQ服务器的连接：
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');

//创建一个通道,这是大部分的API来完成任务所在。
$channel = $connection->channel();

//声明一个队列, 然后我们可以向队列发布消息：
$channel->queue_declare('hello', false, false, false, false);
$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');
echo " [x] Sent 'Hello World!'\n";

//关闭通道和连接;
$channel->close();
$connection->close();
?>
