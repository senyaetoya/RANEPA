module Zad1

open System

let zad1()=
    printf "Факториал числа: "
    let x = int(Console.ReadLine())
    let rec factorial x =
        if x<1 then 1
        else x * factorial(x-1) 
    Console.WriteLine ("Факториал {0} = {1}", x, factorial x)
    printfn " "
zad1()





