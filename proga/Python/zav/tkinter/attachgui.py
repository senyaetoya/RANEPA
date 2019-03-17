from tkinter import *
from custom_gui import CustomGui
from tkinter2 import MyGui

# главное окно приложения
main_win = Tk()  # само главное окно
Label(main_win, text=__name__).pack()  # добавляем в него лэйбл
# окно диалога
popup = Toplevel()  # попап сзади главного окна
Label(popup, text='Attach').pack(side=LEFT)  # добавляем лэйбл
MyGui(popup).pack(side=RIGHT)
CustomGui(popup).pack(side=RIGHT)  # и виджет
main_win.mainloop()
