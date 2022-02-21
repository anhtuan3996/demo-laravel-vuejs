# DEMO

## How to run backend source code
1. Copy env
```
cp .env.example .env
```
2. Run backend
```
./vendor/bin/sail up
```
3. Import database
```
docker exec -i [CONTAINER_MYSQL_NAME] mysql -u sail -ppassword example_app < database/masters/test.sql
```
## How to run FE source code
1. Enter folder frontend code
```
cd demo-frontend
```
2. Install package
```
yarn
```
3. Run source code
```
yarn serve
```
### Document
1. Document API : https://www.getpostman.com/collections/ab0edb7ec03da9602602
