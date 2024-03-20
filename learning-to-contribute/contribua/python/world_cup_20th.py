# -*- coding: utf-8 -*-

# Print List of Country Host of FIFA World Cup on Century 21


world_cup_21th = {
    '2002': ['South Korea', 'Japan'],
    '2006': 'Germany',
    '2010': 'South Africa',
    '2014': 'Brazil',
    '2018': 'Russia',
    }


def find_country(year):
     if year in world_cup_21th:
          val = world_cup_21th[year]
     else:
          val = "NONE"
     
     return val     

if __name__ == '__main__':
    

    # read users input
    worldCupYear = raw_input("Please input FIFA World Cup year: ")
    
    # print the output
    print(find_country(worldCupYear))
