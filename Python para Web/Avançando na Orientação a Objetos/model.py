class Movie:
    def __init__(self, name, year, lenght):
        self.__name = name.title()
        self.year = year
        self.lenght = lenght
        self.__likes = 0
    
    @property
    def name(self):
        return self.__name
    
    @name.setter
    def name(self, name):
        self.__name = name.title()

    @property
    def likes(self):
        return self.__likes

    def like(self):
        self.__likes += 1

class Series:
    def __init__(self, name, year, seasons):
        self.__name = name.title()
        self.year = year
        self.seasons = seasons
        self.__likes = 0
    
    @property
    def name(self):
        return self.__name
    
    @name.setter
    def name(self, name):
        self.__name = name.title()

    @property
    def likes(self):
        return self.__likes

    def like(self):
        self.__likes += 1

avengers = Movie("Avengers - Infinite War", 2018, 160)
avengers.like()
print(f"Nome: {avengers.name} - Year: {avengers.year} - Lenght: {avengers.lenght}m - Likes: {avengers.likes}")

atlanta = Series("Atlanta", 2018, 2)
atlanta.like()
atlanta.like()
print(f"Nome: {atlanta.name} - Year: {atlanta.year} - Seasons: {atlanta.seasons} - Likes: {atlanta.likes}")
