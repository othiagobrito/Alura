class Movie:
    def __init__(self, name, year, lenght):
        self.name = name
        self.year = year
        self.lenght = lenght

class Series:
    def __init__(self, name, year, seasons):
        self.name = name
        self.year = year
        self.seasons = seasons

avangers = Movie("Avengers - Infinite War", 2018, 160)
print(f"Nome: {avangers.name} - Year: {avangers.year} - Lenght: {avangers.lenght}m")

atlanta = Series("Atlanta", 2018, 2)
print(f"Nome: {atlanta.name} - Year: {atlanta.year} - Seasons: {atlanta.seasons}")
