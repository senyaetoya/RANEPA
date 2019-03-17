import shelve
import os

os.chdir('shelve_database')

while True:
    print('Какую запись хотите удалить? Введите полное имя сотрудника:')
    name = input()
    print('Вы удаляете ' + name + '. Вы уверены? Нажмите y или n')
    choice = input()
    if choice == 'y':
        db = shelve.open('people-classes')
        del db[name]
        db.close()
        print(name + ' Успешно удален.')
        print('Вы хотите удалить другую запись? Нажмите y или n')
        choice2 = input()
        if choice2 == 'y':
            os.system('cls')
        else:
            break
    else:
        print('Вы хотите удалить другую запись? Нажмите y или n')
        choice2 = input()
        if choice2 == 'y':
            os.system('cls')
        else:
            break
