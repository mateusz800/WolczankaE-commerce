from bs4 import BeautifulSoup
import requests
import pandas as pd


data = []
columns_names = ['nazwa', 'kategoria nadrzedna', 'link']
page = requests.get('https://www.wolczanka.pl/')
soup = BeautifulSoup(page.content, features='html.parser')

submenus = soup.find_all('div', 'submenu' )[:7]
for submenu in submenus:
    main_category = submenu.find('div', 'submenu__main_category').find('a')
    main_category_name = main_category.get_text()
    while True:
        for row in data:
            if main_category_name == row[0]:
                main_category_name = main_category_name + str(1)
                continue
        break
    data.append([main_category_name, '', main_category['href']])
    columns = submenu.find('div', 'wrapper').find_all('ul')[:-1]
    for column in columns:
        links = column.find_all('a')
        for link in links:
            category_name = link.get_text()
            while True:
                for row in data:
                    if category_name == row[0]:
                        category_name = category_name + str(1)
                        continue
                break
            data.append([category_name, main_category_name, link['href']])

df = pd.DataFrame(data=data, columns=columns_names)
df.to_csv('kategorie.csv')