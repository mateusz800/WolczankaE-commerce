from bs4 import BeautifulSoup
import requests
import pandas as pd
import random


categories = pd.read_csv('kategorie.csv')[:3]
columns = ['url', 'nazwa', 'kategoria', 'cena', 'opis', 'w magazynie', 'url zdjęć', 'cechy', 'marka']
data = []
combination_data = []
combination_columns = ['id produktu', 'atrybut', 'wartość', 'w magazynie']

for _, category in categories.iterrows():
    
    pages_count = 1
    page_number = 1
    while page_number <= 1:
        page = requests.get(category['link']+'/strona=' + str(page_number))
        print(category['link']+'/strona=' + str(page_number))
        soup = BeautifulSoup(page.content, features='html.parser')
        try:
            pages_count = int(soup.find('div', 'pagination').find('a', 'last').find('span').get_text())
        except:
            print("This page has not pagination")
        items = soup.find('ul', 'products three_items').find_all('li')
        for item in items:
            
            item_data = []
            info = item.find('div', 'product__info')

            images  = item.find('div', 'products__img_wrapper products__img_wrapper--desktop', recursive=True).find_all('img')
            images = ','.join([str(image['src']) for image in images])
            name = info.find('h2').get_text()
            price = info.find('div', 'products-price').get_text().strip('\n').strip(' ')
            try:
                detail_url = item.find('a')['href']
                id = detail_url.split('-')[-1]
                detail_soup = BeautifulSoup(requests.get(detail_url).content, features='html.parser')
                description = detail_soup.find('div', 'product__desc__content').find('p').get_text()
                features = str(detail_soup.find('li', 'product__desc__profile').find_all('p')[1]).replace('<b>', '').replace('</b>', '').replace('<p>', '').replace('</p>', '').replace('<br/>', '\n').split('\n')
                brand = (features[1] + features[2]).split('Marka:')[1].split('Sylwetka:')[0].strip(' ').split('Skład')[0]
                features = ','.join(features)
            except:
                print('Product cannot be added')
                continue
                
            item_data.append(detail_url)
            item_data.append(name)
            item_data.append(category['nazwa'])
            item_data.append(price)
            item_data.append(description)
            item_data.append(random.randint(1,100))
            item_data.append(images)
            item_data.append(features)
            item_data.append(brand)
            data.append(item_data)
        
            
            attributes = ['Color', 'Size']
            types = ['color', 'select']
            color = ""
            try:
                color = detail_soup.find('li', 'buy_section--colors').find('img', 'current')['alt']
            except:
                types.remove(types[attributes.index('Color')])
                attributes.remove('Color')
                print('Item has no color')
            try:
                sizes = detail_soup.find('ul', 'wrapper__fake_drop__items').find_all('li')
                for size in sizes:
                    attributes_str = ""
                    values_str = ""
                    for i in range(len(attributes)):
                        attributes_str += attributes[i]+':'+types[i]+':'+str(i)+','
                    if color != "":
                        values_str = color+','+size['data-name']
                    else:
                        values_str = size['data-name']
                    attributes_str = attributes_str[:-1]
                    combination_data.append([detail_url, attributes_str, values_str, random.randint(1,100)])
            except:
                print('Sizes not found')
        
        page_number +=1


df = pd.DataFrame(data, columns=columns)
df.to_csv('produkty3.csv')

combination_df = pd.DataFrame(combination_data, columns=combination_columns)
combination_df.to_csv('kombinacje3.csv')