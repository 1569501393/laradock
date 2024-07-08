FROM registry.internal.codefriend.top/base/hyperf:8.2-alpine-v3.18-swoole

RUN apk update && apk add shadow && apk add bash

# 安装 php-pgsql 扩展
RUN apk add php82-pdo_pgsql php82-pgsql

# 添加用户
RUN #groupadd -r mygroup && useradd -r -g mygroup -u 1000 myuser
RUN useradd -r -u 1000 myuser
# RUN groupadd -r jieqiang && useradd -r -g jieqiang -u 1000 jieqiang

# 设置用户主目录和工作目录（可选）
ENV HOME=/home/myuser
WORKDIR $HOME

# 更改用户权限（如果需要）
RUN chown -R myuser:mygroup $HOME

# 切换到新用户
USER myuser
