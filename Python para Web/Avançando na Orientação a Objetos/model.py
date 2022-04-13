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
    
    def __str__(self):
        return f"{self._name} - {self.year} - {self._likes} likes"

class Movie(Program):
    def __init__(self, name, year, lenght):
        super().__init__(name, year)
        self.lenght = lenght

    def __str__(self):
        return f"{self._name} - {self.year} - {self.lenght} min - {self._likes} likes"

class Series(Program):
    def __init__(self, name, year, seasons):
        super().__init__(name, year)
        self.seasons = seasons
    
    def __str__(self):
        return f"{self._name} - {self.year} - {self.seasons} seasons - {self._likes} likes"

class Playlist:
    def __init__(self, name, programs):
        self.name = name
        self.programs = programs

    def size(self):
        return len(self.programs)

avengers = Movie("Avengers - Infinite War", 2018, 160)
batman = Movie("The Batman", 2022, 176)
atlanta = Series("Atlanta", 2018, 2)
young_sheldon = Series("Young Sheldon", 2017, 5)


avengers.like()
batman.like()
batman.like()
batman.like()
atlanta.like()
atlanta.like()
young_sheldon.like()
young_sheldon.like()
young_sheldon.like()
young_sheldon.like()

movies_and_series = [avengers, atlanta, batman, young_sheldon]
weekend_playlist = Playlist("weekend", movies_and_series)

for program in weekend_playlist.programs:
    print(program)
