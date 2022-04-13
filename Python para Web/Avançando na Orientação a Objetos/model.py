class Movie:
    def __init__(self, name, year, lenght):
        self.name = name.title()
        self.year = year
        self.lenght = lenght
        self.likes = 0
    
    def like(self):
        self.likes += 1

class Series:
    def __init__(self, name, year, seasons):
        self.name = name.title()
        self.year = year
        self.seasons = seasons
        self.likes = 0
    
    def like(self):
        self.likes += 1

avengers = Movie("Avengers - Infinite War", 2018, 160)
avengers.like()
print(f"Nome: {avengers.name} - Year: {avengers.year} - Lenght: {avengers.lenght}m - Likes: {avengers.likes}")

atlanta = Series("Atlanta", 2018, 2)
atlanta.like()
atlanta.like()
print(f"Nome: {atlanta.name} - Year: {atlanta.year} - Seasons: {atlanta.seasons} - Likes: {atlanta.likes}")
