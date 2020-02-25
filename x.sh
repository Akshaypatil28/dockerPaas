sudo -S docker build -t project . 
sudo -S docker run -d --rm -p 9050:80 project
