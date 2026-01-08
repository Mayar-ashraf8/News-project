build:
	docker build -t news-project .

run:
	docker run -p 8080:80 news-project

stop:
	docker ps -q --filter ancestor=news-project | xargs docker stop