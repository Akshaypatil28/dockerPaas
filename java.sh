sudo -S docker build -t project -f Dockerfile-java . 
sudo -S docker run --rm --name javaimg project > javaoutput.txt >> javaoutput.txt
