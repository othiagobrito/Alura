class Program:
    def __init__(self, name, year):
        self._name = name.title()
        self.year = year
        self._likes = 0

    @property
    def name(self):
        return self._name
    
    @name.setter
    def name(self, name):
        self._name = name.title()

    @property
    def likes(self):
        return self._likes

    def like(self):
        self._likes += 1

class Movie(Program):
    def __init__(self, name, year, lenght):
        self._name = name.title()
        self.year = year
        self.lenght = lenght
        self._likes = 0

class Series(Program):
    def __init__(self, name, year, seasons):
        self._name = name.title()
        self.year = year
        self.seasons = seasons
        self._likes = 0

avengers = Movie("Avengers - Infinite War", 2018, 160)
avengers.like()
print(f"Nome: {avengers.name} - Year: {avengers.year} - Lenght: {avengers.lenght}m - Likes: {avengers.likes}")

atlanta = Series("Atlanta", 2018, 2)
atlanta.like()
atlanta.like()
print(f"Nome: {atlanta.name} - Year: {atlanta.year} - Seasons: {atlanta.seasons} - Likes: {atlanta.likes}")
