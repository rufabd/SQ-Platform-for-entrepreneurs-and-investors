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

class ProfileTest(unittest.TestCase):

    PHOTO_PATH = "/Applications/XAMPP/xamppfiles/htdocs/SQ-Platform-for-entrepreneurs-and-investors/test_photo.jpg"

    def setUp(self):
        self.driver = webdriver.Chrome(executable_path=r"./chromedriver")
        self.wait = WebDriverWait(self.driver, 10)

        # sign in
        # log in to the account
        self.driver.get('http://127.0.0.1:8000/login')
        time.sleep(3.5)
        self.wait.until(EC.element_to_be_clickable(self.driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[1]/input'))).send_keys("existing_email@gmail.com")
        self.wait.until(EC.element_to_be_clickable(self.driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[2]/input'))).send_keys("12345678")
        self.wait.until(EC.element_to_be_clickable(self.driver.find_element(By.XPATH, '/html/body/div/main/div/div/div[1]/form/div[4]/input'))).click()
        
        # profile complete page
        self.driver.get('http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_valid(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)
        print(driver.current_url)
        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder')
        
    def test_complete_profile_missing_name(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_surname(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_profession(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_org(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_telephone(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_instagram(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_invalid_instagram_link(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_facebook(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_invalid_facebook_link(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_linkedin(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_invalid_linkedin_link(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("https://facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_notes(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_invalid_notes_length(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("something of average size")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    def test_complete_profile_missing_avatar(self):
        driver = self.driver
        wait = self.wait
        time.sleep(3.5)

        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[1]/div/input'))).send_keys("John")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[2]/div/input'))).send_keys("Doe")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[3]/div/input'))).send_keys("Developer")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[4]/div/input'))).send_keys("Example Org")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[5]/div/input'))).send_keys("+372123123")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[6]/div/input'))).send_keys("https://instagram.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[7]/div/input'))).send_keys("facebook.com/username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[8]/div/input'))).send_keys("https://linkedin.com/in/username")
        driver.execute_script('scroll(0, 250)')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[9]/div/textarea'))).send_keys("extra extraextraextraextraextraextraextraextraextraextra extraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextraextra")
        driver.execute_script('scroll(0, 250)')
        time.sleep(2)
        # wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[10]/div/input'))).send_keys(self.PHOTO_PATH)
        driver.execute_script('scroll(0, 350)')
        time.sleep(2)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div/main/div[2]/div/div/div/div[2]/form/div[11]/div/button'))).click()
        time.sleep(3)

        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/dashboard/profile/founder/create')

    # cleanup method called after every test performed
    def tearDown(self):
        self.driver.close()

# execute the script
if __name__ == "__main__":
    unittest.main()