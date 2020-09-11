docker build -t project -f Dockerfile-cpp . 
docker run --rm -dit --name cppimg project 
docker exec -w /usr/src/myapp cppimg g++ -o myapp main1.cpp
docker exec -w /usr/src/myapp cppimg ./myapp > cppoutput.txt >> cppoutput.txt
docker stop cppimg
