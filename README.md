# web-application-1_lab
Docker Demo Application - Simple PHP JSON API

Описание проекта
Простое веб-приложение, демонстрирующее работу с Docker, PHP и JSON API. Приложение построено с использованием минималистичного стека технологий для обеспечения максимальной производительности.

Технологический стек
PHP 8.2: Быстрый и современный язык программирования для веб-разработки
Apache: Надежный веб-сервер
Docker: Платформа для контейнеризации приложений
JSON: Легкий формат обмена данными

Структура проекта
web-application-1_lab/
├── src/
│   ├── index.php      # API endpoint
│   └── client.html    # Веб-интерфейс
├── Dockerfile         # Инструкции для сборки Docker образа
├── docker-compose.yml # Конфигурация Docker
└── README.md         # Документация

Установка и запуск
Предварительные требования
Docker 1
Docker Compose 2
Шаги по запуску
1.Клонировать репозиторий:
git clone <repository-url>
cd web-application-1_lab
2.Собрать и запустить контейнеры:
docker-compose up --build
3.Приложение будет доступно по адресам:
API: http://localhost/index.php
Веб-интерфейс: http://localhost/client.html

Docker команды
Основные команды для работы
# Запуск приложения
docker-compose up -d

# Остановка приложения
docker-compose down

# Просмотр логов
docker-compose logs

# Перезапуск контейнеров
docker-compose restart

Команды для отладки
# Просмотр запущенных контейнеров
docker ps
# Войти в контейнер
docker exec -it web-application-1_lab-web-1 bash
# Просмотр логов контейнера
docker logs web-application-1_lab-web-1

Команды для очистки
# Удалить все остановленные контейнеры
docker container prune

# Удалить все неиспользуемые образы
docker image prune -a

# Полная очистка (контейнеры, образы, volumes)
docker system prune -a

Тестирование API
Использование curl
# Получение JSON данных
curl http://localhost/index.php

# В PowerShell для форматированного вывода
(curl http://localhost/index.php).Content | ConvertFrom-Json | ConvertTo-Json -Depth 10