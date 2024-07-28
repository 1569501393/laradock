<?php
// 设置较短的 max_execution_time，例如 5 秒
// ini_set('max_execution_time', 5);
// set_time_limit(1);
ini_set('max_execution_time', 1);
var_dump('max_execution_time==', ini_get('max_execution_time'));

echo "Script started at: " . date('H:i:s') . "\n";

// 模拟一个需要很长时间才能完成的操作
// sleep(300);
$start_time = time();
while (true) {
    // 在适当的地方检查是否超时
    $execution_time = time() - $start_time;
    var_dump(date('Ymd H:i:s'), '$execution_time==', $execution_time);
}

echo "Script ended at: " . date('H:i:s') . "\n";
var_dump('$execution_time==', $execution_time);
