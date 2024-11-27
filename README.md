# Hướng Dẫn Cấu Hình và Chạy Moodle với Docker

---

## RUN DOCKER COMPOSE IN LOCAL

### B1: Cập nhật cấu hình trong `config.php`
- Đường dẫn: `disk/moodle-node/config/config.php`
- Thực hiện:
  - Cập nhật:
    ```php
    $CFG->wwwroot = 'http://localhost';
    ```
  - Comment các dòng sau:
    ```php
    //$CFG->sslproxy  = 1;
    //$CFG->lmsCoreLearningStateHookEndpoint = "http://172.16.1.47:28002/api/Lesson/create-log";
    //$CFG->lmsCoreSsoName = "EDU SSO";
    ```

### B2: Cập nhật cấu hình Nginx
- Đường dẫn: `disk/moodle-node/config/node1/nginx/site-enable/vtc.conf`
- Thực hiện:
  - Cập nhật dòng:
    ```nginx
    server_name localhost;
    ```

### B3: Chạy Docker Compose
1. Chạy lệnh:
   ```bash
   docker-compose up -d
   ```
2. link web: http://localhost


## UPDATE DOCKER IMAGE VÀ DATABASE

### B1: Cập nhật SQL Dump
- Đường dẫn: disk/maria-db/data/dump/localhost.sql
- Thực hiện: Thay file dump bằng file SQL mới nhất.
### B2: Cập nhật source code
- Đường dẫn: disk/moodle-node/source/edu-vtc-lms
- Thực hiện: Cập nhật source code mới.
### B3: Cập nhật Moodle Data
- Đường dẫn: disk/moodle-node/source/moodledata
- Thực hiện: Cập nhật dữ liệu Moodle mới.
### B4: Build và push Docker image mới
1. Build image:
   ```bash
    cd disk/moodle-node
    docker build --no-cache --progress=plain -t moodle-vtc:latest .
   ```
2. Gắn tag và push lên Docker Hub:
   ```bash
   docker tag moodle-vtc:latest [dockerhub_username]/moodle-vtc:latest
   docker push [dockerhub_username]/moodle-vtc:latest
   ```
### B5: Cập nhật docker-compose.yaml
1. Mở file docker-compose.yaml và cập nhật tên image của lms-node-01:
   ```yaml
   lms-node-01:
      image: [dockerhub_username]/moodle-vtc:latest
   ```
2. Sau khi cập nhật, thực hiện lại các bước trong [RUN DOCKER COMPOSE IN LOCAL](##RUN DOCKER COMPOSE IN LOCAL).



## Ghi Chú
1. Docker Hub Username:
   - Thay [dockerhub_username] bằng username Docker Hub của bạn.
   
2. Nếu chạy server thật cập nhật lại domain name:
   - revert lại các config B1, B2 trong [RUN DOCKER COMPOSE IN LOCAL](##RUN DOCKER COMPOSE IN LOCAL).
   - disk/moodle-node/config/config.php: $CFG->wwwroot = "http://domain-name";
   - disk/moodle-node/config/node1/nginx/site-enable/vtc.conf: server_name domain-name; 
   
3. Nếu chạy trên vtc vm
   - revert lại các config B1, B2 trong [RUN DOCKER COMPOSE IN LOCAL](##RUN DOCKER COMPOSE IN LOCAL).
   - commit thay đổi rồi push lên git
  
