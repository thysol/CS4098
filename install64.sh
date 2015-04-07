sudo apt-get -y --force-yes update
sudo apt-get -y --force-yes install make
sudo apt-get -y --force-yes install bison
sudo apt-get -y --force-yes install flex
sudo apt-get -y --force-yes install libxml2
sudo apt-get -y --force-yes install check
sudo apt-get -y --force-yes install expect
sudo apt-get -y --force-yes install tcl
sudo apt-get -y --force-yes install mysqltcl
sudo apt-get -y --force-yes install lib32ncurses5-dev
sudo apt-get -y --force-yes install libreadline-dev
sudo apt-get -y --force-yes install python3
sudo apt-get -y --force-yes install python-pip
sudo pip install https://github.com/hay/xml2json/zipball/master
sudo apt-get -y --force-yes install apache2
sudo apt-get -y --force-yes install tcl-dev
sudo apt-get -y --force-yes install libxml2-dev
sudo apt-get -y --force-yes install dos2unix
git clone https://github.com/jnoll/peos
cp backend/peos/kernel/. peos/os/kernel/ -R
cp backend/peos/models/. peos/models/ -R
cd peos
sudo make
rm models/build_test.pml
rm models/commit_changes.pml
rm models/incremental_test.pml
rm models/netbeans_req_release.pml
rm models/run_peos.pml
rm models/simple.pml
rm models/test_commit.pml
rm models/web_test.pml

cd ../
sudo make install

