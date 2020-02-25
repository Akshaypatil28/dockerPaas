sudo -S docker build -t project -f Dockerfile-python . 
sudo -S docker run --rm --name pyimg project > pythonoutput.txt >> pythonoutput.txt
