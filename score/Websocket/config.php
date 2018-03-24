<?php
// websocketserver的配置
return [
	'application_index' => 'App\\Application',
	'application_service' => 'Service\\Application1',
	'start_init' => 'Swoolefy\\Websocket\\StartInit',
	'master_process_name' => 'php-websocket-master',
	'manager_process_name' => 'php-websocket-manager',
	'worker_process_name' => 'php-websocket-worker',
	'www_user' => 'www',
	'host' => '0.0.0.0',
	'port' => '9503',
	// websocket独有
	'accept_http' => true,
	'time_zone' => 'PRC', 
	'setting' => [
		'reactor_num' => 1, //reactor thread num
		'worker_num' => 3,    //worker process num
		'max_request' => 1000,
		'task_worker_num' =>5,
		'task_tmpdir' => '/dev/shm',
		'daemonize' => 0,
		// websocket使用固定的worker，使用2或4
		'dispatch_mode' => 3,
		'log_file' => __DIR__.'/log.txt',
		'pid_file' => __DIR__.'/server.pid',
	],
	'table_tick_task' => true,
	// 'table' => [
	// 	'table1' => [
	// 		'size' => 1024,
	// 		'fields'=> [
	// 			['tick_tasks','string',512]
	// 		]
	// 	],
	// 	'table2' => [
	// 		'size' => 1024,
	// 		'fields'=> [
	// 			['after_tasks','string',512]
	// 		]
	// 	],
	// ],

];