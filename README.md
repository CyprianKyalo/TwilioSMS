# TwilioSMS
An API that uses the Twilio messaging option to send an SMS to the provided number

# Setup
## Requirements
1. Xampp (or any other web server)
2. Sublime text (or any other editor of your choice)
3. Web browser (Preferrably Google Chrome)
4. Twilio Account

## Steps
1. Navigate to the `C:xampp/htdocs` folder.
2. Open the ``Git Bash terminal`` within the folder.
3. Clone this repository using the command ``git clone https://github.com/CyprianKyalo/TwilioSMS.git``
4. Once cloning is done, open the ***Xampp*** application and make sure it's up and running.
5. Open the ``TwilioSMS/index.php`` then update the `$sid`, `$token` and `from` with your Twilio Account SID, Auth Token and trial number respectively.
6. Go to your web browser and paste in the following command: ``localhost/TwilioSMS/index.php``
7. Type in the mobile number you want to send the message to and the message, then click send.
