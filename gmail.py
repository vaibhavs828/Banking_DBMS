import datetime as dt
import time
import smtplib

def send_email():
    
    server = smtplib.SMTP ('smtp.gmail.com', 587)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login('jayanthsibbala123@gmail.com', 'password')
    subject=""
    body=""
    message=f"Subject: {subject}\n\n{body}"
    #EMAIL
   
    server.sendmail('jayanthsibbala123@gmail.com', 'reciever email', message)
    server.quit()

def send_email_at(send_time):
    
    send_email()
    print('email sent')
    time.sleep(2.592e+6)

first_email_time = dt.datetime(2020,12,1,23,7,00) # set your sending time in UTC
interval = dt.timedelta(minutes=2*60) # set the interval for sending the email

send_time = first_email_time
while True:
    send_email_at(send_time)
    send_time = send_time + interval