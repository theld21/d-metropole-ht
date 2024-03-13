# Build project
~ on windows  
docker-compose up -d --build  
docker-compose exec api composer install  
docker-compose exec api php artisan migrate  
docker-compose exec api php artisan optimize:clear  
  
~ on linux  
docker-compose up -d --build  
make init  
make update  
