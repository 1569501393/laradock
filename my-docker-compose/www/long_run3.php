<?php
// 设置较短的 max_execution_time，例如 5 秒
// ini_set('max_execution_time', 5);
// set_time_limit(1);

ini_set('max_execution_time', 1);
var_dump('max_execution_time==', ini_get('max_execution_time'));

echo "Script started at: " . date('H:i:s') . "\n";
// for ($i = 0; $i < 10; $i++) {
//     var_dump('i==', $i);
//     sleep(1);
// }

// 模拟一个需要很长时间才能完成的操作
// sleep(300);

$max_execution_time = 2; // 设置最大执行时间为30秒

$start_time = time();
while (true) {
    // 执行一些操作，例如数据库查询、文件操作等

    // 在适当的地方检查是否超时
    $current_time = time();
    $execution_time = $current_time - $start_time;
    var_dump(date('Ymd H:i:s'));
    // if ($execution_time > $max_execution_time) {
    //     // 超时处理逻辑，例如记录日志、发送警报等
    //     var_dump('超时====');
    //     break; // 退出循环或执行其他操作
    // }
}

echo "Script ended at: " . date('H:i:s') . "\n";
var_dump('$execution_time==', $execution_time);
