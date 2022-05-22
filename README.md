# Core-Signal-Website

## Development Starter

```bash
$ docker-compose up -d --build
$ create file .env from .env.example
$ docker exec -it <container id> bash
$ php artisan key:generate
```

## Prod Starter

#### syntax: docker build -t <image-tag> <dockerfile-location>

#### syntax: docker run -d -p <port> <image-tag>

```bash
$ docker build -t app:latest .
$ docker run -d -p 80:80 app:latest
```

#### If you want to test your local image

```bash
docker run -d -p 80:80 app:latest
```

#### Note: if run in production image make sure you connect database before build.
