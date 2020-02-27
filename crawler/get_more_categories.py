from bs4 import BeautifulSoup
import requests
import pandas as pd

def category_exist(data, category_name):
    print(data)
    for row in data:
        if category_name == row[0]:
            return true
    return false
    

def recursive_search(category, level, parent_name, data):
    try:
        children = category.find('ul').find_all('li', recursive=False)
        for child in children:
            link = child.find('a')
            category_name = link.get_text()
            i = 1
            while True:
                for row in data:
                    if category_name == row[0]:
                        category_name = category_name + str(i)
                        continue
                break
                i += 1

            data.append([category_name, parent_name, link['href'] ])
            recursive_search(child, level+1, category_name, data)
    except:
        return





if __name__ == "__main__":
    data = []
    site_map = requests.get('https://www.wolczanka.pl/site_map')
    columns = ['nazwa', 'kategoria nadrzedna', 'link']
    soup = BeautifulSoup(site_map.content, features='html.parser')

    category = soup.find('div', 'site_map').find_all('ul')[1].find('li')
    for _ in range(9):
        link = category.find('a')
        category_name = link.get_text()
        while True:
            for row in data:
                if category_name == row[0]:
                    category_name = category_name + str(1)
                    continue
            break
        data.append([category_name, '', link['href'] ])
        recursive_search(category, 1, category_name, data)   
        category = category.find_next_sibling('li')

    df = pd.DataFrame(data=data, columns=columns)
    df.to_csv('kategorie.csv')

