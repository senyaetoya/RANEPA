from tkinter import *
from tkinter.messagebox import showinfo
from tkinter2 import MyGui


class CustomGui(MyGui):  # наследует метод __init__
    def __init__(self, parent=None):
        Frame.__init__(self, parent)
        button2 = Button(self, text="don't press", command=self.reply)
        button2.pack()

    def reply(self):  # замещает метод reply
        showinfo(title='popup', message='Ouch!')


if __name__ == '__main__':
    CustomGui().pack()
    mainloop()
