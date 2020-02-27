import pandas as pd

data = pd.read_csv('produkty.csv')
combination_data = pd.read_csv('kombinacje.csv')
cleaned_data = []
unique_urls = data.url.unique()
i = 1
for url in unique_urls:
    products = data.loc[data['url'] == url]
    names = products['nazwa'].unique()
    


    for name in names:
        categories = ','.join(products['kategoria'].unique())
        template = products.loc[products['nazwa'] == name].iloc[0]
        cleaned_data.append([i, name, categories, template['cena'], template['opis'], template['w magazynie'], template['url zdjęć'], template['cechy'], template['marka']])
        combination_data = combination_data.replace(url, i)
        i += 1


df = pd.DataFrame(data=cleaned_data, columns=data.columns[1:])
df['cechy'] = df['cechy'].str.replace(',,', ',')
df['marka'] = df['marka'].str.replace(' ', '')
df.to_csv('produkty2.csv')

combination_df = pd.DataFrame(combination_data, columns=combination_data.columns)
combination_df.to_csv('kombinacje2.csv')