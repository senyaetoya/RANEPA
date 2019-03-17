import shelve
import os

os.chdir('shelve_database')
db = shelve.open('people-classes')
marina = db['Marina Dadakhanova']
marina.give_raise(.25)
db['Marina Dadakhanova'] = marina
db.close()
