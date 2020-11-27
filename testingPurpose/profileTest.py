# -*- coding: utf-8 -*-
"""
Created on Thu Nov 26 15:36:35 2020

@author: vaibh
"""

#Importing the libraries

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

#Webdriver

chr_op = webdriver.ChromeOptions()
chr_op.add_experimental_option('useAutomationExtension',False)#The useAutomationExtension: false option disables the driver to install other chrome extensions, such as CaptureScreenshot and others.
chr_op.add_argument('--start-maximized')
driver = webdriver.Chrome(r'C:\Users\vaibh\OneDrive\Desktop\chromedriver.exe',options=chr_op)
#Localhost
#driver.implicitly_wait(wait_time)
driver.get("http://localhost/for simulation/")



#Logging in

username = 'raghav@gmail.com'
password = '12345'

username_input = "/html/body/form/input[1]"
password_input = "/html/body/form/input[2]" 
submit_path = "/html/body/form/input[3]"

driver.find_element_by_id("login").click()
time.sleep(1)

username_field = driver.find_element_by_xpath(username_input)
#username_field.clear()
username_field.click()
username_field.send_keys(username)
time.sleep(1)

password_field = driver.find_element_by_xpath(password_input)
#password_field.clear()
password_field.click()
password_field.send_keys(password)
time.sleep(1)
driver.find_element_by_xpath(submit_path).click()
time.sleep(1)


#Profile Page
driver.find_element_by_xpath('//*[@id="navbarSupportedContent"]/ul/li[6]/a').click()


#Verification
expected_text = "MY PROFILE"
actual_text = driver.find_element_by_xpath('/html/body/div/h4').text
assert expected_text == actual_text, f'Error. Expected text {expected_text}, but actual text {actual_text}'



