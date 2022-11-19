from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import string
import unittest
import random

class SignUpTest(unittest.TestCase):

    def setUp(self):
        self.driver = webdriver.Chrome(executable_path=r"./chromedriver")
        self.wait = WebDriverWait(self.driver, 10)

    def test_sign_up_as_founder(self):
        driver = self.driver
        wait = self.wait

        # Founder
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('0')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        a = driver.find_element(By.XPATH, "/html/body/div/main/div/div/div/div[2]").text
        self.assertTrue('Welcome to your Dashboard.' in a)

    def test_sign_up_as_skilled(self):
        driver = self.driver
        wait = self.wait

        # Skilled
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('1')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        a = driver.find_element(By.XPATH, "/html/body/div/main/div/div/div/div[2]").text
        self.assertTrue('Welcome to your Dashboard.' in a)
    
    def test_sign_up_as_investor(self):
        driver = self.driver
        wait = self.wait

        # Investor
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('2')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        a = driver.find_element(By.XPATH, "/html/body/div/main/div/div/div/div[2]").text
        self.assertTrue('Welcome to your Dashboard.' in a)

    def test_sign_up_as_admin(self):
        driver = self.driver
        wait = self.wait

        # Admin
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('3')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        a = driver.find_element(By.XPATH, "/html/body/div/main/div/div/div/div/div[2]").text
        self.assertTrue('Welcome to Administrator dashboard' in a)

    def test_sign_up_with_invalid_email(self):
        driver = self.driver
        wait = self.wait

        # Invalid password
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('1')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/login')

    def test_sign_up_with_invalid_password(self):
        driver = self.driver
        wait = self.wait

        # Invalid password
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(3))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('1')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/login')

    def test_sign_up_with_existing_username(self):
        driver = self.driver
        wait = self.wait

        # Invalid password
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys("existing_username")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"{random_str}@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('1')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/login')

    def test_sign_up_with_existing_email(self):
        driver = self.driver
        wait = self.wait

        # Invalid password
        driver.get('http://127.0.0.1:8000/login')
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, '/html/body/div[1]/main/div/div/div[1]/div/span/a'))).click()
        letters = string.ascii_lowercase
        random_str = ''.join(random.choice(letters) for _ in range(10))
        wait.until(EC.element_to_be_clickable(driver.find_element(By.ID, "name"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[2]/input"))).send_keys(f"existing_email@gmail.com")
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[3]/input"))).send_keys(random_str)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[4]/input"))).send_keys(random_str)
        role_dropdown = Select(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[5]/select"))
        role_dropdown.select_by_index('1')
        time.sleep(3)
        wait.until(EC.element_to_be_clickable(driver.find_element(By.XPATH, "/html/body/div/main/div/div/div[2]/form/div[7]/input"))).click()
        time.sleep(3)
        self.assertTrue(driver.current_url == 'http://127.0.0.1:8000/login')

    # cleanup method called after every test performed
    def tearDown(self):
        self.driver.close()

# execute the script
if __name__ == "__main__":
    unittest.main()
