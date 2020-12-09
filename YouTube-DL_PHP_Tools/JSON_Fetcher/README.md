# YouTube JSON Fetcher
Simple PHP Script To GET JSON Data Using youtube-dl TOOLS

    Simple PHP Script To GET JSON Data Using youtube-dl TOOLS
    REQUIRED LINUX OS WITH ROOT ACCESS

    --------------------------------------------------------------------------------------------------------
    INSTALL PYTHON
    apt-get update
    sudo apt-get install python-setuptools
    --------------------------------------------------------------------------------------------------------
    [NOTE] YT-DL WORKING ONLY IN PYTHON 2, I'WE TESTED ON PYTHON 3 BUT NOT WORKING!!!
    INSTALL Python 2
    sudo apt install python-pip
    IF PYTHON 2 Successfully GO TO youtube-dl INSTALLER IGNORE Python 3
    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------
    INSTALL Python 3
    sudo apt install python3-pip 
    --------------------------------------------------------------------------------------------------------
    https://pip.pypa.io/en/stable/installing/
    sudo easy_install pip
    curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
    python get-pip.py
    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------
    INSTALL youtube-dl
    apt-get update
    sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl
    IF U SEE ERROR WITH CERTIFICATE USE THIS COMMAND
    sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl --no-check-certificate
    sudo chmod a+rx /usr/local/bin/youtube-dl
    sudo pip install --upgrade youtube_dl
    FOR UPDATES sudo youtube-dl -U
    PUT PHP FILE IN /var/www/html/YOUR FOLDER
    GIVE PERMISSIONS TO 775 OR 777 rwxrwxrwx
    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------
    MANUAL INSTALL
    PUT youtube-dl IN => /usr/local/bin/
    sudo chmod a+rx /usr/local/bin/youtube-dl
    --------------------------------------------------------------------------------------------------------
    TO GET JSON DATA USE From Browser youtube_dl.php?url= + URL
    EXAMPLE VIDEO youtube_dl.php?url=https://www.youtube.com/watch?v=6IrO01N9LqM
    EXAMPLE LIVE STREAM youtube_dl.php?url=https://www.youtube.com/watch?v=v3jpVUOi9XU
    --------------------------------------------------------------------------------------------------------
