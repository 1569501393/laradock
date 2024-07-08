<?php
// 设置较短的 max_execution_time，例如 5 秒
ini_set('max_execution_time', 5);

// 模拟一个需要很长时间才能完成的操作
$start = time();
while (true) {
    // 增加一个延迟，模拟处理时间
    usleep(500000); // 0.5 秒

    // 打印当前时间，用于查看执行时间
    echo date('H:i:s') . "\n";

    // 如果执行时间超过了 max_execution_time，手动退出循环
    if (time() - $start > ini_get('max_execution_time')) {
        echo "Execution time exceeded!\n";
        break;
    }
}
