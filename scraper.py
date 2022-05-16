import requests
from bs4 import BeautifulSoup
import pandas as pd

import random
from random import randint
import numpy as np

baseurl = "https://www.bol.com/nl/nl/"

headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36'}

productlinks = []
t = {}
data = []
c = 0

# lees als: pak alles van 1e pagina tot aan 2e pagina (ofc later meer pages)
for x in range(1, 2):
    k = requests.get(
        'https://www.bol.com/nl/nl/l/boeken/8299/'.format(x)).text
    soup = BeautifulSoup(k, 'html.parser')

    # pak alle resultaten van die pagina
    productlist = soup.find_all(
        "li", {"class": "product-item--row js_item_root"})

    # vind alle linken die leiden naar elke product in een ander tabblad
    for product in productlist:
        link = product.find(
            "a", {"class": "product-image product-image--list px_list_page_product_click"}).get('href')
        productlinks.append(baseurl + link)

# voor elke product individueel, pak de naam, price en image

for link in productlinks:
    f = requests.get(link, headers=headers).text
    hun = BeautifulSoup(f, 'html.parser')

    try:
        price = hun.find(
            "span", {"class": "promo-price"}).text.replace('\n', "")  # check
    except:
        price = None
    try:
        name = hun.find(
            "span", {"data-test": "title"}).text.replace('\n', "")  # check
    except:
        name = None

        # image is beveiligd, dit zeggen we miss ook  in presentatie
    try:
        image = hun.find("img")["src"]
    except:
        image = None

    boek = {"name": name, "price": price, "image": image}

    data.append(boek)
    c = c+1
    print("completed", c)

df = pd.DataFrame(data)
print(df)
# ff gezocht welke type df is om random() op te zoeken: uitkomst --> list
# print(type(df))
# gwn beetje geprobeerd
# dfprint = random.choice(df)
# print(dfprint)
