ages = [39, 30, 27, 18]

next_year = [(age + 1) for age in ages]
print(next_year)

narrow_down = [(age) for age in ages if age > 21]
print(narrow_down)

def lenght(arr):
    print(len(arr))

lenght(ages)
