FROM nginx:latest
FROM php:latest
FROM mysql:latest

COPY index.php /usr/share/nginx/html
COPY linux.png /usr/share/nginx/html

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]
