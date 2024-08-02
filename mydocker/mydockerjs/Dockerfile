# docker build -t jieqiang2020/hello-node:v1.3 .
# docker run -it jieqiang2020/hello-node:v1.3 bash
# docker run jieqiang2020/hello-node:v1.3
# 添加注释，方便以后维护
FROM node

# 自动创建目录
WORKDIR /app

COPY . /app
# COPY . /app2

CMD [ "node", "app.js" ]
# CMD node app.js




