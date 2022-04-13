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

avengers = Movie("Avengers - Infinite War", 2018, 160)
avengers.like()

atlanta = Series("Atlanta", 2018, 2)
atlanta.like()
atlanta.like()

movies_and_series = [avengers, atlanta]

for program in movies_and_series:
    print(program)
