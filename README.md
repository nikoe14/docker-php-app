# Docker - php-app  
**How should you use it?**
To use this sample you should follow the steps described below:

1 - First you must to clone this repo.

2 - To create the image you need go to root project directory (cd  /cloned_docker-php-app_path/ ) and run: 
```sh 
  docker build -t php-app:1.0 .
```

3 - Now, to create the container instance you should run the command below:
```sh 
  docker run -d -e CONTAINER_NUMBER=1 php-app:1.0
```

4 - Finally open your favorite web browser and go to http://CONTAINER_IP
    (you can check the ip with the command below)

```sh 
  docker inspect --format '{{ .NetworkSettings.IPAddress }}' CONTAINER_ID
```