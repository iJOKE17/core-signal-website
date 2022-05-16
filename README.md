Step

1. docker-compose up -d --build
2. create file .env from .env.example
3. docker exec -it php(ชื่อ service ใน docker) bash  
4. php artisan key:generate