from selenium import webdriver
import unittest
import time

class UnitTesting(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome('C:/Users/vaibh/OneDrive/Desktop/chromedriver.exe')
        cls.driver.implicitly_wait(10)
        cls.driver.maximize_window()

    def testClickLogin(self):
        self.driver.get("http://localhost/banking_dbms")
        self.driver.find_element_by_id("login").click()
        time.sleep(1)

    def testEnterUsername(self):
        username_input = "/html/body/div[2]/form/div[1]/input"
        username = 'raghav@gmail.com'
        username_field = self.driver.find_element_by_xpath(username_input)
        username_field.click()
        username_field.send_keys(username)
        time.sleep(1)

    @classmethod
    def tearDownClass(cls):
        cls.driver.close()
        cls.driver.quit()
        print("Test Completed")


if __name__ == '__main__':
    unittest.main()



