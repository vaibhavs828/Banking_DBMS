import datetime as dt
import time
import smtplib

def send_email():
    
    server = smtplib.SMTP ('smtp.gmail.com', 587)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login('jayanthsibbala123@gmail.com','smartpassword')
    subject="hi hafflu"
    body = """\
<html>
  <head></head>
  <body>
    <p>Hi!<br>
       How are you?<br>
       Here is the <a href="http://www.python.org">link</a> you wanted.
    </p>
  </body>
</html>
"""
    message=f"Subject: {subject}\n\n{body}"
    #EMAIL
   
    server.sendmail('jayanthsibbala123@gmail.com', 'jayanthsibbala123@gmail.com', message)
    server.quit()

def send_email_at(send_time):
    
    send_email()
    print('email sent')


first_email_time = dt.datetime(2020,12,1,23,7,00) # set your sending time in UTC
interval = dt.timedelta(hours=60) # set the interval for sending the email

send_time = first_email_time
while True:
    send_email_at(send_time)
    send_time = send_time + interval