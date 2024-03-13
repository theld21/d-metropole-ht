SCRIPT_VERSION=v1.0
SCRIPT_AUTHOR=theld21

init:
	@docker-compose exec api composer install

update:
	@docker-compose exec api php artisan migrate
	@docker-compose exec api php artisan optimize:clear
	@docker-compose exec api php artisan cache:clear
	@docker-compose exec api php artisan queue:restart
