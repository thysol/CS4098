#CS4098

#Installation:
- Go to where you want the program to be installed
- Run "sudo apt-get install git"
- Enter the CS4098 directory and run "sudo chmod +x install32.sh"
	- Do "sudo chmod +x install64.sh" instead if using 64 bit
- Run "sudo ./install32.sh"
	- "sudo ./install64.sh" if 64 bit
- This script will now install all dependencies then install the program
- Answer "yes" to all confirmation prompts
- You may be prompted to create and/or enter a MySQL root password, please do so
- If you want to install dependencies manually, see the below section

#Requirements:
- The user installing the program must be able to use sudo
- The following commands need to be run (if not using our install script)
	- sudo apt-get update (required for flex to install properly)
	- sudo apt-get install make
	- sudo apt-get install check
	- sudo apt-get install tcl-dev
	- sudo apt-get install libreadline-dev
	- if 64 bit
		- sudo apt-get install lib32ncurses5-dev
	- if 32 bit
		- sudo apt-get install libncurses5-dev
	- sudo apt-get install apache2
	- sudo apt-get install python3
	- sudo apt-get install git
	- sudo apt-get install bison
	- sudo apt-get install flex
	- sudo apt-get install python-pip
	- sudo pip install https://github.com/hay/xml2json/zipball/master
	- sudo apt-get install mysqltcl

#To verify OpenEMR is working:

- Go to OpenEMR location on server 
	- http://localhost/openemr/
- Go to OpenEMR location on server 
	- http://localhost/openemr
- Sign in as admin
	- username: admin
	- password: pass
- Create patients

#To verify peos is working

- Go to CS4098/peos/os/kernel and run "./peos -h" and it should display a list of possible commands
