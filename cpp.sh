sudo -S docker build -t project -f Dockerfile-cpp . 
sudo -S docker run --rm -dit --name cppimg project 
sudo -S docker exec -w /usr/src/myapp cppimg g++ -o myapp main1.cpp
sudo -S docker exec -w /usr/src/myapp cppimg ./myapp > cppoutput.txt >> cppoutput.txt
sudo -S sudo docker stop cppimg
