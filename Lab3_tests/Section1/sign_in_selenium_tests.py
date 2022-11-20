from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.keys import Keys
import time
import string
import unittest
import random

class SignInTest(unittest.TestCase):

    def setUp(self):
        self.driver = webdriver.Chrome(executable_path=r"./chromedriver")
        self.wait = WebDriverWait(self.driver, 10)

        # log in page
        self.driver.get('http://127.0.0.1:8000/login')
        time.sleep(3.5)

    def test_sign_in_correct_email_incorrect_password(self):
        driver = self.driver
        wait = self.wait

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[1]/input"))).send_keys("existing_email@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[2]/input"))).send_keys("wrong_password")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[4]/input'))).click()

        
        self.assertTrue(driver.current_url == "http://127.0.0.1:8000/login")

    def test_sign_in_incorrect_email_correct_password(self):
        driver = self.driver
        wait = self.wait


        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[1]/input"))).send_keys("nonexisting_email@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[2]/input"))).send_keys("12345678")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[4]/input'))).click()
        self.assertTrue(driver.current_url == "http://127.0.0.1:8000/login")

    def test_sign_in_incorrect_email_incorrect_password(self):
        driver = self.driver
        wait = self.wait


        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[1]/input"))).send_keys("nonexisting_email@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[2]/input"))).send_keys("wrong_password")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[4]/input'))).click()
        self.assertTrue(driver.current_url == "http://127.0.0.1:8000/login")

    def test_sign_in_correct_email_correct_password(self):
        driver = self.driver
        wait = self.wait


        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[1]/input"))).send_keys("existing_email@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[1]/form/div[2]/input"))).send_keys("12345678")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[4]/input'))).click()
        self.assertTrue(driver.current_url == "http://127.0.0.1:8000/dashboard")

    # cleanup method called after every test performed
    def tearDown(self):
        self.driver.close()

# execute the script
if __name__ == "__main__":
    unittest.main()