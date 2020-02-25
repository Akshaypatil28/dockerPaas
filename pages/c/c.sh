docker build -t project -f Dockerfile-c . 
docker run --rm -dit --name cimg project
docker exec -w /usr/src/myapp cimg gcc -o myapp main.c 
docker exec -w /usr/src/myapp cimg ./myapp > coutput.txt >> coutput.txt
docker stop cimg
