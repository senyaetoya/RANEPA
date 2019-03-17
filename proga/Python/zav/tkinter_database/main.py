from tkinter import *
from tkinter import messagebox
from tkinter.messagebox import showerror
import shelve

shelve_name = 'shelve_database/people-classes'
field_names = ('name', 'age', 'job', 'pay')


def make_widgets():
    global entries
    window = Tk()
    window.title('People Shelve')
    window.iconbitmap('beret.ico')
    form = Frame(window)
    form.pack()
    entries = {}
    for (i, label) in enumerate(('key',) + field_names):  # это так расширяется список
        lab = Label(form, text=label)
        ent = Entry(form)
        lab.grid(row=i, column=0)
        ent.grid(row=i, column=1)
        entries[label] = ent

    Button(window, text="Get", command=get_record).pack(side=LEFT)
    Button(window, text="Update", command=update_record).pack(side=LEFT)
    Button(window, text="Delete", command=delete_record).pack(side=LEFT)
    Button(window, text="Quit", command=window.quit).pack(side=RIGHT)
    return window


def get_record():
    key = entries['key'].get()
    try:
        record = db[key]  # извлечь запись по ключу, отобразить в форме
    except KeyError:
        showerror(title='Error', message='No such key!')
    else:
        for field in field_names:
            entries[field].delete(0, END)
            entries[field].insert(0, getattr(record, field))


def update_record():
    key = entries['key'].get()
    if key in db:  # изменяется существующая запись
        record = db[key]
        for field in field_names:
            new_value = entries[field].get()
            setattr(record, field, new_value)
            db[key] = record
    else:  # добавляется новая
        create_key(key)


def create_key(key):
    result = messagebox.askyesno("Python", "Would you like to save %s in the database?" % key)
    if result:
        from Person import Person  # создать/сохранить новую запись
        record = Person(name=key)
        for field in field_names:
            if field not in 'name':
                new_value = entries[field].get()
                setattr(record, field, new_value)
        db[key] = record


def delete_record():
    key = entries['key'].get()
    try:
        db[key] is True  # проверка наличия записи по этому ключу в базе
        result = messagebox.askyesno("Python", "Would you like to delete %s in the database?" % key)
        if result:
            del db[key]
            messagebox.showinfo(key + " deleted completely.")
    except KeyError:
        messagebox.showinfo("Database", "No such key!")


db = shelve.open(shelve_name)
window = make_widgets()
window.mainloop()
db.close()  # в эту точку программа попадает при щелчке на кнопке Quit
# или при закрытии окна
