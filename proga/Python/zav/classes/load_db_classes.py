import shelve
import os

os.chdir('shelve_database')
db = shelve.open('people-classes')
for key in db:
    print(key, '=>\n ', db[key].__class__.__name__ + ', pay =', db[key].pay)

print()
marina = db['Marina Dadakhanova']
print("Marina's pay before raise:", marina.pay)
marina.give_raise(.10)
print("Marina's pay after raise:", marina.pay)
